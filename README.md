# My Portfolio

A personal portfolio website for **Prince Cedrick G. Ancheta**, an ITCS student and aspiring IT professional. The site showcases his profile, services, projects, education, skills, and contact information.

Built with Laravel and styled with Tailwind CSS + Alpine.js.

## Tech Stack

- **Backend:** Laravel 12 (PHP 8.2)
- **Database:** SQLite (default; defaults are standard Laravel migrations for users/cache/jobs)
- **Frontend:** Blade templates, Tailwind CSS v4, Alpine.js 3, built via Vite
- **Fonts:** DM Sans (body) and PT Sans (display headings)
- **Testing:** Pest

## Pages & Routes

| Route | Name | View | Description |
| --- | --- | --- | --- |
| `/` | `home` | `home` | Single-page landing with Hero, Services, Work, About, Education, and Contact sections |
| `/projects` | `projects` | `projects` | Dedicated projects page with the Capstone System project and a contact CTA |

Routes are defined in `routes/web.php`; all pages return simple Blade views.

## Project Structure

```
resources/views/
├── layouts/app.blade.php   # Shared layout (meta, fonts, Alpine reveal-on-scroll init)
├── partials/
│   ├── navbar.blade.php    # Fixed navbar w/ scroll state, active-section tracking, mobile menu
│   └── footer.blade.php    # Footer w/ GitHub link and year
├── home.blade.php          # Landing page (single-page sections)
└── projects.blade.php      # Projects page
```

## Theming

Design tokens are defined with Tailwind v4's `@theme` in `resources/css/app.css`:

- `--color-accent: #95E7B3` (mint green)
- `--color-surface: #111111`, `--color-surface-light: #1A1A1A`
- Background: black (`#000000`), text: white

Custom CSS in `app.css` provides scroll-reveal animations (`.reveal`), nav underline (`nl`), shimmer buttons, photo frames, card hover, and section dividers.

## Rendering & Assets

- Profile photo: `public/images/profile.jpg` (also kept at the repo root as `profile.jpg.jpg`).
- Compiled assets live in `public/build` (`npm run build`).
- Social/contact links (email, phone, Facebook, Instagram, GitHub) are hardcoded in the contact section and footer.

## Local Setup

```bash
composer install
npm install

copy .env.example .env   # or: php -r "file_exists('.env') || copy('.env.example', '.env');"
php artisan key:generate
php artisan migrate --force

npm run build            # or: npm run dev for hot reloading
php artisan serve
```

The app is expected to run at `C:\xampp\htdocs\My_Portfolio` (XAMPP environment).

## Tests

```bash
composer test
# or
php artisan test --compact
```

## Origin

The site was originally converted from the Folio Tailwind template (Tailwind + Alpine.js) into a Laravel Blade project and iterated through a series of prompts. A human-readable log of that process (prompts, changes, and outputs) is maintained in [`PROMPT_LOG.md`](PROMPT_LOG.md).