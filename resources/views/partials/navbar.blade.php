{{-- @param string $activePage - 'home' or 'projects' --}}
@php
    $activePage = $activePage ?? 'home';
@endphp

<header x-data="{ mm: false, sc: false }"
    x-init="window.addEventListener('scroll', () => { sc = window.scrollY > 20 }, { passive: true })"
    class="fixed inset-x-0 top-0 z-50 transition-all duration-300"
    :class="sc ? 'bg-bg/90 backdrop-blur-md border-b border-border/50' : ''">
    <nav class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between" aria-label="Main navigation">

        <a href="{{ route('home') }}#hero" class="font-[family-name:var(--font-display)] font-bold text-xl tracking-tight relative z-10">
            <span class="text-text">My </span><span class="text-accent">Portfolio</span>
        </a>

        @if($activePage === 'home')
            <ul class="hidden md:flex items-center gap-8 text-sm" role="list"
                x-data="{ s: 'hero' }"
                x-init="window.addEventListener('scroll', () => {
                    const atBottom = (window.innerHeight + window.scrollY) >= document.body.scrollHeight - 60;
                    if (atBottom) { s = 'contact'; return; }
                    const ids = ['contact','education','about','work','services','hero'];
                    for (const id of ids) {
                        const el = document.getElementById(id);
                        if (el && window.scrollY >= el.offsetTop - 130) { s = id; return; }
                    }
                }, { passive: true })">
                <li><a href="#services" class="nl text-muted hover:text-text transition-colors" :class="s === 'services' ? 'on !text-text' : ''">Services</a></li>
                <li><a href="#work" class="nl text-muted hover:text-text transition-colors" :class="s === 'work' ? 'on !text-text' : ''">Work</a></li>
                <li><a href="#about" class="nl text-muted hover:text-text transition-colors" :class="s === 'about' ? 'on !text-text' : ''">About</a></li>
                <li><a href="#education" class="nl text-muted hover:text-text transition-colors" :class="s === 'education' ? 'on !text-text' : ''">Education</a></li>
                <li><a href="#contact" class="nl text-muted hover:text-text transition-colors" :class="s === 'contact' ? 'on !text-text' : ''">Contact</a></li>
            </ul>
        @else
            <ul class="hidden md:flex items-center gap-8 text-sm" role="list">
                <li><a href="{{ route('home') }}#services" class="nl text-muted hover:text-text transition-colors">Services</a></li>
                <li><a href="{{ route('projects') }}" class="nl text-accent font-medium">Work</a></li>
                <li><a href="{{ route('home') }}#about" class="nl text-muted hover:text-text transition-colors">About</a></li>
                <li><a href="{{ route('home') }}#education" class="nl text-muted hover:text-text transition-colors">Education</a></li>
                <li><a href="{{ route('home') }}#contact" class="nl text-muted hover:text-text transition-colors">Contact</a></li>
            </ul>
        @endif

        <div class="flex items-center gap-3">
            <button type="button" x-data="{ dark: document.documentElement.classList.contains('dark') }"
                @click="dark = !dark; document.documentElement.classList.toggle('dark', dark); localStorage.setItem('theme', dark ? 'dark' : 'light')"
                class="hidden md:flex w-9 h-9 items-center justify-center rounded-full border border-border hover:bg-surface-light hover:border-accent transition-colors text-muted hover:text-text"
                :aria-label="dark ? 'Switch to light mode' : 'Switch to dark mode'">
                <svg x-show="dark" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
                <svg x-show="!dark" x-cloak class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z"/></svg>
            </button>
            <a href="https://github.com/PrinceCedrickAncheta/pca-portfolio" rel="noopener noreferrer" target="_blank" class="hidden md:flex w-9 h-9 items-center justify-center rounded-full border border-border hover:bg-surface-light hover:border-accent transition-colors text-muted hover:text-text" aria-label="GitHub">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            </a>
            <a href="{{ route('home') }}#contact" class="hidden md:inline-flex items-center gap-2 shimmer bg-accent text-bg text-sm font-medium px-5 py-2 rounded-full hover:bg-accent-light transition-colors">
                Contact me <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <button @click="mm = !mm" class="md:hidden w-9 h-9 flex items-center justify-center rounded-full border border-border hover:bg-surface-light transition-colors" :aria-expanded="mm" aria-label="Toggle menu">
                <svg x-show="!mm" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg x-show="mm" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </nav>

    {{-- mobile menu --}}
    <div x-show="mm" x-cloak
        x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2"
        class="md:hidden bg-bg/95 backdrop-blur-md border-t border-border/50">
        <ul class="flex flex-col px-6 py-6 gap-5 text-sm font-medium" role="list">
            <li><a href="{{ route('home') }}#services" @click="mm = false" class="block text-text hover:text-accent transition-colors">Services</a></li>
            <li><a href="{{ route('projects') }}" @click="mm = false" class="block text-text hover:text-accent transition-colors">Work</a></li>
            <li><a href="{{ route('home') }}#about" @click="mm = false" class="block text-text hover:text-accent transition-colors">About</a></li>
            <li><a href="{{ route('home') }}#education" @click="mm = false" class="block text-text hover:text-accent transition-colors">Education</a></li>
            <li><a href="{{ route('home') }}#contact" @click="mm = false" class="block text-text hover:text-accent transition-colors">Contact</a></li>
            <li class="pt-4 border-t border-border/50 flex items-center gap-3">
                <a href="{{ route('home') }}#contact" @click="mm = false" class="inline-flex shimmer bg-accent text-bg font-medium text-sm px-5 py-2.5 rounded-full">Contact me &rarr;</a>
                <button type="button" x-data="{ dark: document.documentElement.classList.contains('dark') }"
                    @click="dark = !dark; document.documentElement.classList.toggle('dark', dark); localStorage.setItem('theme', dark ? 'dark' : 'light'); mm = false"
                    class="w-10 h-10 flex items-center justify-center rounded-full border border-border hover:border-accent text-muted hover:text-text transition-colors"
                    :aria-label="dark ? 'Switch to light mode' : 'Switch to dark mode'">
                    <svg x-show="dark" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
                    <svg x-show="!dark" x-cloak class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z"/></svg>
                </button>
                <a href="https://github.com/PrinceCedrickAncheta/pca-portfolio" rel="noopener noreferrer" target="_blank" @click="mm = false" class="w-10 h-10 flex items-center justify-center rounded-full border border-border hover:border-accent text-muted hover:text-text transition-colors" aria-label="GitHub">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                </a>
            </li>
        </ul>
    </div>
</header>
