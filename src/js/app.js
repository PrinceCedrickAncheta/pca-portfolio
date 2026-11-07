import './bootstrap';

import Alpine from 'alpinejs';

const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const isDesktop = window.matchMedia('(pointer: fine)').matches;

window.Alpine = Alpine;

// ===== Scroll progress + back to top =====
try {
    const progress = document.getElementById('scrollProgress');
    const backToTop = document.getElementById('backToTop');
    function updateScroll() {
        try {
            const h = document.documentElement;
            const scrolled = h.scrollTop || document.body.scrollTop || 0;
            const max = h.scrollHeight - h.clientHeight;
            const pct = max > 0 ? (scrolled / max) * 100 : 0;
            if (progress) progress.style.width = pct + '%';
            if (backToTop) {
                if (scrolled > 400) backToTop.classList.add('show');
                else backToTop.classList.remove('show');
            }
        } catch (e) { console.error(e); }
    }
    window.addEventListener('scroll', updateScroll, { passive: true });
    updateScroll();
    if (backToTop) backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: reduced ? 'auto' : 'smooth' }));
} catch (e) { console.error(e); }

// ===== Heading mint underline =====
try {
    document.querySelectorAll('section h2').forEach(h => h.classList.add('sh'));
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('.sh').forEach(el => io.observe(el));
} catch (e) { console.error(e); }

// ===== Reveal observer =====
try {
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));
} catch (e) { console.error(e); }

// ===== Count up stats =====
try {
    function countUp(el) {
        const target = parseInt(el.dataset.target, 10);
        if (isNaN(target)) return;
        const duration = 1400;
        const start = performance.now();
        function step(now) {
            const t = Math.min((now - start) / duration, 1);
            const eased = 1 - Math.pow(1 - t, 3);
            el.textContent = Math.floor(eased * target).toLocaleString();
            if (t < 1) requestAnimationFrame(step);
            else el.textContent = target.toLocaleString();
        }
        requestAnimationFrame(step);
    }
    const statsObs = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.querySelectorAll('[data-target]').forEach(countUp);
                statsObs.unobserve(e.target);
            }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('[data-stats]').forEach(el => statsObs.observe(el));
} catch (e) { console.error(e); }

// ===== Typing line =====
try {
    function typeLoop(el, words) {
        if (reduced) { el.textContent = words[0]; return; }
        let wi = 0, ci = 0, deleting = false;
        function tick() {
            const word = words[wi];
            if (!deleting) {
                ci++;
                el.textContent = word.slice(0, ci);
                if (ci === word.length) { deleting = true; setTimeout(tick, 1600); return; }
                setTimeout(tick, 90);
            } else {
                ci--;
                el.textContent = word.slice(0, ci);
                if (ci === 0) { deleting = false; wi = (wi + 1) % words.length; setTimeout(tick, 300); return; }
                setTimeout(tick, 45);
            }
        }
        tick();
    }
    document.querySelectorAll('[data-typing]').forEach(el => {
        const words = (el.dataset.typing || '').split('|');
        typeLoop(el, words);
    });
} catch (e) { console.error(e); }

// ===== Skill chips pop in =====
try {
    document.querySelectorAll('[data-skill-chips]').forEach(container => {
        const chips = container.querySelectorAll('.skill-chip');
        const o = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    chips.forEach((c, i) => setTimeout(() => c.classList.add('in'), i * 80));
                    o.unobserve(e.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
        o.observe(container);
    });
} catch (e) { console.error(e); }

// ===== Education timeline =====
try {
    const o = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) { e.target.classList.add('in'); o.unobserve(e.target); }
        });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
    document.querySelectorAll('.edu-timeline').forEach(el => o.observe(el));
} catch (e) { console.error(e); }

// ===== Desktop: hero glow + tilt =====
try {
    if (isDesktop && !reduced) {
        const hero = document.getElementById('heroSection');
        const glow = document.getElementById('heroGlow');
        const photo = document.getElementById('heroPhoto');
        if (hero && glow) {
            hero.addEventListener('mousemove', e => {
                const r = hero.getBoundingClientRect();
                glow.style.left = (e.clientX - r.left) + 'px';
                glow.style.top = (e.clientY - r.top) + 'px';
            });
        }
        if (photo) {
            photo.addEventListener('mousemove', e => {
                const r = photo.getBoundingClientRect();
                const x = (e.clientX - r.left) / r.width - 0.5;
                const y = (e.clientY - r.top) / r.height - 0.5;
                photo.style.transform = 'perspective(800px) rotateY(' + (x * 12) + 'deg) rotateX(' + (-y * 12) + 'deg)';
            });
            photo.addEventListener('mouseleave', () => { photo.style.transform = 'perspective(800px) rotateY(0) rotateX(0)'; });
        }
    }
} catch (e) { console.error(e); }

Alpine.start();