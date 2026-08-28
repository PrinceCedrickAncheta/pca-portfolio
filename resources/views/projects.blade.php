@extends('layouts.app')

@php
    $title = 'Projects — My Portfolio';
    $metaDescription = 'Projects by Prince Cedrick G. Ancheta — full-stack web development with Laravel, MySQL, and Tailwind CSS.';
    $activePage = 'projects';
@endphp

@section('content')

<section class="pt-36 pb-16 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-80 h-80 bg-accent/8 rounded-full blur-3xl pointer-events-none"></div>
    <div class="max-w-6xl mx-auto px-6 relative z-10">
        <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">Portfolio</p>
        <h1 class="reveal font-[family-name:var(--font-display)] font-bold text-5xl md:text-6xl text-white leading-tight mb-4">All Projects</h1>
        <p class="reveal text-lg text-zinc-400 max-w-xl leading-relaxed">A complete look at my work — full-stack development with Laravel, MySQL, and modern web technologies.</p>
    </div>
</section>

<section class="pb-28" x-data="{ hover: false }">
    <div class="max-w-6xl mx-auto px-6">
        <div class="max-w-2xl">
            <a href="https://github.com/PrinceCedrickAncheta/Capstone_System" target="_blank" rel="noopener noreferrer"
               @mouseenter="hover = true" @mouseleave="hover = false"
               class="group block rounded-2xl overflow-hidden bg-surface-light border border-zinc-800/80 hover:border-accent/60 transition-all hover:shadow-lg hover:shadow-accent/5">
                <div class="photo-frame w-full h-56 md:h-64">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=700&q=80" alt="Capstone System" loading="lazy"/>
                </div>
                <div class="p-8">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs px-2.5 py-1 rounded-full bg-zinc-800 text-accent border border-zinc-700">Full-Stack</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-zinc-800 text-zinc-400">Laravel</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-zinc-800 text-zinc-400">MySQL</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-zinc-800 text-zinc-400">Tailwind CSS</span>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] font-bold text-2xl text-white mb-3 group-hover:text-accent transition-colors">Capstone System</h3>
                    <p class="text-sm text-zinc-400 leading-relaxed mb-6">A full-stack capstone project built for the ITCS program. Developed using Laravel, MySQL, and Tailwind CSS — demonstrating skills in web development, database design, and systems thinking.</p>
                    <div class="flex items-center justify-between">
                        <span class="inline-flex items-center gap-1.5 text-sm font-medium text-white">View on GitHub <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
                        <span class="text-xs text-zinc-500">2027</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<section class="pb-28">
    <div class="max-w-6xl mx-auto px-6">
        <div class="bg-zinc-900 rounded-3xl p-10 md:p-14 text-center relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-accent/15 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-accent/8 rounded-full blur-2xl pointer-events-none"></div>
            <div class="relative z-10">
                <p class="text-xs font-medium text-accent tracking-widest uppercase mb-4">Ready to start?</p>
                <h2 class="font-[family-name:var(--font-display)] font-bold text-3xl md:text-4xl text-white mb-4">Want your project here?</h2>
                <p class="text-zinc-400 max-w-md mx-auto mb-8">I'm available for new projects. Tell me about what you're building and let's see if we're a good fit.</p>
                <a href="{{ route('home') }}#contact" class="inline-flex items-center gap-2 shimmer bg-accent text-[#000000] font-medium px-8 py-3.5 rounded-full hover:bg-accent-light transition-colors">Start a project &rarr;</a>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var yearEl = document.getElementById('year');
        if (yearEl) yearEl.textContent = new Date().getFullYear();
    });
</script>
@endpush
