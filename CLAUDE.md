# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Echo Cyber Solutions website built with Jigsaw 1.8, a PHP-based static site generator from Tighten. The site uses Vite for asset compilation, Tailwind CSS for styling, and Alpine.js for interactions.

## Development Commands

```bash
# Install dependencies (first time setup)
composer install
npm install

# Development build - compiles assets and builds site with hot reload
npm run watch

# Manual builds
npm run dev                              # Compile assets only
./vendor/bin/jigsaw build               # Build site to build_local/

# Production build (for Netlify deployment)
npm run prod                            # Builds assets and site
./vendor/bin/jigsaw build production    # Build site to build_production/
```

## Project Architecture

### Directory Structure
- `source/` - All source content and templates
  - `_layouts/` - Blade layout templates (main.blade.php is primary)
  - `_components/` - Reusable Blade components
  - `_partials/` - Partial templates (nav, footer)
  - `_posts/` - Blog posts (Markdown with YAML frontmatter)
  - `_categories/` - Blog category definitions
  - `_assets/` - Source CSS/JS (compiled by Mix)
  - `assets/` - Static assets (images, fonts, compiled output)
  - `services/` - Service pages
- `listeners/` - Jigsaw build event listeners (sitemap, search index generation)
- `build_local/` - Local development build output
- `build_production/` - Production build output (deployed to Netlify)

### Configuration Files
- `config.php` - Site-wide configuration and collection definitions
- `config.production.php` - Production overrides (baseUrl)
- `vite.config.js` - Vite asset pipeline configuration
- `tailwind.config.js` - Tailwind with custom colors (crimson, echo palettes)
- `bootstrap.php` - Jigsaw build hooks (sitemap, search index)

### Technology Stack
- **Static Generation**: Jigsaw 1.8 with Blade templating
- **Asset Pipeline**: Vite 6 with @tighten/jigsaw-vite-plugin
- **CSS**: Tailwind CSS 3 with custom theme (crimson, echo color palettes)
- **JavaScript**: Alpine.js (interactions), highlight.js (code blocks)
- **Fonts**: Space Grotesk (display), Outfit (body), JetBrains Mono (code)
- **Deployment**: Netlify (auto-deploys from build)
- **SEO**: Schema.org structured data (ProfessionalService, Person, Service)

### Content Format
Blog posts use YAML frontmatter:
```yaml
---
extends: _layouts.post
section: content
title: Post Title
date: 2024-01-01
description: Post description
cover_image: /assets/img/cover.png
featured: true
categories:
  - category-slug
---
```

### Build Pipeline
1. Vite compiles `source/_assets/` to `source/assets/build/`
2. Jigsaw processes Blade templates and Markdown content
3. Output goes to `build_local/` (dev) or `build_production/` (prod)
4. Post-build listeners generate sitemap.xml and search index

## Service Tier Structure

The site uses a **Tune → Signal → Echo** engagement model:

| Tier | Type | Description |
|------|------|-------------|
| **Tune** | Strategy Session | One-time assessment, starting at $7,500 |
| **Signal** | Fractional Engagement | 10 hrs/week, 3-month min, starting at $10k/month |
| **Echo** | Advisory | Ongoing guidance, requires prior Tune or Signal |

Custom icons: Tune (dial), Signal (heroicons broadcast), Echo (pulse)

## Design Conventions

### Color Usage
- **Text**: `text-crimson-500` (#CC3333) - NOT crimson-400 (too pink)
- **Hover text**: `hover:text-crimson-400` - NOT crimson-300
- **Borders**: Solid `border-crimson-900` or `border-crimson-800` (no opacity)
- **Icon backgrounds**: `bg-crimson-950` with 40-80% opacity

### Component Patterns
- **Card border radius**: `rounded-xl` (consistent across site)
- **CTA sections**: `rounded-3xl` (intentionally larger for emphasis)
- **Eyebrows**: Centered with double crimson bars for centered sections, single left bar for left-aligned content
- **CTA language**: "Let's Talk" (primary buttons), "Get in Touch" (white buttons)

### Blade Template Notes
- Schema.org JSON-LD uses `@@` to escape `@` symbols (Blade interprets `@` as directives)
- `@viteRefresh()` only needed once in main.blade.php
