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
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|max:255',
            'excerpt' => 'required',
            'content' => 'required',
            'category' => 'required',
            'image' => 'required|url',
        ]);

        $newPost = [
            'slug' => $validated['slug'],
            'title' => $validated['title'],
            'excerpt' => $validated['excerpt'],
            'content' => $validated['content'],
            'image' => $validated['image'],
            'date' => now()->format('M d, Y'),
            'author' => auth()->user()->name, // Authenticated user
            'category' => $validated['category']
        ];

        // Store in session for demo purposes since we don't have a migration yet
        $posts = session('blog_posts', []);
        $posts[] = $newPost;
        session(['blog_posts' => $posts]);

        return redirect()->route('blog.index')->with('success', 'Blog publicado exitosamente (Demo: Guardado en sesión).');
    }
}
