---
title: When Everything Depends on Everything — Triangle InfoSeCon 2026
description: Slides and references from Mike Faas's Triangle InfoSeCon 2026 Leadership-track talk on why security fails in cascades, not silos.
---
@extends('_layouts.main')

@section('body')

<style>
  .bg-hex-grid {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23990000' fill-opacity='0.03'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  }
</style>

<div class="bg-hex-grid">

  <div class="fixed inset-0 pointer-events-none overflow-hidden -z-10">
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-crimson-900/40 to-transparent blur-2xl -skew-x-12"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-br from-crimson-900/40 to-transparent blur-2xl -skew-x-12"></div>
  </div>

  {{-- HERO --}}
  <section class="relative">
    <div class="mx-auto max-w-3xl px-6 py-20 sm:py-28 lg:px-8">

      <div class="flex items-center gap-3">
        <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
        <span class="font-mono text-xs uppercase tracking-widest text-crimson-450">Triangle InfoSeCon 2026 &middot; Leadership track</span>
      </div>

      <h1 class="mt-6 font-display text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-balance text-white">
        When Everything Depends on Everything
      </h1>

      <p class="mt-6 text-lg text-pretty text-echo-300 sm:text-xl/8">
        Security doesn't fail in silos. It fails in cascades. The slides from the talk, the sources behind every claim, and the three things to do Monday morning.
      </p>

      <div class="mt-6 flex flex-wrap gap-2">
        <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">Raleigh Convention Center</span>
        <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">October 30, 2026</span>
        <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">Mike Faas</span>
      </div>

      <div class="mt-10 flex flex-wrap items-center gap-4">
        <a href="/assets/downloads/when-everything-depends-on-everything-infosecon-2026.pdf"
           class="inline-flex items-center gap-2 rounded-md bg-crimson-600 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-crimson-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-crimson-500">
          Download the slides (PDF, 10 MB)
        </a>
      </div>
    </div>
  </section>

  {{-- MONDAY --}}
  <section class="relative border-t border-echo-800/60">
    <div class="mx-auto max-w-3xl px-6 py-16 lg:px-8">
      <div class="flex items-center gap-3">
        <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
        <span class="font-mono text-xs uppercase tracking-widest text-crimson-450">Monday morning</span>
      </div>
      <ol class="mt-8 space-y-6">
        <li>
          <p class="font-display text-xl font-semibold text-white">1. Draw one edge.</p>
          <p class="mt-1 text-echo-300">Take your worst-scored domain. Write down, by hand, three things in other domains that break if it stays broken. Hand the page to whoever owns the other end of each line and ask: did you know this depended on you?</p>
        </li>
        <li>
          <p class="font-display text-xl font-semibold text-white">2. Find the tokens.</p>
          <p class="mt-1 text-echo-300">Ask whoever runs your data platform for every integration, service account, and API key that can read your top two data stores. Ask your security lead which of those they recognize by name. The difference between the two lists is your Anodot.</p>
        </li>
        <li>
          <p class="font-display text-xl font-semibold text-white">3. Change the board slide.</p>
          <p class="mt-1 text-echo-300">Retire the eight-squares slide. Replace it with one cascade path and what it costs when it fires. The board's question changes from "are we secure" to "what fails first."</p>
        </li>
      </ol>
    </div>
  </section>

  {{-- REFERENCES --}}
  <section class="relative border-t border-echo-800/60">
    <div class="mx-auto max-w-3xl px-6 py-16 lg:px-8">
      <div class="flex items-center gap-3">
        <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
        <span class="font-mono text-xs uppercase tracking-widest text-crimson-450">References</span>
      </div>
      <ul class="mt-8 space-y-3 text-echo-300">
        <li><span class="text-white">Sidekick Security, <em>The Trust Map</em> (2026).</span> The public dependency model the talk's graph is built on. <a class="text-crimson-450 hover:text-crimson-400 underline underline-offset-4" href="https://trust-map.sidekicksecurity.io" rel="noopener">trust-map.sidekicksecurity.io</a></li>
        <li><span class="text-white">Vimeo security incident, disclosed April 28, 2026.</span> Third-party analytics provider Anodot; stolen authentication tokens; Snowflake and BigQuery. <a class="text-crimson-450 hover:text-crimson-400 underline underline-offset-4" href="https://www.bleepingcomputer.com/news/security/video-service-vimeo-confirms-anodot-breach-exposed-user-data/" rel="noopener">BleepingComputer coverage</a></li>
        <li><span class="text-white">Same shape, different logos:</span> MOVEit Transfer (2023) &middot; Snowflake customer credential campaign (2024) &middot; Cleo (2024&ndash;25).</li>
        <li><span class="text-white">Obligations named in the cascade math:</span> AICPA SOC 2 Trust Services Criteria (CC6, CC7, CC9.2) &middot; PCI DSS v4.0 (12.8, 12.10) &middot; HIPAA, 45 CFR 164.308(b), 164.404, 164.410 &middot; N.C. Gen. Stat. &sect; 75-65 &middot; GDPR Art. 28 and 33.</li>
      </ul>
      <p class="mt-8 text-sm text-echo-400">The graph numbers in the talk (76 practices depending on Policies &amp; RACI; 19 on Third-Party Risk across 8 domains) are derived from the Trust Map's public dependency data and were re-verified against the source in September 2026. Version one treats every dependency as equal; weighting the edges is the next piece of work.</p>
    </div>
  </section>

  {{-- CTA --}}
  <section class="relative border-t border-echo-800/60">
    <div class="mx-auto max-w-3xl px-6 py-16 lg:px-8">
      <p class="text-lg text-echo-300">If you'd like to draw your own first edge with someone who has done it a few times, that's a thirty-minute conversation.</p>
      <div class="mt-6">
        <a href="/schedule" class="inline-flex items-center gap-2 rounded-md border border-crimson-600 px-5 py-3 text-sm font-semibold text-white hover:bg-crimson-600/20">Talk to Mike</a>
      </div>
    </div>
  </section>

</div>

@endsection
