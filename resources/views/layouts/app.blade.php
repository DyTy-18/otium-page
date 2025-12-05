<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TSLH6CLRPD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-TSLH6CLRPD');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Meta Tags -->
    <title>@yield('title', 'OTIUM - Consultoría Financiera y Auditoría')</title>
    <meta name="description" content="@yield('meta_description', 'OTIUM - Transformamos la gestión financiera, contable y digital de tu empresa en Bolivia. Expertos en outsourcing, auditoría y estrategia.')">
    <meta name="keywords"
        content="consultoría financiera, auditoría, impuestos, contabilidad, transformación digital, Bolivia, La Paz, Santa Cruz, OTIUM">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'OTIUM - Consultoría Financiera y Auditoría')">
    <meta property="og:description" content="@yield('meta_description', 'OTIUM - Transformamos la gestión financiera, contable y digital de tu empresa en Bolivia.')">
    <meta property="og:image" content="https://otium.com.bo/rsc/logos/logo-otium-white.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', 'OTIUM - Consultoría Financiera y Auditoría')">
    <meta property="twitter:description" content="@yield('meta_description', 'OTIUM - Transformamos la gestión financiera, contable y digital de tu empresa en Bolivia.')">
    <meta property="twitter:image" content="https://otium.com.bo/rsc/logos/logo-otium-white.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-50 text-slate-800">
    <div class="min-h-screen flex flex-col">
        @include('partials.header')

        <main class="flex-grow">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>
</body>

</html>
