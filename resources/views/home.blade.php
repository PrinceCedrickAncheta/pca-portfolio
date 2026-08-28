@extends('layouts.app')

@php
    $title = 'Prince Cedrick G. Ancheta — ITCS Student & Aspiring IT Professional';
    $metaDescription = 'Prince Cedrick G. Ancheta — Filipino IT student passionate about technology, problem-solving, and creative thinking.';
    $ogTitle = 'Prince Cedrick G. Ancheta — ITCS Student & Aspiring IT Professional';
    $ogDescription = 'Filipino IT student passionate about technology, problem-solving, and creative thinking.';
    $activePage = 'home';
@endphp

@section('content')

{{-- ═══ HERO ═══ --}}
<section id="hero" class="relative min-h-screen flex items-center pt-16 overflow-hidden">
    <div class="absolute top-1/4 right-0 w-96 h-96 bg-accent/8 rounded-full blur-3xl pointer-events-none" aria-hidden="true"></div>
    <div class="absolute bottom-1/4 left-0 w-64 h-64 bg-zinc-800/20 rounded-full blur-3xl pointer-events-none" aria-hidden="true"></div>

    <div class="relative z-10 max-w-6xl mx-auto px-6 py-24 w-full">
        <div class="grid md:grid-cols-2 gap-12 lg:gap-16 items-center">

            <div>
                <p class="reveal text-sm font-medium text-accent tracking-widest uppercase mb-5">ITCS Student &middot; Aspiring IT Professional</p>
                <h1 class="reveal d1 font-[family-name:var(--font-display)] font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl leading-[1.08] tracking-tight text-white mb-6">
                    Hi, I'm <span class="text-accent">Prince Cedrick</span>
                </h1>
                <p class="reveal d2 text-base md:text-lg text-zinc-400 leading-relaxed max-w-lg mb-10">
                    <strong class="font-medium text-zinc-200">ITCS Student</strong> passionate about technology, problem-solving, and creative thinking. I'm continuously developing my skills in programming, systems, and digital tools.
                </p>
                <div class="reveal d3 flex flex-wrap gap-4">
                    <a href="#work" class="shimmer inline-flex items-center gap-2 bg-white text-[#000000] font-medium px-7 py-3.5 rounded-full hover:bg-zinc-200 transition-colors text-sm">
                        View my work
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                    </a>
                    <a href="#contact" class="inline-flex items-center gap-2 border border-zinc-700 text-zinc-300 font-medium px-7 py-3.5 rounded-full hover:bg-zinc-900 hover:border-zinc-600 transition-colors text-sm">Get in touch</a>
                </div>
                <div class="reveal d4 flex flex-wrap gap-8 sm:gap-10 mt-14 pt-8 border-t border-zinc-800/60">
                    <div>
                        <p class="font-[family-name:var(--font-display)] font-bold text-3xl text-white">2027</p>
                        <p class="text-xs text-zinc-500 mt-1.5">Expected Graduation</p>
                    </div>
                    <div>
                        <a href="https://github.com/PrinceCedrickAncheta/Capstone_System" target="_blank" rel="noopener noreferrer" class="font-[family-name:var(--font-display)] font-bold text-3xl text-white hover:text-accent transition-colors nl">1</a>
                        <p class="text-xs text-zinc-500 mt-1.5">Project Built</p>
                    </div>
                    <div>
                        <p class="font-[family-name:var(--font-display)] font-bold text-3xl text-white">7</p>
                        <p class="text-xs text-zinc-500 mt-1.5">Languages Known</p>
                    </div>
                </div>
            </div>

            <div class="reveal d2 flex justify-center md:justify-end">
                <div class="relative w-64 h-64 sm:w-72 sm:h-72 md:w-80 md:h-80 lg:w-96 lg:h-96">
                    <div class="pf w-full h-full rounded-3xl">
                        <img src="{{ asset('images/profile.jpg') }}" alt="Prince Cedrick G. Ancheta — ITCS Student" loading="eager">
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-accent text-[#000000] font-[family-name:var(--font-display)] font-bold text-sm px-4 py-2.5 rounded-2xl shadow-lg shadow-accent/10">Student &amp; Developer</div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══ SERVICES ═══ --}}
<section id="services" class="py-28 bg-surface relative">
    <div class="section-divider absolute top-0 inset-x-0"></div>
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-16">
            <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">What I offer</p>
            <h2 class="reveal d1 font-[family-name:var(--font-display)] font-bold text-4xl md:text-5xl text-white">Services</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">

            <article class="reveal d1 card-h group bg-surface-light rounded-2xl p-8 border border-zinc-800/80 hover:border-accent/60">
                <div class="w-12 h-12 flex items-center justify-center bg-zinc-800 rounded-xl mb-6 group-hover:bg-accent/10 transition-colors">
                    <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                </div>
                <h3 class="font-[family-name:var(--font-display)] font-bold text-xl text-white mb-3">Web Development</h3>
                <p class="text-sm text-zinc-400 leading-relaxed">Building responsive, functional websites using PHP, Laravel, HTML, CSS, and JavaScript. Focused on clean code and practical solutions.</p>
            </article>

            <article class="reveal d2 card-h group bg-surface-light rounded-2xl p-8 border border-zinc-800/80 hover:border-accent/60">
                <div class="w-12 h-12 flex items-center justify-center bg-zinc-800 rounded-xl mb-6 group-hover:bg-accent/10 transition-colors">
                    <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/></svg>
                </div>
                <h3 class="font-[family-name:var(--font-display)] font-bold text-xl text-white mb-3">Database Management</h3>
                <p class="text-sm text-zinc-400 leading-relaxed">Designing and managing MySQL databases. Writing efficient queries, building data-driven applications, and ensuring data integrity.</p>
            </article>

            <article class="reveal d3 card-h group bg-surface-light rounded-2xl p-8 border border-zinc-800/80 hover:border-accent/60">
                <div class="w-12 h-12 flex items-center justify-center bg-zinc-800 rounded-xl mb-6 group-hover:bg-accent/10 transition-colors">
                    <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/></svg>
                </div>
                <h3 class="font-[family-name:var(--font-display)] font-bold text-xl text-white mb-3">Systems &amp; Tools</h3>
                <p class="text-sm text-zinc-400 leading-relaxed">Working with IT systems, digital tools, and software solutions. Continuously learning new technologies to solve real-world problems.</p>
            </article>

        </div>
    </div>
</section>

{{-- ═══ WORK ═══ --}}
<section id="work" class="py-28 relative">
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-16">
            <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">Portfolio</p>
            <h2 class="reveal d1 font-[family-name:var(--font-display)] font-bold text-4xl md:text-5xl text-white">Selected work</h2>
        </div>

        <a href="https://github.com/PrinceCedrickAncheta/Capstone_System" target="_blank" rel="noopener noreferrer" class="block card-h reveal d1 group rounded-2xl overflow-hidden bg-surface-light border border-zinc-800/80 hover:border-accent/60">
            <div class="p-8 md:p-10">
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="text-xs px-2.5 py-1 rounded-full bg-zinc-800 text-accent border border-zinc-700">Full-Stack</span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-zinc-800 text-zinc-400">Laravel</span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-zinc-800 text-zinc-400">MySQL</span>
                    <span class="text-xs px-2.5 py-1 rounded-full bg-zinc-800 text-zinc-400">Tailwind CSS</span>
                </div>
                <h3 class="font-[family-name:var(--font-display)] font-bold text-2xl text-white mb-3 group-hover:text-accent transition-colors">Capstone System</h3>
                <p class="text-sm text-zinc-400 leading-relaxed mb-6 max-w-2xl">A full-stack capstone project built for the ITCS program. Developed using Laravel, MySQL, and Tailwind CSS — demonstrating skills in web development, database design, and systems thinking.</p>
                <span class="inline-flex items-center gap-1.5 text-sm font-medium text-white nl">View on GitHub <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></span>
            </div>
        </a>
    </div>
</section>

{{-- ═══ ABOUT ═══ --}}
<section id="about" class="py-28 bg-surface relative">
    <div class="section-divider absolute top-0 inset-x-0"></div>
    <div class="max-w-6xl mx-auto px-6">
        <div class="grid md:grid-cols-2 gap-16 lg:gap-20 items-center">

            <div class="reveal order-2 md:order-1">
                <div class="pf w-full aspect-square max-w-md mx-auto rounded-3xl">
                    <img src="{{ asset('images/profile.jpg') }}" alt="Prince Cedrick G. Ancheta" loading="lazy">
                </div>
            </div>

            <div class="order-1 md:order-2">
                <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">About me</p>
                <h2 class="reveal d1 font-[family-name:var(--font-display)] font-bold text-4xl md:text-5xl text-white leading-tight mb-8">A bit about<br>who I am</h2>
                <div class="space-y-4">
                    <p class="reveal d2 text-zinc-400 leading-relaxed">
                        I'm a Filipino IT student passionate about technology, problem-solving, and creative thinking. I'm continuously developing my skills in programming, systems, and digital tools by learning through hands-on experience and building practical projects.
                    </p>
                    <p class="reveal d3 text-zinc-400 leading-relaxed">
                        I thrive on turning ideas into functional solutions. Whether it's writing code, designing systems, or exploring new technologies, I'm driven by curiosity and a desire to make an impact in the tech world.
                    </p>
                </div>

                {{-- Skills --}}
                <div class="reveal d4 mt-10">
                    <p class="text-xs font-medium text-zinc-500 uppercase tracking-widest mb-4">Skills</p>
                    <div class="flex flex-wrap gap-2.5" role="list" aria-label="Skills">
                        <span role="listitem" class="stag text-sm bg-zinc-900/80 border border-zinc-700/60 text-zinc-300 px-4 py-2 rounded-full hover:border-accent/60">HTML / CSS</span>
                        <span role="listitem" class="stag text-sm bg-zinc-900/80 border border-zinc-700/60 text-zinc-300 px-4 py-2 rounded-full hover:border-accent/60">JavaScript</span>
                        <span role="listitem" class="stag text-sm bg-zinc-900/80 border border-zinc-700/60 text-zinc-300 px-4 py-2 rounded-full hover:border-accent/60">PHP</span>
                        <span role="listitem" class="stag text-sm bg-zinc-900/80 border border-zinc-700/60 text-zinc-300 px-4 py-2 rounded-full hover:border-accent/60">Laravel</span>
                        <span role="listitem" class="stag text-sm bg-zinc-900/80 border border-zinc-700/60 text-zinc-300 px-4 py-2 rounded-full hover:border-accent/60">MySQL</span>
                        <span role="listitem" class="stag text-sm bg-zinc-900/80 border border-zinc-700/60 text-zinc-300 px-4 py-2 rounded-full hover:border-accent/60">C#</span>
                        <span role="listitem" class="stag text-sm bg-zinc-900/80 border border-zinc-700/60 text-zinc-300 px-4 py-2 rounded-full hover:border-accent/60">C++</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

{{-- ═══ EDUCATION ═══ --}}
<section id="education" class="py-28 relative">
    <div class="max-w-6xl mx-auto px-6">
        <div class="mb-16">
            <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">Background</p>
            <h2 class="reveal d1 font-[family-name:var(--font-display)] font-bold text-4xl md:text-5xl text-white">Education</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6">

            <article class="reveal d1 bg-surface-light rounded-2xl p-8 border border-zinc-800/80">
                <div class="flex items-start gap-4 mb-5">
                    <div class="w-12 h-12 flex items-center justify-center bg-zinc-800 rounded-xl shrink-0">
                        <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-[family-name:var(--font-display)] font-bold text-xl text-white mb-1">Bachelor of Science in IT</h3>
                        <p class="text-sm text-accent">Information and Communications Technology</p>
                    </div>
                </div>
                <p class="text-sm text-zinc-400 leading-relaxed mb-5">Currently pursuing a degree focused on developing skills in programming, systems design, database management, and digital tools. Expected graduation in 2027.</p>
                <div class="flex items-center gap-2 text-xs text-zinc-500">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>2022 &mdash; 2027</span>
                </div>
            </article>

            <article class="reveal d2 bg-surface-light rounded-2xl p-8 border border-zinc-800/80">
                <div class="flex items-start gap-4 mb-5">
                    <div class="w-12 h-12 flex items-center justify-center bg-zinc-800 rounded-xl shrink-0">
                        <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-[family-name:var(--font-display)] font-bold text-xl text-white mb-1">Senior High School</h3>
                        <p class="text-sm text-accent">HUMSS Strand</p>
                    </div>
                </div>
                <p class="text-sm text-zinc-400 leading-relaxed mb-5">Completed the Humanities and Social Sciences strand with a focus on communication, critical thinking, and social sciences.</p>
                <div class="flex items-center gap-2 text-xs text-zinc-500">
                    <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>2020 &mdash; 2022</span>
                </div>
            </article>

        </div>
    </div>
</section>

{{-- ═══ CONTACT ═══ --}}
<section id="contact" class="py-28 relative">
    <div class="section-divider absolute top-0 inset-x-0"></div>
    <div class="max-w-6xl mx-auto px-6">
        <div class="bg-zinc-900 rounded-3xl p-10 md:p-16 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-accent/15 rounded-full blur-3xl pointer-events-none" aria-hidden="true"></div>
            <div class="absolute bottom-0 left-0 w-40 h-40 bg-accent/8 rounded-full blur-2xl pointer-events-none" aria-hidden="true"></div>

            <div class="relative z-10 max-w-xl mx-auto text-center">
                <p class="reveal text-xs font-medium text-accent tracking-widest uppercase mb-3">Get in touch</p>
                <h2 class="reveal d1 font-[family-name:var(--font-display)] font-bold text-4xl md:text-5xl text-white leading-tight mb-5">Let's work<br>together</h2>
                <p class="reveal d2 text-zinc-400 leading-relaxed mb-10">I'm open to collaborations, internships, and project opportunities. Whether it's a school project, a personal idea, or a professional engagement &mdash; let's connect.</p>

                <div class="reveal d3 grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <a href="mailto:princecedrickancheta169@gmail.com" class="group inline-flex items-center gap-3 bg-zinc-800/80 hover:bg-accent/15 text-zinc-300 hover:text-white text-sm font-medium px-5 py-3.5 rounded-xl border border-zinc-700/60 hover:border-accent/50 transition-all">
                        <svg class="w-4 h-4 shrink-0 text-accent/70 group-hover:text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        Email
                    </a>
                    <a href="tel:+639063976541" class="group inline-flex items-center gap-3 bg-zinc-800/80 hover:bg-accent/15 text-zinc-300 hover:text-white text-sm font-medium px-5 py-3.5 rounded-xl border border-zinc-700/60 hover:border-accent/50 transition-all">
                        <svg class="w-4 h-4 shrink-0 text-accent/70 group-hover:text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        0906 397 6541
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100088517885935&rdid=xtAUDsD5oVIuE8Fw&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F17WxbRDdLR#" rel="noopener noreferrer" target="_blank" class="group inline-flex items-center gap-3 bg-zinc-800/80 hover:bg-accent/15 text-zinc-300 hover:text-white text-sm font-medium px-5 py-3.5 rounded-xl border border-zinc-700/60 hover:border-accent/50 transition-all">
                        <svg class="w-4 h-4 shrink-0 text-accent/70 group-hover:text-accent" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        Facebook
                    </a>
                    <a href="https://www.instagram.com/princecedrick_a" rel="noopener noreferrer" target="_blank" class="group inline-flex items-center gap-3 bg-zinc-800/80 hover:bg-accent/15 text-zinc-300 hover:text-white text-sm font-medium px-5 py-3.5 rounded-xl border border-zinc-700/60 hover:border-accent/50 transition-all">
                        <svg class="w-4 h-4 shrink-0 text-accent/70 group-hover:text-accent" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        Instagram
                    </a>
                    <a href="https://github.com/PrinceCedrickAncheta/pca-portfolio" rel="noopener noreferrer" target="_blank" class="group inline-flex items-center gap-3 bg-zinc-800/80 hover:bg-accent/15 text-zinc-300 hover:text-white text-sm font-medium px-5 py-3.5 rounded-xl border border-zinc-700/60 hover:border-accent/50 transition-all sm:col-span-2 sm:justify-center">
                        <svg class="w-4 h-4 shrink-0 text-accent/70 group-hover:text-accent" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        GitHub
                    </a>
                </div>
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
