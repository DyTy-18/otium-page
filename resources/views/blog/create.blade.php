@extends('layouts.app')

@section('title', 'Cargar Nuevo Blog - OTIUM')
@section('meta_description', 'Sube un archivo JSON para crear una nueva publicación en el blog de OTIUM.')

@section('content')
    <div class="py-12 bg-gray-50">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 bg-white border-b border-gray-200">
                    <h1 class="text-3xl font-bold text-finance-dark mb-6 text-center">Cargar Blog desde JSON</h1>

                    <!-- Changed to Red/Gold theme -->
                    <div class="mb-8 bg-red-50 border-l-4 border-finance-gold rounded p-4">
                        <details class="group cursor-pointer">
                            <summary class="flex justify-between items-center list-none">
                                <div class="flex-1">
                                    <div class="flex items-center gap-2 font-bold text-finance-dark">
                                        <span>Instrucciones para generar el JSON</span>
                                        <span
                                            class="text-xs font-normal text-finance-gold bg-red-100 px-2 py-0.5 rounded-full border border-red-200">Recomendado</span>
                                    </div>
                                    <p class="text-xs text-gray-600 mt-1 truncate max-w-md">"Convierte el siguiente texto de
                                        un artículo de blog en un objeto JSON..." (Click para ver más)</p>
                                </div>

                                <div class="flex items-center gap-4">
                                    <button onclick="copyPromt(event)" title="Copiar Prompt"
                                        class="text-gray-500 hover:text-finance-gold p-2 rounded-full hover:bg-red-100 transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </button>
                                    <span class="transition transform group-open:rotate-180 text-finance-gold">
                                        <svg fill="none" class="w-5 h-5" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </span>
                                </div>
                            </summary>

                            <div class="mt-4 text-sm text-gray-700 border-t border-red-200 pt-4">
                                <p class="mb-2">Copia este prompt y úsalo en tu IA favorita (ChatGPT, Claude, Gemini)
                                    junto con el texto de tu artículo para generar el archivo JSON:</p>

                                <div class="relative bg-gray-800 rounded-md p-4 overflow-x-auto">
                                    <pre id="prompt-text" class="text-xs text-gray-100 font-mono whitespace-pre-wrap">Convierte el siguiente texto de un artículo de blog en un objeto JSON válido que siga EXACTAMENTE esta estructura:

{
  "title": "",
  "slug": "",
  "author": {
    "name": ""
  },
  "date": "",
  "featuredImage": {
    "url": "",
    "caption": ""
  },
  "excerpt": "",
  "categories": [],
  "tags": [],
  "content": {
    "introduction": "",
    "sections": [
      {
        "heading": "",
        "content": ""
      }
    ],
    "conclusion": ""
  },
  "seo": {
    "metaTitle": "",
    "metaDescription": "",
    "keywords": ""
  }
}

Reglas estrictas:
- El JSON debe ser válido y bien formateado (sin comas extras, con comillas dobles).
- "title": Usa el título principal del artículo.
- "slug": Genera un slug en minúsculas, con guiones, basado en el título (elimina acentos y caracteres especiales).
- "author.name": Extrae o infiere el autor. Si aparece algo como "/ Autor" o "Por Nombre", úsalo. Si no hay, pon "Unifranz Executive Education" o similar.
- "date": Formato YYYY-MM-DD. Si dice "18 octubre, 2025" → "2025-10-18".
- "featuredImage.url": Usa una URL de imagen genérica y relevante (puedes usar una de Unsplash o similar, ej: https://images.unsplash.com/... relacionada con el tema).
- "featuredImage.caption": Una frase corta descriptiva de la imagen.
- "excerpt": Un resumen corto (2-4 frases) del inicio del artículo (máximo 200 caracteres).
- "categories": Array con 1-3 categorías principales (ej: ["Educación", "Finanzas"]).
- "tags": Array con palabras clave del texto, incluyendo los hashtags del final si los hay (sin el #).
- "content.introduction": El párrafo o párrafos iniciales que introducen el tema (hasta el primer subtítulo grande).
- "content.sections": Cada subtítulo del artículo se convierte en un objeto { "heading": "Título", "content": "Todo el texto bajo ese subtítulo hasta el siguiente" }. Incluye TODOS los subtítulos visibles.
- "content.conclusion": El párrafo o sección final que cierra el artículo.
- "seo.metaTitle": Una versión optimizada del título (puede ser igual o ligeramente mejorada para SEO).
- "seo.metaDescription": Un resumen atractivo de 150-160 caracteres.
- "seo.keywords": String con keywords separadas por coma (las mismas que en tags, más algunas extras).

Texto del artículo:

[PEGA AQUÍ TODO EL TEXTO DEL BLOG]

Solo responde con el JSON puro, sin texto adicional, sin explicaciones, sin ```json.</pre>
                                </div>
                            </div>
                        </details>
                    </div>

                    <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <!-- File Upload Area -->
                        <div
                            class="flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md hover:border-finance-gold transition-colors duration-300 group">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400 group-hover:text-finance-gold"
                                    stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600 justify-center">
                                    <label for="blog_json"
                                        class="relative cursor-pointer bg-white rounded-md font-medium text-finance-gold hover:text-finance-gold-light focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-finance-gold">
                                        <span>Sube un archivo</span>
                                        <input id="blog_json" name="blog_json" type="file" class="sr-only" accept=".json"
                                            required>
                                    </label>
                                    <p class="pl-1">o arrástralo y suéltalo</p>
                                </div>
                                <p class="text-xs text-gray-500">
                                    JSON hasta 2MB
                                </p>
                            </div>
                        </div>

                        <div id="file-name" class="text-center text-sm text-gray-700 font-medium h-5"></div>

                        <div class="flex justify-between items-center bg-gray-50 px-4 py-3 text-right sm:px-6 rounded-md">
                            <a href="{{ route('blog.index') }}" class="text-sm text-gray-600 hover:text-gray-900 underline">
                                Cancelar
                            </a>
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-finance-gold hover:bg-finance-gold-light focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-finance-gold">
                                Procesar y Publicar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function copyPromt(event) {
            if (event) event.preventDefault();

            const text = document.getElementById('prompt-text').innerText;
            navigator.clipboard.writeText(text).then(() => {
                alert('¡Prompt copiado al portapapeles!');
            }).catch(err => {
                console.error('Error al copiar:', err);
            });
        }

        document.getElementById('blog_json').addEventListener('change', function(e) {
            var fileName = e.target.files[0].name;
            document.getElementById('file-name').textContent = 'Archivo seleccionado: ' + fileName;
        });
    </script>
@endsection
