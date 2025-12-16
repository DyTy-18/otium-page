<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        // Convert to array for compatibility if views expect arrays, 
        // though Blade handles objects. Let's pass objects and if view fails we fix view.
        // Actually, previous views used $post['slug'], which works on models in newer Laravel 
        // via ArrayAccess, but safer to standardise.
        return view('blog.index', ['posts' => $posts]);
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('blog.show', ['post' => $post]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_json' => 'required|file|mimes:json|max:2048',
        ]);

        try {
            $jsonContent = file_get_contents($request->file('blog_json')->getRealPath());
            $data = json_decode($jsonContent, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                return back()->withErrors(['blog_json' => 'El archivo no es un JSON válido.']);
            }

            // Basic validation
            if (!isset($data['title']) || !isset($data['slug']) || !isset($data['content'])) {
                return back()->withErrors(['blog_json' => 'El JSON no tiene la estructura requerida (Título, Slug, Content).']);
            }

            // Construct HTML content
            $htmlContent = '';
            // Introduction
            if (!empty($data['content']['introduction'])) {
                $htmlContent .= '<p class="mb-4">' . e($data['content']['introduction']) . '</p>';
            }
            // Sections
            if (!empty($data['content']['sections']) && is_array($data['content']['sections'])) {
                foreach ($data['content']['sections'] as $section) {
                    if (is_array($section)) {
                        $heading = $section['heading'] ?? $section['title'] ?? '';
                        $body = $section['content'] ?? $section['body'] ?? '';
                        
                        if ($heading) {
                            $htmlContent .= '<h3 class="text-2xl font-bold text-finance-dark mb-3">' . e($heading) . '</h3>';
                        }
                        if ($body) {
                            $htmlContent .= '<p class="mb-4">' . e($body) . '</p>';
                        }
                    } 
                }
            }
            // Conclusion
            if (!empty($data['content']['conclusion'])) {
                $htmlContent .= '<h3 class="text-2xl font-bold text-finance-dark mb-3">Conclusión</h3>';
                $htmlContent .= '<p class="mb-4">' . e($data['content']['conclusion']) . '</p>';
            }
            // Fallback
            if (is_string($data['content'])) {
               $htmlContent = $data['content'];
            }

            $date = $data['date'] ?? now();
            // Try to format date if string
            try {
                $date = \Carbon\Carbon::parse($date)->format('Y-m-d');
            } catch (\Exception $e) {
                $date = now();
            }

            Post::updateOrCreate(
                ['slug' => \Illuminate\Support\Str::slug($data['slug'] ?? $data['title'])],
                [
                    'title'       => $data['title'],
                    'excerpt'     => $data['excerpt'] ?? substr(strip_tags($htmlContent), 0, 150) . '...',
                    'content'     => $htmlContent,
                    'image'       => $data['featuredImage']['url'] ?? 'https://source.unsplash.com/random/800x600/?office',
                    'date'        => $date,
                    'author'      => $data['author']['name'] ?? auth()->user()->name,
                    'category'    => $data['categories'][0] ?? 'General',
                    'json_data'   => $data // Store complete raw JSON
                ]
            );

            return redirect()->route('blog.index')->with('success', 'Blog publicado exitosamente en la base de datos.');

        } catch (\Exception $e) {
            return back()->withErrors(['blog_json' => 'Error al guardar en base de datos: ' . $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('blog.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        
        $request->validate([
            'blog_json' => 'required|file|mimes:json|max:2048',
        ]);

        try {
            $jsonContent = file_get_contents($request->file('blog_json')->getRealPath());
            $data = json_decode($jsonContent, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                return back()->withErrors(['blog_json' => 'El archivo no es un JSON válido.']);
            }

            if (!isset($data['title']) || !isset($data['slug']) || !isset($data['content'])) {
                return back()->withErrors(['blog_json' => 'El JSON no tiene la estructura requerida (Título, Slug, Content).']);
            }

            // Construct HTML content
            $htmlContent = '';
            if (!empty($data['content']['introduction'])) {
                $htmlContent .= '<p class="mb-4">' . e($data['content']['introduction']) . '</p>';
            }
            if (!empty($data['content']['sections']) && is_array($data['content']['sections'])) {
                foreach ($data['content']['sections'] as $section) {
                    if (is_array($section)) {
                        $heading = $section['heading'] ?? $section['title'] ?? '';
                        $body = $section['content'] ?? $section['body'] ?? '';
                        if ($heading) $htmlContent .= '<h3 class="text-2xl font-bold text-finance-dark mb-3">' . e($heading) . '</h3>';
                        if ($body) $htmlContent .= '<p class="mb-4">' . e($body) . '</p>';
                    } 
                }
            }
            if (!empty($data['content']['conclusion'])) {
                $htmlContent .= '<h3 class="text-2xl font-bold text-finance-dark mb-3">Conclusión</h3>';
                $htmlContent .= '<p class="mb-4">' . e($data['content']['conclusion']) . '</p>';
            }
            if (is_string($data['content'])) {
               $htmlContent = $data['content'];
            }

            $date = $data['date'] ?? now();
            try { $date = \Carbon\Carbon::parse($date)->format('Y-m-d'); } catch (\Exception $e) { $date = now(); }

            $post->update([
                'slug'        => \Illuminate\Support\Str::slug($data['slug'] ?? $data['title']),
                'title'       => $data['title'],
                'excerpt'     => $data['excerpt'] ?? substr(strip_tags($htmlContent), 0, 150) . '...',
                'content'     => $htmlContent,
                'image'       => $data['featuredImage']['url'] ?? $post->image,
                'date'        => $date,
                'author'      => $data['author']['name'] ?? auth()->user()->name,
                'category'    => $data['categories'][0] ?? 'General',
                'json_data'   => $data
            ]);

            return redirect()->route('blog.index')->with('success', 'Blog actualizado correctamente.');

        } catch (\Exception $e) {
            return back()->withErrors(['blog_json' => 'Error actualizando: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('blog.index')->with('success', 'Blog eliminado correctamente.');
    }
}
