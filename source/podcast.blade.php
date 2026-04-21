---
title: Signal vs. Noise — The Pulse Podcast
description: Weekly cybersecurity podcast for founder-led businesses. One signal worth your attention, the noise worth ignoring. 20 minutes a week.
---
@extends('_layouts.main')

@section('body')

<style>
  .bg-hex-grid {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23990000' fill-opacity='0.03'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  }
</style>

<div class="bg-hex-grid">

  {{-- Decorative gradient blurs --}}
  <div class="fixed inset-0 pointer-events-none overflow-hidden -z-10">
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-crimson-900/40 to-transparent blur-2xl -skew-x-12"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-br from-crimson-900/40 to-transparent blur-2xl -skew-x-12"></div>
  </div>

  {{-- ═══════════════════════════════════════════ --}}
  {{-- HERO                                         --}}
  {{-- ═══════════════════════════════════════════ --}}
  <section class="relative">
    <div class="mx-auto max-w-7xl">

      {{-- Left: copy + listen CTA --}}
      <div class="relative z-10 lg:w-full lg:max-w-2xl">
        <svg viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true"
             class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-echo-950 lg:block">
          <polygon points="0,0 90,0 50,100 0,100" />
        </svg>

        <div class="relative px-6 py-20 sm:py-28 lg:px-8 lg:py-32 lg:pr-0">
          <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">

            <div class="flex items-center gap-3">
              <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
              <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Podcast &middot; Weekly</span>
            </div>

            <h1 class="mt-6 font-display text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-balance text-white">
              Signal vs. Noise <span class="text-crimson-500">—</span> The Pulse
            </h1>

            <p class="mt-8 text-lg text-pretty text-echo-300 sm:text-xl/8">
              Weekly cybersecurity for founder-led businesses. One signal worth your attention, the noise worth ignoring. Twenty minutes a week.
            </p>

            {{-- Scope chips --}}
            <div class="mt-6 flex flex-wrap gap-2">
              <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">~20 min episodes</span>
              <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">New every Monday</span>
              <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">Free forever</span>
              <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">Every major player</span>
            </div>

            <div class="mt-10">
              <a href="/listen"
                 class="inline-flex items-center gap-2 rounded-lg bg-crimson-700 hover:bg-crimson-600 text-white font-semibold text-lg px-8 py-4 shadow-sm transition-all hover:shadow-glow active:scale-[0.98]">
                Listen on your player
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
              </a>
              <p class="mt-3 text-xs text-echo-500">Spotify &middot; Apple &middot; iHeart &middot; Amazon Music &middot; YouTube &middot; Overcast &middot; Pocket Casts</p>
            </div>

          </div>
        </div>
      </div>

      {{-- Right: cover art card with platform buttons --}}
      <div class="relative bg-gradient-to-br from-echo-900 via-echo-900 to-crimson-950/60 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <div aria-hidden="true" class="absolute inset-0 overflow-hidden pointer-events-none">
          <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gradient-to-br from-crimson-600/30 to-transparent blur-3xl"></div>
          <div class="absolute -bottom-40 -left-20 w-[400px] h-[400px] bg-gradient-to-tr from-crimson-800/20 to-transparent blur-3xl"></div>
        </div>

        <div class="relative flex h-full items-center justify-center px-6 py-20 lg:px-12 lg:py-16">
          <div class="relative w-full max-w-md">
            <div aria-hidden="true" class="absolute -inset-6 rounded-3xl bg-gradient-to-br from-crimson-700/20 via-crimson-900/10 to-yellow-500/10 blur-2xl"></div>

            {{-- Card --}}
            <div class="relative rounded-2xl bg-echo-950/90 p-7 ring-1 ring-crimson-700/40 shadow-2xl shadow-crimson-950/60 backdrop-blur-sm">

              <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                  <div class="h-2 w-2 rounded-full bg-crimson-500 animate-pulse shadow-lg shadow-crimson-500/50"></div>
                  <p class="font-mono text-xs uppercase tracking-widest text-crimson-400">Live on all platforms</p>
                </div>
                <span class="font-mono text-xs text-echo-500">Free</span>
              </div>

              {{-- Spotify embed (latest episode) --}}
              <div class="mt-6 overflow-hidden rounded-xl ring-1 ring-echo-700/50">
                <iframe
                  src="https://open.spotify.com/embed/show/58B7G1v80LR2TmdQw8FSbq?utm_source=generator&theme=0"
                  width="100%" height="232" frameborder="0" loading="lazy"
                  allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                  allowfullscreen
                  title="Signal vs. Noise — The Pulse on Spotify"></iframe>
              </div>

              {{-- Platform grid --}}
              <div class="mt-6 grid grid-cols-2 gap-2 border-t border-echo-800 pt-6">
                <a href="https://open.spotify.com/show/58B7G1v80LR2TmdQw8FSbq" target="_blank" rel="noopener noreferrer"
                   class="group flex items-center justify-center gap-2 rounded-lg border border-echo-700 bg-echo-900/40 px-3 py-2.5 text-xs font-mono text-echo-200 transition-all hover:border-crimson-700 hover:text-white">
                  Spotify
                </a>
                <a href="https://podcasts.apple.com/us/podcast/signal-vs-noise-the-pulse/id1894903133" target="_blank" rel="noopener noreferrer"
                   class="group flex items-center justify-center gap-2 rounded-lg border border-echo-700 bg-echo-900/40 px-3 py-2.5 text-xs font-mono text-echo-200 transition-all hover:border-crimson-700 hover:text-white">
                  Apple Podcasts
                </a>
                <a href="https://www.iheart.com/podcast/330966627/" target="_blank" rel="noopener noreferrer"
                   class="group flex items-center justify-center gap-2 rounded-lg border border-echo-700 bg-echo-900/40 px-3 py-2.5 text-xs font-mono text-echo-200 transition-all hover:border-crimson-700 hover:text-white">
                  iHeart
                </a>
                <a href="https://pod.link/1894903133" target="_blank" rel="noopener noreferrer"
                   class="group flex items-center justify-center gap-2 rounded-lg border border-crimson-700/40 bg-crimson-900/10 px-3 py-2.5 text-xs font-mono text-crimson-300 transition-all hover:border-crimson-600 hover:bg-crimson-900/30 hover:text-white">
                  All players &rarr;
                </a>
              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  {{-- ═══════════════════════════════════════════ --}}
  {{-- WHAT THE SHOW IS ABOUT                       --}}
  {{-- ═══════════════════════════════════════════ --}}
  <section class="relative py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-3xl text-center">
        <div class="flex items-center justify-center gap-3">
          <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
          <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">What you'll hear</span>
          <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
        </div>
        <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-balance text-white sm:text-4xl">
          Cybersecurity, translated.
        </h2>
        <p class="mt-6 text-lg text-echo-300">
          Each week I pick one story from the security news cycle worth your attention, name the pattern underneath it, and tell you what it means for a growth-stage business. No jargon. No sales pitch. No fear-mongering.
        </p>
      </div>

      {{-- Three-up value cards --}}
      <div class="mx-auto mt-16 grid max-w-5xl grid-cols-1 gap-6 sm:grid-cols-3">

        <div class="relative rounded-2xl bg-echo-950/60 p-6 ring-1 ring-echo-800 backdrop-blur-sm">
          <div class="flex items-center gap-2">
            <div class="h-1.5 w-6 rounded-full bg-crimson-600"></div>
            <p class="font-mono text-xs uppercase tracking-widest text-crimson-400">Echo</p>
          </div>
          <h3 class="mt-4 font-display text-xl font-bold text-white">The thesis</h3>
          <p class="mt-3 text-sm text-echo-400">One argument worth bringing to your team this week. The pattern underneath the headlines &mdash; and why it matters for a growth-stage business.</p>
        </div>

        <div class="relative rounded-2xl bg-echo-950/60 p-6 ring-1 ring-echo-800 backdrop-blur-sm">
          <div class="flex items-center gap-2">
            <div class="h-1.5 w-6 rounded-full bg-crimson-600"></div>
            <p class="font-mono text-xs uppercase tracking-widest text-crimson-400">Signal Check</p>
          </div>
          <h3 class="mt-4 font-display text-xl font-bold text-white">The reframe</h3>
          <p class="mt-3 text-sm text-echo-400">One story from this week's news cycle that actually matters &mdash; what happened, why it cascaded, and who should care.</p>
        </div>

        <div class="relative rounded-2xl bg-echo-950/60 p-6 ring-1 ring-echo-800 backdrop-blur-sm">
          <div class="flex items-center gap-2">
            <div class="h-1.5 w-6 rounded-full bg-crimson-600"></div>
            <p class="font-mono text-xs uppercase tracking-widest text-crimson-400">The Noise</p>
          </div>
          <h3 class="mt-4 font-display text-xl font-bold text-white">The skip list</h3>
          <p class="mt-3 text-sm text-echo-400">What everyone else is writing about that probably doesn't matter for your business &mdash; and why you can safely ignore it.</p>
        </div>

      </div>
    </div>
  </section>

  {{-- ═══════════════════════════════════════════ --}}
  {{-- HOST BIO                                     --}}
  {{-- ═══════════════════════════════════════════ --}}
  <section class="relative py-20 sm:py-24 bg-echo-950/40">
    <div class="mx-auto max-w-5xl px-6 lg:px-8">
      <div class="flex flex-col items-center gap-12 lg:flex-row lg:gap-16">

        {{-- Photo --}}
        <div class="flex-none">
          <div class="relative">
            <div aria-hidden="true" class="absolute -inset-4 rounded-3xl bg-gradient-to-br from-crimson-700/20 to-crimson-900/10 blur-2xl"></div>
            <img src="/assets/img/Michael_Faas.jpg" alt="Michael Faas"
                 class="relative h-56 w-56 rounded-2xl object-cover ring-1 ring-crimson-700/40 shadow-2xl shadow-crimson-950/40">
          </div>
        </div>

        {{-- Bio --}}
        <div class="flex-1">
          <div class="flex items-center gap-3">
            <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Who's behind the show</span>
          </div>
          <h2 class="mt-4 font-display text-3xl font-bold text-white sm:text-4xl">Michael Faas</h2>
          <p class="mt-6 text-base text-echo-300">
            Twenty years building security programs for global enterprises — from founder-led teams to global brands like Carhartt, Bose, and Black Rifle Coffee. Now a fractional CTO/CISO through Echo Cyber, making the secure path the easy path for founder-led businesses in the $2.5M&ndash;$25M range.
          </p>
          <p class="mt-4 text-base text-echo-300">
            Known for translating complex systems without dumbing them down &mdash; what he calls <em class="text-white">"translating geek into human."</em>
          </p>
          <p class="mt-6 text-sm text-echo-400 italic border-l-2 border-crimson-700/50 pl-4">
            Voiced by Jane &mdash; an AI trained on Mike's writing. Every word, Mike's.
          </p>
          <div class="mt-8 flex flex-wrap gap-3">
            <a href="/contact" class="inline-flex items-center gap-2 rounded-lg bg-crimson-700 hover:bg-crimson-600 text-white px-5 py-2.5 text-sm font-medium transition-all hover:shadow-glow">
              Work with Mike
            </a>
            <a href="https://www.linkedin.com/in/mfaas/" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center gap-2 rounded-lg border border-echo-700 bg-echo-900/40 hover:bg-echo-800 text-echo-200 hover:text-white px-5 py-2.5 text-sm font-medium transition-all">
              Connect on LinkedIn
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  {{-- ═══════════════════════════════════════════ --}}
  {{-- NEWSLETTER CROSS-PROMO                       --}}
  {{-- ═══════════════════════════════════════════ --}}
  <section class="relative py-20 sm:py-24">
    <div class="mx-auto max-w-4xl px-6 lg:px-8">
      <div class="relative rounded-2xl bg-gradient-to-br from-echo-900 to-crimson-950/40 p-10 ring-1 ring-crimson-700/30 shadow-2xl shadow-crimson-950/40">
        <div aria-hidden="true" class="absolute -inset-1 -z-10 rounded-3xl bg-gradient-to-br from-crimson-700/10 to-transparent blur-2xl"></div>

        <div class="flex flex-col items-start gap-6 lg:flex-row lg:items-center lg:justify-between">
          <div class="flex-1">
            <div class="flex items-center gap-3">
              <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
              <span class="font-mono text-xs uppercase tracking-widest text-crimson-400">Prefer reading?</span>
            </div>
            <h2 class="mt-4 font-display text-2xl font-bold text-white sm:text-3xl">The newsletter version</h2>
            <p class="mt-3 text-base text-echo-300">
              Same signal, delivered Sunday evenings. Straight to your inbox &mdash; no algorithm in the middle.
            </p>
          </div>
          <div class="flex-none">
            <a href="https://signal.echocyber.io" target="_blank" rel="noopener noreferrer"
               class="inline-flex items-center gap-2 rounded-lg bg-crimson-700 hover:bg-crimson-600 text-white font-semibold px-6 py-3 transition-all hover:shadow-glow">
              Subscribe
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

@endsection
