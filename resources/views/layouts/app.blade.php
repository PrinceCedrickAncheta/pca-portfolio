<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <script>document.documentElement.classList.add('js');</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $metaDescription ?? 'Prince Cedrick G. Ancheta — ITCS Student and Aspiring IT Professional.' }}">
    <meta name="keywords" content="IT student, portfolio, web developer, programmer, PHP, Laravel, C++, C#">
    <meta name="author" content="{{ $author ?? 'Prince Cedrick G. Ancheta' }}">
    <meta property="og:title" content="{{ $ogTitle ?? 'Prince Cedrick G. Ancheta — ITCS Student & Aspiring IT Professional' }}">
    <meta property="og:description" content="{{ $ogDescription ?? 'Filipino IT student passionate about technology, problem-solving, and creative thinking.' }}">
    <meta property="og:type" content="website">
    <title>{{ $title ?? 'Prince Cedrick G. Ancheta — Portfolio' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500&display=swap" rel="stylesheet">

    <script>
        (function () {
            try {
                var stored = localStorage.getItem('theme');
                var prefersLight = window.matchMedia('(prefers-color-scheme: light)').matches;
                var theme = stored || (prefersLight ? 'light' : 'dark');
                if (theme === 'dark') {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            } catch (e) {}
        })();
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data x-init="$nextTick(() => { const io = new IntersectionObserver(entries => { entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } }); }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' }); document.querySelectorAll('.reveal, .sh').forEach(el => io.observe(el)); })"
      class="bg-bg text-text antialiased"
      style="transition: background-color .3s, color .3s">

    <div id="scrollProgress" class="fixed top-0 left-0 h-0.5 bg-accent z-[70] transition-[width] duration-100" style="width:0%"></div>

    {{-- noise overlay --}}
    <style>
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 40;
            opacity: .08;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 200 200'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.05'/%3E%3C/svg%3E");
        }
        .dark body::before {
            opacity: .3;
        }
    </style>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <button id="backToTop" type="button" aria-label="Back to top"
        class="fixed bottom-6 right-6 z-50 w-11 h-11 flex items-center justify-center rounded-full bg-accent text-bg shadow-lg hover:bg-accent-light transition-all opacity-0 pointer-events-none">
        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
    </button>

    @stack('scripts')
</body>
</html>
