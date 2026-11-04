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
        <h1 class="reveal font-[family-name:var(--font-display)] font-bold text-5xl md:text-6xl text-text leading-tight mb-4">All Projects</h1>
        <p class="reveal text-lg text-muted max-w-xl leading-relaxed">A complete look at my work — full-stack development with Laravel, MySQL, and modern web technologies.</p>
    </div>
</section>

<section class="pb-28" x-data="{ hover: false }">
    <div class="max-w-6xl mx-auto px-6">
        <div class="max-w-2xl">
            <a href="https://github.com/PrinceCedrickAncheta/Capstone_System" target="_blank" rel="noopener noreferrer"
               @mouseenter="hover = true" @mouseleave="hover = false"
               class="group block rounded-2xl overflow-hidden bg-surface-light border border-border/80 hover:border-accent/60 transition-all hover:shadow-lg hover:shadow-accent/5">
                <div class="photo-frame w-full h-56 md:h-64">
                    <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=700&q=80" alt="Capstone System" loading="lazy"/>
                </div>
                <div class="p-8">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs px-2.5 py-1 rounded-full bg-surface-light text-accent border border-border">Full-Stack</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-surface-light text-muted">Laravel</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-surface-light text-muted">MySQL</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-surface-light text-muted">Tailwind CSS</span>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] font-bold text-2xl text-text mb-3 group-hover:text-accent transition-colors">Capstone System</h3>
                    <p class="text-sm text-muted leading-relaxed mb-6">A full-stack capstone project built for the ITCS program. Developed using Laravel, MySQL, and Tailwind CSS — demonstrating skills in web development, database design, and systems thinking.</p>
                    <div class="flex items-center justify-between">
                        <span class="inline-flex items-center gap-1.5 text-sm font-medium text-text">View on GitHub <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
                        <span class="text-xs text-muted">2027</span>
                    </div>
                </div>
            </a>
            <button type="button" @click="window.dispatchEvent(new CustomEvent('dccp-open'))"
               class="group block rounded-2xl overflow-hidden bg-surface-light border border-border/80 hover:border-accent/60 transition-all hover:shadow-lg hover:shadow-accent/5 text-left w-full">
                <div class="photo-frame w-full aspect-[16/10]">
                    <img src="{{ asset('images/S1.png') }}" alt="DCCP Document Portal" loading="lazy" class="w-full h-full object-cover object-top"/>
                </div>
                <div class="p-8">
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="text-xs px-2.5 py-1 rounded-full bg-surface-light text-accent border border-border">Full-Stack</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-surface-light text-muted">PHP</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-surface-light text-muted">MySQL</span>
                        <span class="text-xs px-2.5 py-1 rounded-full bg-surface-light text-muted">Tailwind CSS</span>
                    </div>
                    <h3 class="font-[family-name:var(--font-display)] font-bold text-2xl text-text mb-3 group-hover:text-accent transition-colors">DCCP Document Portal</h3>
                    <p class="text-sm text-muted leading-relaxed mb-6">An online document request and tracking portal for the Registrar's Office of Data Center College of the Philippines — students request documents, track status, and see fees.</p>
                    <div class="flex items-center justify-between">
                        <span class="inline-flex items-center gap-1.5 text-sm font-medium text-text">View screenshots <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
                        <span class="text-xs text-muted">2025</span>
                    </div>
                </div>
            </button>
        </div>
    </div>
</section>

<section class="pb-28">
    <div class="max-w-6xl mx-auto px-6">
        <div class="bg-surface rounded-3xl p-10 md:p-14 text-center relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-accent/15 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-accent/8 rounded-full blur-2xl pointer-events-none"></div>
            <div class="relative z-10">
                <p class="text-xs font-medium text-accent tracking-widest uppercase mb-4">Ready to start?</p>
                <h2 class="font-[family-name:var(--font-display)] font-bold text-3xl md:text-4xl text-text mb-4">Want your project here?</h2>
                <p class="text-muted max-w-md mx-auto mb-8">I'm available for new projects. Tell me about what you're building and let's see if we're a good fit.</p>
                <a href="{{ route('home') }}#contact" class="inline-flex items-center gap-2 shimmer bg-accent text-bg font-medium px-8 py-3.5 rounded-full hover:bg-accent-light transition-colors">Start a project &rarr;</a>
            </div>
        </div>
    </div>
</section>


{{-- DCCP Document Portal modal --}}
@php
    $dccpProject = [
        'title' => 'DCCP Document Portal',
        'description' => "An online document request and tracking portal for the Registrar's Office of Data Center College of the Philippines. Students request documents, track their status, and view associated fees.",
        'tags' => ['Full-Stack', 'PHP', 'MySQL', 'Tailwind CSS'],
        'url' => 'https://dccp-abra-registraroffice.infinityfree.io/',
        'screenshots' => ['S1.png', 'S2.png', 'S3.png', 'S4.png', 'S5.png'],
    ];
    $dccpModalData = [
        'open' => false,
        'idx' => 0,
        'title' => $dccpProject['title'],
        'description' => $dccpProject['description'],
        'tags' => $dccpProject['tags'],
        'url' => $dccpProject['url'],
        'images' => array_map(fn ($f) => asset('images/' . $f), $dccpProject['screenshots']),
    ];
@endphp
<div x-data="@js($dccpModalData)"
    x-on:dccp-open.window="open = true; idx = 0; $nextTick(() => { if ($refs.closeBtn) $refs.closeBtn.focus(); })"
    x-effect="document.body.style.overflow = open ? 'hidden' : ''"
    @keydown.escape.window="if (open) open = false"
    @keydown.arrow-left.window="if (open) idx = (idx - 1 + images.length) % images.length"
    @keydown.arrow-right.window="if (open) idx = (idx + 1) % images.length">

    <div x-show="open" x-cloak
        class="fixed inset-0 z-[60] flex items-center justify-center p-4 sm:p-6"
        role="dialog" aria-modal="true" aria-labelledby="dccp-modal-title"
        :aria-hidden="!open">
        <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
            class="absolute inset-0 bg-black/70 backdrop-blur-sm" @click="open = false"></div>

        <div x-show="open"
            x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
            class="relative z-10 w-full max-w-4xl max-h-[90vh] overflow-y-auto bg-surface-light rounded-2xl border border-border shadow-2xl">
            <div class="flex items-center justify-between p-5 border-b border-border">
                <h3 id="dccp-modal-title" class="font-[family-name:var(--font-display)] font-bold text-xl text-text" x-text="title"></h3>
                <button type="button" x-ref="closeBtn" @click="open = false"
                    class="w-9 h-9 flex items-center justify-center rounded-full border border-border hover:bg-surface hover:border-accent transition-colors text-muted hover:text-text"
                    aria-label="Close dialog">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <div class="p-5">
                <div class="relative aspect-[16/10] w-full max-h-[70vh] overflow-hidden rounded-xl bg-surface-light">
                    <img :src="images[idx]" :alt="title + ' screenshot ' + (idx + 1)" class="w-full h-full object-contain">
                    <button type="button" @click="idx = (idx - 1 + images.length) % images.length"
                        class="absolute left-2 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-bg/70 border border-border text-text hover:bg-accent hover:text-bg transition-colors"
                        aria-label="Previous screenshot">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button type="button" @click="idx = (idx + 1) % images.length"
                        class="absolute right-2 top-1/2 -translate-y-1/2 w-10 h-10 flex items-center justify-center rounded-full bg-bg/70 border border-border text-text hover:bg-accent hover:text-bg transition-colors"
                        aria-label="Next screenshot">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                    <div class="absolute bottom-2 left-1/2 -translate-x-1/2 px-3 py-1 rounded-full bg-bg/70 border border-border text-xs text-text" x-text="(idx + 1) + '/' + images.length"></div>
                </div>

                <div class="flex gap-2 mt-4 overflow-x-auto pb-2">
                    <template x-for="(img, i) in images" :key="i">
                        <button type="button" @click="idx = i"
                            class="shrink-0 w-20 h-14 rounded-lg overflow-hidden border-2 transition-colors"
                            :class="i === idx ? 'border-accent' : 'border-border hover:border-accent/60'">
                            <img :src="img" :alt="'Thumbnail ' + (i + 1)" class="w-full h-full object-cover object-top">
                        </button>
                    </template>
                </div>

                <p class="text-sm text-muted leading-relaxed mt-4" x-text="description"></p>
                <div class="flex flex-wrap gap-2 mt-3">
                    <template x-for="tag in tags" :key="tag">
                        <span class="text-xs px-2.5 py-1 rounded-full bg-surface text-accent border border-border" x-text="tag"></span>
                    </template>
                </div>

                <div class="mt-6">
                    <a :href="url" target="_blank" rel="noopener noreferrer"
                        class="shimmer inline-flex items-center gap-2 bg-accent text-bg font-medium px-6 py-3 rounded-full hover:bg-accent-light transition-colors text-sm">
                        View the website
                        <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var yearEl = document.getElementById('year');
        if (yearEl) yearEl.textContent = new Date().getFullYear();
    });
</script>
@endpush
