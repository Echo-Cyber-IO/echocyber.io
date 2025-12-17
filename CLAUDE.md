# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Echo Cyber Solutions website built with Jigsaw, a PHP-based static site generator from Tighten. The site uses Laravel Mix for asset compilation, Tailwind CSS for styling, and Vue.js for interactive components.

## Development Commands

```bash
# Install dependencies (first time setup)
composer install
npm install

# Development build - compiles assets and builds site with BrowserSync
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
- `webpack.mix.js` - Laravel Mix asset pipeline configuration
- `tailwind.config.js` - Tailwind with custom colors (crimson, echogray)
- `bootstrap.php` - Jigsaw build hooks (sitemap, search index)

### Technology Stack
- **Static Generation**: Jigsaw 1.7 with Blade templating
- **CSS**: Tailwind CSS 3 with custom theme extensions
- **JavaScript**: Vue.js 2 (search component), Alpine.js (interactions), highlight.js (code blocks)
- **Fonts**: Inter var, Roboto Slab, Nunito Sans
- **Icons**: Font Awesome (via CDN)
- **Deployment**: Netlify (auto-deploys from build)

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
1. Laravel Mix compiles `source/_assets/` to `source/assets/build/`
2. Jigsaw processes Blade templates and Markdown content
3. Output goes to `build_local/` (dev) or `build_production/` (prod)
4. Post-build listeners generate sitemap.xml and search index
