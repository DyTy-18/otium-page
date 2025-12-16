<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $posts = [
        [
            'slug' => 'importancia-contabilidad-digital',
            'title' => 'La Importancia de la Contabilidad Digital en 2025',
            'excerpt' => 'Descubre cómo la digitalización está transformando la gestión financiera de las empresas y por qué no puedes quedarte atrás.',
            'content' => '
                <p class="mb-4">La contabilidad ha dejado de ser un simple registro de libros para convertirse en una herramienta estratégica impulsada por la tecnología. En 2025, la digitalización no es una opción, es una necesidad.</p>
                
                <h3 class="text-2xl font-bold text-finance-dark mb-3">Automatización de Procesos</h3>
                <p class="mb-4">Las herramientas digitales permiten automatizar tareas repetitivas como la facturación, la conciliación bancaria y la generación de reportes. Esto libera tiempo valioso para que los contadores se enfoquen en el análisis y la estrategia.</p>

                <h3 class="text-2xl font-bold text-finance-dark mb-3">Acceso en Tiempo Real</h3>
                <p class="mb-4">Con la contabilidad en la nube, los dueños de negocios pueden acceder a su información financiera desde cualquier lugar y en cualquier momento. Esto facilita la toma de decisiones informadas y ágiles.</p>

                <h3 class="text-2xl font-bold text-finance-dark mb-3">Seguridad y Cumplimiento</h3>
                <p class="mb-4">Los sistemas digitales modernos ofrecen altos estándares de seguridad para proteger los datos sensibles. Además, se actualizan automáticamente para cumplir con las normativas fiscales cambiantes.</p>
            ',
            'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'date' => 'Nov 28, 2024',
            'author' => 'Zaulo Vasquez',
            'category' => 'Tecnología'
        ],
        [
            'slug' => 'auditoria-interna-clave-exito',
            'title' => 'Auditoría Interna: La Clave para el Éxito Empresarial',
            'excerpt' => 'Más allá del cumplimiento, la auditoría interna ofrece una visión profunda de los riesgos y oportunidades de tu negocio.',
            'content' => '
                <p class="mb-4">Muchas empresas ven la auditoría interna como un mal necesario o un simple requisito de cumplimiento. Sin embargo, cuando se realiza correctamente, es una herramienta poderosa para mejorar la eficiencia y proteger el valor de la empresa.</p>

                <h3 class="text-2xl font-bold text-finance-dark mb-3">Identificación de Riesgos</h3>
                <p class="mb-4">Los auditores internos evalúan los controles y procesos para identificar riesgos operativos, financieros y de cumplimiento antes de que se conviertan en problemas graves.</p>

                <h3 class="text-2xl font-bold text-finance-dark mb-3">Mejora de Procesos</h3>
                <p class="mb-4">Al analizar cómo se hacen las cosas, la auditoría interna puede recomendar formas más eficientes y efectivas de operar, reduciendo costos y mejorando la calidad.</p>
            ',
            'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'date' => 'Nov 25, 2024',
            'author' => 'James Sterling',
            'category' => 'Auditoría'
        ],
        [
            'slug' => 'estrategias-fiscales-pymes',
            'title' => 'Estrategias Fiscales para PyMEs en Bolivia',
            'excerpt' => 'Consejos prácticos para optimizar la carga tributaria de tu pequeña o mediana empresa cumpliendo con la normativa.',
            'content' => '
                <p class="mb-4">La gestión fiscal es uno de los mayores desafíos para las PyMEs en Bolivia. Una planificación adecuada puede marcar la diferencia entre la rentabilidad y las dificultades financieras.</p>

                <h3 class="text-2xl font-bold text-finance-dark mb-3">Conoce tus Obligaciones</h3>
                <p class="mb-4">El primer paso es entender claramente qué impuestos aplican a tu negocio y cuándo deben pagarse. El desconocimiento no exime del cumplimiento.</p>

                <h3 class="text-2xl font-bold text-finance-dark mb-3">Aprovecha los Incentivos</h3>
                <p class="mb-4">Existen regímenes y beneficios fiscales diseñados para apoyar a ciertos sectores o tamaños de empresa. Asegúrate de estar aprovechando todas las oportunidades legales para reducir tu carga tributaria.</p>
            ',
            'image' => 'https://images.unsplash.com/photo-1586486855514-8c633cc6fd38?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
            'date' => 'Nov 20, 2024',
            'author' => 'Sarah Chen',
            'category' => 'Impuestos'
        ]
    ];

    public function index()
    {
        $allPosts = array_merge(session('blog_posts', []), $this->posts);
        return view('blog.index', ['posts' => $allPosts]);
    }

    public function show($slug)
    {
        // Merge session posts with static posts to find the slug
        $allPosts = array_merge(session('blog_posts', []), $this->posts);
        $post = collect($allPosts)->firstWhere('slug', $slug);

        if (!$post) {
            abort(404);
        }

        return view('blog.show', ['post' => $post]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_json' => 'required|file|mimes:json|max:2048', // Max 2MB
        ]);

        try {
            $jsonContent = file_get_contents($request->file('blog_json')->getRealPath());
            $data = json_decode($jsonContent, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                return back()->withErrors(['blog_json' => 'El archivo no es un JSON válido.']);
            }

            // Basic validation of JSON structure
            if (!isset($data['title']) || !isset($data['slug']) || !isset($data['content'])) {
                return back()->withErrors(['blog_json' => 'El JSON no tiene la estructura requerida (Título, Slug, Content).']);
            }

            // Construct HTML content from JSON parts
            $htmlContent = '';
            
            // Introduction
            if (!empty($data['content']['introduction'])) {
                $htmlContent .= '<p class="mb-4">' . e($data['content']['introduction']) . '</p>';
            }

            // Sections
            if (!empty($data['content']['sections']) && is_array($data['content']['sections'])) {
                foreach ($data['content']['sections'] as $section) {
                    // Handle both simple strings or objects with 'heading'/'content'
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

            // Fallback if content was just a string in the JSON (legacy support or creative use)
            if (is_string($data['content'])) {
               $htmlContent = $data['content'];
            }

            $newPost = [
                'slug' => (\Illuminate\Support\Str::slug($data['slug'] ?? $data['title'])),
                'title' => $data['title'],
                'excerpt' => $data['excerpt'] ?? substr(strip_tags($htmlContent), 0, 150) . '...',
                'content' => $htmlContent,
                'image' => $data['featuredImage']['url'] ?? 'https://source.unsplash.com/random/800x600/?office', // Fallback image
                'date' => $data['date'] ?? now()->format('M d, Y'),
                'author' => $data['author']['name'] ?? auth()->user()->name,
                'category' => $data['categories'][0] ?? 'General'
            ];

            // Store in session
            $posts = session('blog_posts', []);
            $posts[] = $newPost;
            session(['blog_posts' => $posts]);

            return redirect()->route('blog.index')->with('success', 'Blog importado y publicado exitosamente.');

        } catch (\Exception $e) {
            return back()->withErrors(['blog_json' => 'Error procesando el archivo: ' . $e->getMessage()]);
        }
    }
}
