---
title: Signal Score Security Assessment
description: Find out where your company stands in 15 minutes. Free security assessment for growing businesses.
---
@extends('_layouts.main')

@section('body')

<style>
    [x-cloak] { display: none !important; }
    .fade-in { animation: fadeIn 0.4s ease-out; }
    @keyframes fadeIn { from { opacity: 0; transform: translateY(12px); } to { opacity: 1; transform: translateY(0); } }
    .grade-pulse { animation: gradePulse 0.6s ease-out; }
    @keyframes gradePulse { 0% { transform: scale(0.5); opacity: 0; } 60% { transform: scale(1.15); } 100% { transform: scale(1); opacity: 1; } }
    .bar-fill { transition: width 0.8s cubic-bezier(0.4, 0, 0.2, 1); }
    .option-hover { transition: all 0.15s ease; }
    .option-hover:hover { transform: translateX(4px); }
    .bg-hex-grid {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='28' height='49' viewBox='0 0 28 49'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23990000' fill-opacity='0.03'%3E%3Cpath d='M13.99 9.25l13 7.5v15l-13 7.5L1 31.75v-15l12.99-7.5zM3 17.9v12.7l10.99 6.34 11-6.35V17.9l-11-6.34L3 17.9zM0 15l12.98-7.5V0h-2v6.35L0 12.69v2.3zm0 18.5L12.98 41v8h-2v-6.85L0 35.81v-2.3zM15 0v7.5L27.99 15H28v-2.31h-.01L17 6.35V0h-2zm0 49v-8l12.99-7.5H28v2.31h-.01L17 42.15V49h-2z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
</style>

<div x-data="quiz()" x-cloak class="bg-hex-grid">

  <!-- Decorative gradient blurs -->
  <div class="fixed inset-0 pointer-events-none overflow-hidden -z-10">
    <div class="absolute -top-40 -right-40 w-96 h-96 bg-gradient-to-br from-crimson-900/40 to-transparent blur-2xl -skew-x-12"></div>
    <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-gradient-to-br from-crimson-900/40 to-transparent blur-2xl -skew-x-12"></div>
  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!-- HERO / LANDING                              -->
  <!-- ═══════════════════════════════════════════ -->
  <div x-show="step === 'landing'" x-transition>

    <!-- Hero: split layout with sample card -->
    <section class="relative">
      <div class="mx-auto max-w-7xl">
        <!-- Left: copy + CTA -->
        <div class="relative z-10 lg:w-full lg:max-w-2xl">
          <!-- Diagonal cut SVG -->
          <svg viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true"
               class="absolute inset-y-0 right-8 hidden h-full w-80 translate-x-1/2 transform fill-echo-950 lg:block">
            <polygon points="0,0 90,0 50,100 0,100" />
          </svg>

          <div class="relative px-6 py-20 sm:py-28 lg:px-8 lg:py-32 lg:pr-0">
            <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-xl">

              <div class="flex items-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Free security assessment</span>
              </div>

              <h1 class="mt-6 font-display text-4xl sm:text-5xl lg:text-6xl font-bold tracking-tight text-balance text-white">
                How secure is your business, <span class="text-crimson-500">really?</span>
              </h1>

              <p class="mt-8 text-lg text-pretty text-echo-300 sm:text-xl/8">
                The Signal Score grades your security across 8 areas that matter most. No jargon. No sales pitch. Just a clear picture of where you stand.
              </p>

              <!-- Scope chips -->
              <div class="mt-6 flex flex-wrap gap-2">
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">15 minutes</span>
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">37 questions</span>
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">A&ndash;F grade</span>
                <span class="rounded-md bg-echo-900/60 px-2.5 py-1 text-xs font-mono text-echo-300 ring-1 ring-echo-700/50">Instant results</span>
              </div>

              <div class="mt-10">
                <button @click="step = 'quiz'"
                        class="inline-flex items-center gap-2 rounded-lg bg-crimson-700 hover:bg-crimson-600 text-white font-semibold text-lg px-8 py-4 shadow-sm transition-all hover:shadow-glow active:scale-[0.98]">
                  Start your assessment
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                </button>
                <p class="mt-3 text-xs text-echo-500">No email required to take it. No sales follow-up.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right: Sample Signal Score card -->
      <div class="relative bg-gradient-to-br from-echo-900 via-echo-900 to-crimson-950/60 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        {{-- Stronger ambient glows --}}
        <div aria-hidden="true" class="absolute inset-0 overflow-hidden pointer-events-none">
          <div class="absolute -top-32 -right-32 w-[500px] h-[500px] bg-gradient-to-br from-crimson-600/30 to-transparent blur-3xl"></div>
          <div class="absolute -bottom-40 -left-20 w-[400px] h-[400px] bg-gradient-to-tr from-crimson-800/20 to-transparent blur-3xl"></div>
        </div>

        <div class="relative flex h-full items-center justify-center px-6 py-20 lg:px-12 lg:py-16">
          <div class="relative w-full max-w-md">
            {{-- Card halo glow behind --}}
            <div aria-hidden="true" class="absolute -inset-6 rounded-3xl bg-gradient-to-br from-crimson-700/20 via-crimson-900/10 to-yellow-500/10 blur-2xl"></div>

            {{-- The card itself --}}
            <div class="relative rounded-2xl bg-echo-950/90 p-7 ring-1 ring-crimson-700/40 shadow-2xl shadow-crimson-950/60 backdrop-blur-sm">

              <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                  <div class="h-2 w-2 rounded-full bg-crimson-500 animate-pulse shadow-lg shadow-crimson-500/50"></div>
                  <p class="font-mono text-xs uppercase tracking-widest text-crimson-400">Signal Score &middot; sample</p>
                </div>
                <span class="font-mono text-xs text-echo-500">Yours in 15 min</span>
              </div>

              <div class="mt-8 flex items-center gap-6">
                {{-- Grade circle with glow ring --}}
                <div class="relative flex-none">
                  <div aria-hidden="true" class="absolute -inset-2 rounded-3xl bg-yellow-400/20 blur-xl"></div>
                  <div class="relative inline-flex items-center justify-center w-32 h-32 rounded-3xl border-4 border-yellow-400 bg-gradient-to-br from-yellow-500/15 to-yellow-700/5 shadow-2xl shadow-yellow-400/30">
                    <span class="font-display text-7xl font-bold text-yellow-400 drop-shadow-[0_0_12px_rgba(250,204,21,0.4)]">C</span>
                  </div>
                </div>
                <div class="flex-1 min-w-0">
                  <p class="font-display text-2xl font-bold text-white">Room to Grow</p>
                  <p class="mt-2 text-sm text-echo-400">Significant exposure &mdash; one bad day could be very expensive.</p>
                  <div class="mt-3 inline-flex items-center gap-1.5 rounded-md bg-yellow-500/15 px-2 py-1 ring-1 ring-yellow-500/30 shadow-sm shadow-yellow-500/10">
                    <svg class="w-3 h-3 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.485 2.495c.673-1.167 2.357-1.167 3.03 0l6.28 10.875c.673 1.167-.17 2.625-1.516 2.625H3.72c-1.347 0-2.189-1.458-1.515-2.625L8.485 2.495z" clip-rule="evenodd"/></svg>
                    <span class="font-mono text-xs font-semibold text-yellow-400">$300K&ndash;$750K annual risk</span>
                  </div>
                </div>
              </div>

            <div class="mt-8 space-y-3 border-t border-echo-800 pt-6">
              <p class="text-xs font-mono uppercase tracking-widest text-echo-500">Grades by area</p>
              @foreach([['Identity & Access', 'B', 'bg-blue-500', 78], ['Devices & Patching', 'B', 'bg-blue-500', 72], ['Email & Phishing', 'C', 'bg-yellow-500', 56], ['Backup & Recovery', 'D', 'bg-orange-500', 32], ['Network Security', 'C', 'bg-yellow-500', 50], ['Data Protection', 'C', 'bg-yellow-500', 48], ['Vendor & SaaS Risk', 'D', 'bg-orange-500', 34], ['Incident Readiness', 'F', 'bg-red-500', 14]] as $row)
                <div class="flex items-center justify-between gap-3 text-xs">
                  <span class="text-echo-300 truncate">{{ $row[0] }}</span>
                  <div class="flex items-center gap-3 flex-none">
                    <div class="h-1.5 w-28 rounded-full bg-echo-800 overflow-hidden">
                      <div class="h-full {{ $row[2] }}" style="width: {{ $row[3] }}%"></div>
                    </div>
                    <span class="font-mono font-bold text-white w-3 text-center">{{ $row[1] }}</span>
                  </div>
                </div>
              @endforeach
            </div>

              <p class="mt-6 text-center text-xs italic text-echo-500">Sample result. Yours will be specific to your business.</p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- What You'll Get (track-record-style header band cards) -->
    <section class="relative py-20 sm:py-24">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
          <div class="flex items-center justify-center gap-3">
            <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">In 15 minutes you'll know</span>
            <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
          </div>
          <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-balance text-white sm:text-4xl">
            Three things, plainly.
          </h2>
        </div>

        <div class="mx-auto mt-12 grid max-w-2xl grid-cols-1 gap-6 lg:mx-0 lg:max-w-none lg:grid-cols-3">

          <article class="relative flex flex-col overflow-hidden rounded-2xl bg-echo-900/80 ring-1 ring-echo-700/50 transition-all hover:ring-echo-600">
            <header class="border-b border-echo-800/60 bg-echo-950/40 px-7 py-6">
              <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-500">Diagnostic</p>
              <h3 class="mt-2 font-display text-2xl font-bold tracking-tight text-white">Where you're <span class="text-crimson-400">exposed</span></h3>
            </header>
            <div class="flex-1 px-7 py-6 text-sm leading-6 text-echo-300">
              A&ndash;F grades across 8 areas that actually matter &mdash; from identity to incident readiness.
            </div>
          </article>

          <article class="relative flex flex-col overflow-hidden rounded-2xl bg-echo-900/80 ring-1 ring-echo-700/50 transition-all hover:ring-echo-600">
            <header class="border-b border-echo-800/60 bg-echo-950/40 px-7 py-6">
              <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-500">Translation</p>
              <h3 class="mt-2 font-display text-2xl font-bold tracking-tight text-white">What it <span class="text-crimson-400">costs</span> you</h3>
            </header>
            <div class="flex-1 px-7 py-6 text-sm leading-6 text-echo-300">
              Every gap translated to dollars. The language your board and your CFO actually speak.
            </div>
          </article>

          <article class="relative flex flex-col overflow-hidden rounded-2xl bg-echo-900/80 ring-1 ring-echo-700/50 transition-all hover:ring-echo-600">
            <header class="border-b border-echo-800/60 bg-echo-950/40 px-7 py-6">
              <p class="font-mono text-[10px] uppercase tracking-[0.2em] text-crimson-500">Action</p>
              <h3 class="mt-2 font-display text-2xl font-bold tracking-tight text-white">What to <span class="text-crimson-400">fix first</span></h3>
            </header>
            <div class="flex-1 px-7 py-6 text-sm leading-6 text-echo-300">
              A prioritized plan &mdash; not a 90-page report that sits in a drawer.
            </div>
          </article>

        </div>
      </div>
    </section>

  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!-- QUIZ                                         -->
  <!-- ═══════════════════════════════════════════ -->
  <div x-show="step === 'quiz'" x-transition class="min-h-screen flex flex-col">
    <!-- Progress Bar -->
    <div class="sticky top-0 z-50 bg-echo-950/70 backdrop-blur-md border-b border-echo-800">
      <div class="max-w-3xl mx-auto px-6 py-4">
        <div class="flex items-center justify-between mb-2">
          <span class="text-sm font-medium text-echo-300" x-text="currentCategory"></span>
          <span class="text-sm text-echo-500" x-text="`Question ${currentQ + 1} of ${questions.length}`"></span>
        </div>
        <div class="h-1.5 bg-echo-800 rounded-full overflow-hidden">
          <div class="h-full bg-crimson-700 rounded-full bar-fill" :style="`width: ${((currentQ) / questions.length) * 100}%`"></div>
        </div>
        <!-- Category dots -->
        <div class="flex gap-1 mt-2">
          <template x-for="(cat, i) in categoryNames" :key="i">
            <div class="flex-1 h-1 rounded-full transition-colors duration-300"
              :class="getCategoryProgress(cat) === 'done' ? 'bg-crimson-700' : getCategoryProgress(cat) === 'active' ? 'bg-crimson/40' : 'bg-echo-800'">
            </div>
          </template>
        </div>
      </div>
    </div>

    <!-- Question -->
    <div class="flex-1 flex items-center justify-center px-6 py-12">
      <div class="max-w-3xl w-full fade-in" :key="currentQ">
        <!-- Category change indicator -->
        <div x-show="isNewCategory" class="mb-6 inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-crimson/10 border border-crimson/20 text-crimson-400 text-sm font-medium">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
          <span x-text="currentCategory"></span>
        </div>

        <h2 class="text-2xl sm:text-3xl font-bold leading-snug mb-8 font-display" x-text="questions[currentQ]?.question"></h2>

        <div class="space-y-3">
          <template x-for="(option, i) in questions[currentQ]?.options" :key="i">
            <button @click="selectAnswer(i)"
              class="option-hover w-full text-left px-5 py-4 rounded-lg border transition-all"
              :class="answers[currentQ] === i
                ? 'border-crimson bg-crimson/10 text-white'
                : 'border-echo-700 bg-echo-900/50 text-echo-200 hover:border-echo-500 hover:bg-echo-900'">
              <div class="flex items-center gap-3">
                <div class="w-7 h-7 rounded-full border-2 flex items-center justify-center shrink-0 transition-colors"
                  :class="answers[currentQ] === i ? 'border-crimson bg-crimson' : 'border-echo-600'">
                  <svg x-show="answers[currentQ] === i" class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <span x-text="option" class="text-base"></span>
              </div>
            </button>
          </template>
        </div>

        <!-- Navigation -->
        <div class="flex items-center justify-between mt-10">
          <button @click="prevQuestion()" x-show="currentQ > 0" class="flex items-center gap-1 text-echo-400 hover:text-white transition text-sm">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            Previous
          </button>
          <div x-show="currentQ === 0"></div>
          <button @click="nextQuestion()" x-show="answers[currentQ] !== undefined"
            class="flex items-center gap-2 px-6 py-3 bg-crimson-700 hover:bg-crimson-600 text-white font-semibold rounded-lg transition-all hover:shadow-glow active:scale-[0.98]"
            x-text="currentQ === questions.length - 1 ? 'See My Results' : 'Next'">
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════ -->
  <!-- RESULTS                                      -->
  <!-- ═══════════════════════════════════════════ -->
  <div x-show="step === 'results'" x-transition class="min-h-screen">
    <!-- Teaser Header (always visible) -->
    <div class="bg-gradient-to-b from-echo-900 to-echo-950 border-b border-echo-800">
      <div class="max-w-4xl mx-auto px-6 py-12 text-center">
        <p class="text-echo-400 text-sm uppercase tracking-wider mb-4 font-mono">Your Signal Score</p>

        <div class="grade-pulse inline-flex items-center justify-center w-32 h-32 rounded-2xl border-4 mb-6"
          :class="gradeColor(overallGrade, 'border')">
          <span class="text-6xl font-bold font-display" :class="gradeColor(overallGrade, 'text')" x-text="overallGrade"></span>
        </div>

        <h1 class="text-3xl sm:text-4xl font-bold mb-3 font-display" x-text="overallTitle"></h1>
        <p class="text-echo-300 max-w-xl mx-auto text-lg" x-text="overallDescription"></p>

        <div class="mt-6 inline-flex items-center gap-2 px-4 py-2 rounded-lg bg-echo-800/50 border border-echo-700">
          <span class="text-echo-400 text-sm">Overall Score:</span>
          <span class="font-bold font-mono" x-text="`${totalScore} / 185`"></span>
          <span class="text-echo-500 text-sm">&middot;</span>
          <span class="text-sm" :class="gradeColor(overallGrade, 'text')" x-text="`Estimated Annual Risk: ${overallRisk}`"></span>
        </div>
      </div>
    </div>

    <!-- ─── UNLOCK GATE (shown when !unlocked) ─── -->
    <div x-show="!unlocked" x-transition class="max-w-4xl mx-auto px-6 py-12">
      <div class="relative">
        <!-- Inline unlock form -->
        <div class="mb-8 p-8 rounded-xl bg-gradient-to-br from-echo-900 to-echo-800 border border-crimson-800/50 relative z-10">
          <div class="text-center mb-6">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-crimson/10 border border-crimson/20 text-crimson-400 text-xs font-medium mb-4 font-mono uppercase tracking-wider">
              <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
              One step to unlock
            </div>
            <h2 class="text-2xl sm:text-3xl font-bold mb-3 font-display">Your full report is ready</h2>
            <p class="text-echo-300 max-w-lg mx-auto">
              Per-category grades, your top 3 risks, and estimated dollar exposure for each &mdash; just below.
            </p>
          </div>

          <form @submit.prevent="unlockResults()" class="max-w-md mx-auto space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-echo-300 mb-1.5">Full Name *</label>
                <input x-model="lead.name" required type="text" placeholder="Jane Smith" class="w-full px-4 py-3 bg-echo-900 border border-echo-700 rounded-lg text-white placeholder-echo-500 focus:outline-none focus:border-crimson focus:ring-1 focus:ring-crimson transition">
              </div>
              <div>
                <label class="block text-sm font-medium text-echo-300 mb-1.5">Work Email *</label>
                <input x-model="lead.email" required type="email" placeholder="jane@company.com" class="w-full px-4 py-3 bg-echo-900 border border-echo-700 rounded-lg text-white placeholder-echo-500 focus:outline-none focus:border-crimson focus:ring-1 focus:ring-crimson transition">
              </div>
            </div>
            <div>
              <label class="block text-sm font-medium text-echo-300 mb-1.5">Company Name *</label>
              <input x-model="lead.company" required type="text" placeholder="Acme Corp" class="w-full px-4 py-3 bg-echo-900 border border-echo-700 rounded-lg text-white placeholder-echo-500 focus:outline-none focus:border-crimson focus:ring-1 focus:ring-crimson transition">
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-echo-300 mb-1.5">Your Role *</label>
                <select x-model="lead.role" required class="w-full px-4 py-3 bg-echo-900 border border-echo-700 rounded-lg text-white focus:outline-none focus:border-crimson focus:ring-1 focus:ring-crimson transition">
                  <option value="" disabled selected>Select your role</option>
                  <option>Founder / CEO</option>
                  <option>CTO / CIO</option>
                  <option>VP / Director of IT</option>
                  <option>COO / Operations</option>
                  <option>CFO / Finance</option>
                  <option>Other Executive</option>
                  <option>IT Manager</option>
                  <option>Other</option>
                </select>
              </div>
              <div>
                <label class="block text-sm font-medium text-echo-300 mb-1.5">Company Size *</label>
                <select x-model="lead.size" required class="w-full px-4 py-3 bg-echo-900 border border-echo-700 rounded-lg text-white focus:outline-none focus:border-crimson focus:ring-1 focus:ring-crimson transition">
                  <option value="" disabled selected>Number of employees</option>
                  <option>1&ndash;10</option>
                  <option>11&ndash;25</option>
                  <option>26&ndash;50</option>
                  <option>51&ndash;100</option>
                  <option>101&ndash;250</option>
                  <option>251&ndash;500</option>
                  <option>500+</option>
                </select>
              </div>
            </div>
            <div class="flex items-start gap-2 pt-1">
              <input x-model="lead.newsletter" type="checkbox" class="mt-1 rounded bg-echo-900 border-echo-700 text-crimson focus:ring-crimson">
              <label class="text-sm text-echo-400">Send me Signal vs. Noise &mdash; a biweekly newsletter that cuts through cybersecurity hype</label>
            </div>
            <button type="submit" :disabled="submitting"
              class="w-full py-4 bg-crimson-700 hover:bg-crimson-600 disabled:opacity-60 disabled:cursor-not-allowed text-white font-semibold rounded-lg text-lg transition-all hover:shadow-glow active:scale-[0.98] flex items-center justify-center gap-2">
              <template x-if="submitting">
                <svg class="w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"/></svg>
              </template>
              <span x-text="submitting ? 'Unlocking...' : 'Unlock My Full Report'"></span>
              <svg x-show="!submitting" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
            </button>
            <p class="text-xs text-echo-500 text-center">Private. We don't share or sell your data. Ever.</p>
          </form>
        </div>

        <!-- Blurred preview -->
        <div class="pointer-events-none select-none" style="filter: blur(10px); opacity: 0.5;">
          <h2 class="text-2xl font-bold mb-8 font-display">Your grades by area</h2>
          <div class="grid gap-4 sm:grid-cols-2">
            <template x-for="(cat, i) in categoryResults" :key="i">
              <div class="p-5 rounded-xl bg-echo-900/50 border border-echo-800">
                <div class="flex items-start justify-between mb-3">
                  <div>
                    <h3 class="font-semibold text-lg" x-text="cat.name"></h3>
                    <p class="text-sm text-echo-400 font-mono">&mdash; / &mdash;</p>
                  </div>
                  <div class="w-12 h-12 rounded-lg bg-echo-800"></div>
                </div>
                <div class="h-2 bg-echo-800 rounded-full mb-3"></div>
                <p class="text-sm text-echo-400">Estimated risk: &mdash;</p>
              </div>
            </template>
          </div>
        </div>
      </div>
    </div>

    <!-- ─── UNLOCKED FULL RESULTS ─── -->
    <div x-show="unlocked" x-transition class="max-w-4xl mx-auto px-6 py-12">
      <h2 class="text-2xl font-bold mb-8 font-display">Your grades by area</h2>

      <div class="grid gap-4 sm:grid-cols-2">
        <template x-for="(cat, i) in categoryResults" :key="i">
          <div class="p-5 rounded-xl bg-echo-900/50 border border-echo-800 hover:border-echo-700 transition">
            <div class="flex items-start justify-between mb-3">
              <div>
                <h3 class="font-semibold text-lg" x-text="cat.name"></h3>
                <p class="text-sm text-echo-400 font-mono" x-text="`${cat.score} / ${cat.maxPoints} points`"></p>
              </div>
              <div class="w-12 h-12 rounded-lg flex items-center justify-center text-2xl font-bold font-display"
                :class="gradeColor(cat.grade, 'bg')">
                <span x-text="cat.grade"></span>
              </div>
            </div>
            <div class="h-2 bg-echo-800 rounded-full overflow-hidden mb-3">
              <div class="h-full rounded-full bar-fill" :class="gradeColor(cat.grade, 'bar')" :style="`width: ${(cat.score / cat.maxPoints) * 100}%`"></div>
            </div>
            <p class="text-sm text-echo-400" x-text="cat.risk"></p>
          </div>
        </template>
      </div>

      <div class="mt-12 p-6 rounded-xl bg-crimson/5 border border-crimson/20">
        <h2 class="text-xl font-bold mb-4 text-crimson-400 font-display">Your Top Risks</h2>
        <div class="space-y-3">
          <template x-for="(risk, i) in topRisks" :key="i">
            <div class="flex gap-3 items-start">
              <span class="text-crimson-500 font-bold shrink-0" x-text="`${i + 1}.`"></span>
              <div>
                <span class="font-semibold" x-text="risk.name"></span>
                <span class="text-echo-400" x-text="` — Grade ${risk.grade}. ${risk.description}`"></span>
                <template x-if="risk.cascadeHint">
                  <p class="text-xs text-crimson-400/70 mt-1 italic" x-text="risk.cascadeHint"></p>
                </template>
              </div>
            </div>
          </template>
        </div>
      </div>

      <div class="mt-12 p-8 rounded-xl bg-gradient-to-br from-echo-900 to-echo-800 border border-echo-700 text-center">
        <h2 class="text-2xl font-bold mb-3 font-display">Grades show you where. Dollars show you why.</h2>
        <p class="text-echo-300 max-w-lg mx-auto mb-6">
          This assessment identified your gaps. A 30-minute conversation turns those letter grades into a prioritized action plan with real numbers behind it.
        </p>
        <a href="https://echocyber.io/#contact" target="_blank" class="inline-flex items-center gap-2 px-8 py-4 bg-crimson-700 hover:bg-crimson-600 text-white font-semibold rounded-lg text-lg transition-all hover:shadow-glow active:scale-[0.98]">
          Book a Free 30-Minute Review
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
        </a>
        <p class="text-sm text-echo-500 mt-4">No obligation. No pitch. Just clarity.</p>
      </div>

      <div class="mt-8 text-center">
        <button @click="reset()" class="text-sm text-echo-400 hover:text-white transition">&larr; Take the assessment again</button>
      </div>
    </div>
  </div>

</div>

@endsection

@push('scripts')
<script>
function quiz() {
  return {
    step: 'landing',
    currentQ: 0,
    answers: {},
    unlocked: false,
    submitting: false,
    lead: { name: '', email: '', company: '', role: '', size: '', newsletter: true },
    _formLoadedAt: Date.now(),

    categoryNames: [
      'Identity & Access',
      'Devices & Patching',
      'Email & Phishing Defense',
      'Backup & Recovery',
      'Network Security',
      'Data Protection',
      'Vendor & SaaS Risk',
      'Incident Readiness'
    ],

    categoryMaxPoints: {
      'Identity & Access': 25,
      'Devices & Patching': 25,
      'Email & Phishing Defense': 25,
      'Backup & Recovery': 20,
      'Network Security': 20,
      'Data Protection': 20,
      'Vendor & SaaS Risk': 25,
      'Incident Readiness': 25
    },

    questions: [
      // ── 1. Identity & Access (5 questions, 25 points) ──
      {
        category: 'Identity & Access',
        question: 'Do you require multi-factor authentication (MFA) \u2014 both a password AND a code from your phone \u2014 to access company systems?',
        options: [
          'Yes, for all users on all business apps',
          'Yes, for email and a few critical apps',
          'Only for admins',
          'No'
        ],
        points: [5, 3, 2, 0]
      },
      {
        category: 'Identity & Access',
        question: 'How do your employees manage passwords?',
        options: [
          'Company-provided password manager \u2014 required for everyone',
          'Some use password managers, but it\u2019s not required',
          'Browser-saved passwords',
          'Written down or memorized'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Identity & Access',
        question: 'When someone leaves the company, how quickly is their access removed?',
        options: [
          'Within hours \u2014 we have a checklist or it\u2019s automated',
          'Same day',
          'Within a week',
          'We handle it eventually'
        ],
        points: [5, 4, 2, 0]
      },
      {
        category: 'Identity & Access',
        question: 'Do you have separate accounts for administrative tasks vs. daily work?',
        options: [
          'Yes, admins use separate privileged accounts',
          'Admins use their regular accounts with elevated rights',
          'We have shared admin accounts',
          'Everyone is an admin'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Identity & Access',
        question: 'Could you tell me right now who has admin access to your financial systems?',
        options: [
          'Yes, we have documentation',
          'Mostly \u2014 I\u2019d need to check a couple things',
          'I\u2019d have to dig into the systems to find out',
          'No idea'
        ],
        points: [5, 3, 1, 0]
      },

      // ── 2. Devices & Patching (5 questions, 25 points) ──
      {
        category: 'Devices & Patching',
        question: 'What protects your computers from malware and ransomware?',
        options: [
          'Endpoint detection and response \u2014 EDR (CrowdStrike, SentinelOne, etc.)',
          'Business antivirus (Webroot, ESET, etc.)',
          'Built-in protection only (Windows Defender, Mac built-in)',
          'Not sure / Nothing'
        ],
        points: [5, 4, 2, 0]
      },
      {
        category: 'Devices & Patching',
        question: 'If a company laptop is stolen tomorrow, what happens?',
        options: [
          'It\u2019s encrypted AND we can remotely wipe it',
          'We can remotely wipe it, but it\u2019s not encrypted',
          'We\u2019d ask the person to change their passwords',
          'That laptop has full access to our systems \u2014 forever'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Devices & Patching',
        question: 'Are your computers and phones kept up to date with security patches?',
        options: [
          'Yes \u2014 patches deploy automatically within days of release',
          'We update manually on a regular schedule',
          'Users update when they feel like it',
          'Updates are often months behind or disabled'
        ],
        points: [5, 4, 2, 0]
      },
      {
        category: 'Devices & Patching',
        question: 'Do you know how many devices \u2014 laptops, phones, tablets \u2014 access your company data?',
        options: [
          'Full inventory with management software (MDM/RMM)',
          'We maintain a manual list',
          'We know generally but not exactly',
          'We don\u2019t track this'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Devices & Patching',
        question: 'Are any of your systems running software that no longer receives security updates (Windows 7, Server 2012, old macOS, etc.)?',
        options: [
          'No, everything is currently supported',
          'A few old systems, but they\u2019re isolated from the network',
          'Yes, we have unsupported systems in production',
          'Not sure'
        ],
        points: [5, 3, 0, 0]
      },

      // ── 3. Email & Phishing Defense (5 questions, 25 points) ──
      {
        category: 'Email & Phishing Defense',
        question: 'What protects your email from phishing attacks and malware?',
        options: [
          'Advanced email security (Microsoft Defender for O365, Proofpoint, Mimecast, etc.)',
          'Standard spam filtering \u2014 whatever came with our email service',
          'Nothing beyond the basics',
          'Not sure'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Email & Phishing Defense',
        question: 'Can someone send an email that looks like it came from your company\u2019s domain \u2014 to your customers, your bank, or your employees?',
        options: [
          'No \u2014 we\u2019ve set up email authentication (DMARC, SPF, DKIM) to prevent this',
          'Probably not \u2014 we have some protections configured',
          'Yes \u2014 we haven\u2019t set up email authentication',
          'I don\u2019t know'
        ],
        points: [5, 3, 0, 0]
      },
      {
        category: 'Email & Phishing Defense',
        question: 'Do you test your employees with fake phishing emails to see who clicks?',
        options: [
          'Yes, regularly \u2014 monthly or quarterly, and we track who needs more training',
          'We did it once or twice',
          'No, never',
          'What\u2019s a phishing simulation?'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Email & Phishing Defense',
        question: 'When an employee gets a suspicious email, how easy is it to report it?',
        options: [
          'One-click \u201cReport Phishing\u201d button in their email client',
          'They forward it to IT or a security address',
          'They\u2019d have to figure out who to tell',
          'No process \u2014 most people just delete it and move on'
        ],
        points: [5, 4, 2, 0]
      },
      {
        category: 'Email & Phishing Defense',
        question: 'Do your executives receive any additional protection against targeted email attacks (CEO fraud, wire transfer scams, impersonation)?',
        options: [
          'Yes \u2014 we have extra verification steps for financial requests and executive accounts have enhanced monitoring',
          'We have a verbal/Slack verification policy for wire transfers, but no technical controls',
          'No \u2014 executives use the same email protections as everyone else',
          'I didn\u2019t know executives were targeted differently'
        ],
        points: [5, 3, 1, 0]
      },

      // ── 4. Backup & Recovery (4 questions, 20 points) ──
      {
        category: 'Backup & Recovery',
        question: 'How often are your critical business files and systems backed up?',
        options: [
          'Continuously or multiple times per day',
          'Daily',
          'Weekly',
          'Monthly or less / We don\u2019t have regular backups'
        ],
        points: [5, 4, 3, 0]
      },
      {
        category: 'Backup & Recovery',
        question: 'If ransomware encrypted everything right now \u2014 your files, your servers, your backups on the network \u2014 would your backups survive?',
        options: [
          'Yes \u2014 we have offline, immutable, or air-gapped backups that ransomware can\u2019t reach',
          'Our backups are offsite/cloud, but not specifically protected from ransomware',
          'Ransomware would probably get our backups too',
          'Not sure'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Backup & Recovery',
        question: 'When was the last time you actually tested restoring from backup \u2014 not just checking the backup ran, but restoring real data?',
        options: [
          'Within the last 3 months',
          'Within the last year',
          'More than a year ago',
          'Never'
        ],
        points: [5, 4, 2, 0]
      },
      {
        category: 'Backup & Recovery',
        question: 'If your primary systems died right now, how long until you\u2019re back to normal operations?',
        options: [
          'Hours \u2014 we\u2019ve tested and timed this',
          '1\u20132 days',
          'A week or more',
          'No idea \u2014 we\u2019d be in serious trouble'
        ],
        points: [5, 3, 1, 0]
      },

      // ── 5. Network Security (4 questions, 20 points) ──
      {
        category: 'Network Security',
        question: 'What kind of firewall protects your office network?',
        options: [
          'Next-generation firewall with active threat detection (Palo Alto, Fortinet, etc.)',
          'Business-grade firewall (SonicWall, WatchGuard, Meraki, etc.)',
          'Consumer router from Best Buy (Netgear, Linksys, etc.)',
          'Just the modem from our internet provider'
        ],
        points: [5, 4, 2, 0]
      },
      {
        category: 'Network Security',
        question: 'Is your guest WiFi on a completely separate network from your business systems?',
        options: [
          'Yes, completely separate \u2014 guests can\u2019t see or reach any business resources',
          'Same network, different password',
          'Same network, same access',
          'We don\u2019t have guest WiFi'
        ],
        points: [5, 2, 0, 3]
      },
      {
        category: 'Network Security',
        question: 'How do remote employees access company systems?',
        options: [
          'VPN or zero-trust access with multi-factor authentication',
          'VPN without MFA',
          'Remote desktop (RDP) exposed directly to the internet',
          'Cloud apps only \u2014 no VPN needed'
        ],
        points: [5, 3, 0, 4]
      },
      {
        category: 'Network Security',
        question: 'Do you monitor your network for suspicious activity?',
        options: [
          'Yes \u2014 active monitoring with alerts that someone reviews',
          'We review logs occasionally',
          'Logs exist but nobody looks at them',
          'No monitoring at all'
        ],
        points: [5, 3, 1, 0]
      },

      // ── 6. Data Protection (4 questions, 20 points) ──
      {
        category: 'Data Protection',
        question: 'Do you know what types of sensitive data your company handles \u2014 customer PII, financial records, health information, trade secrets?',
        options: [
          'Yes, we have a documented data classification policy',
          'Generally \u2014 we know the big categories (customer info, financials)',
          'Not formally documented',
          'Haven\u2019t really thought about this'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Data Protection',
        question: 'How is sensitive data protected on your servers and devices?',
        options: [
          'Encrypted at rest everywhere it\u2019s stored',
          'Encrypted on laptops but not on servers or in cloud apps',
          'Access-controlled but not encrypted',
          'No specific protections'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Data Protection',
        question: 'How do employees share sensitive files with customers, vendors, or partners?',
        options: [
          'Secure file sharing platform with access controls and audit trails',
          'Google Drive / Dropbox / OneDrive links',
          'Email attachments',
          'USB drives or whatever works'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Data Protection',
        question: 'Could you tell me right now where ALL your customer data lives \u2014 every system, every spreadsheet, every backup?',
        options: [
          'Yes, we maintain a data inventory',
          'Mostly \u2014 the primary systems are documented',
          'It\u2019s scattered across a few places, not formally tracked',
          'Honestly, no idea'
        ],
        points: [5, 3, 1, 0]
      },

      // ── 7. Vendor & SaaS Risk (5 questions, 25 points) ──
      {
        category: 'Vendor & SaaS Risk',
        question: 'How many cloud/SaaS applications does your company use (email, accounting, CRM, payroll, file sharing, project management, etc.)?',
        options: [
          'We maintain an inventory and review it regularly',
          'We have a rough list but it\u2019s probably not complete',
          'More than we can count \u2014 people sign up for things on their own',
          'We\u2019ve never tried to count'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Vendor & SaaS Risk',
        question: 'When you sign up for a new software vendor, do you evaluate their security practices?',
        options: [
          'Yes \u2014 we review their security certifications (SOC 2, ISO 27001) and ask about their data handling',
          'Sometimes \u2014 it depends on how sensitive the data is',
          'No \u2014 we just check if it does what we need',
          'We didn\u2019t know that was something to look at'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Vendor & SaaS Risk',
        question: 'Do you know which of your vendors have access to your customer data, employee data, or financial data?',
        options: [
          'Yes \u2014 we track vendor access and review it at least annually',
          'We know the big ones (payroll, CRM, accounting)',
          'We haven\u2019t mapped this out',
          'This question is making me nervous'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Vendor & SaaS Risk',
        question: 'If your payroll provider, CRM, or accounting software got breached tomorrow, do you know what data of yours they hold?',
        options: [
          'Yes \u2014 we understand what each critical vendor stores and our contractual protections',
          'For some vendors, yes',
          'We assume they handle it but haven\u2019t verified',
          'We\u2019ve never thought about this'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Vendor & SaaS Risk',
        question: 'Can employees sign up for new cloud tools and connect them to company data without approval?',
        options: [
          'No \u2014 we have a policy requiring approval, and we enforce it',
          'We have a policy but it\u2019s loosely followed',
          'Anyone can sign up for anything',
          'We actively encourage people to find their own tools'
        ],
        points: [5, 3, 1, 0]
      },

      // ── 8. Incident Readiness (5 questions, 25 points) ──
      {
        category: 'Incident Readiness',
        question: 'If you discovered a data breach right now \u2014 this minute \u2014 who would you call first?',
        options: [
          'We have an incident response plan with a call tree \u2014 I know exactly who to reach',
          'I\u2019d call our IT person/MSP',
          'I\u2019d probably Google \u201cwhat to do after a data breach\u201d',
          'I\u2019d panic'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Incident Readiness',
        question: 'Do you have cyber insurance?',
        options: [
          'Yes \u2014 we\u2019ve reviewed the policy and understand what\u2019s covered',
          'Yes \u2014 but I couldn\u2019t tell you the details of coverage',
          'No, but we\u2019ve been meaning to look into it',
          'No, and we hadn\u2019t considered it'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Incident Readiness',
        question: 'Do you know your legal obligations if customer or employee data is exposed (notification deadlines, who to report to, what to tell affected people)?',
        options: [
          'Yes \u2014 we know the regulations that apply to us and have a notification plan',
          'Generally \u2014 we know we\u2019d need to tell people, but the specifics are fuzzy',
          'We\u2019d figure it out with a lawyer if it happened',
          'We\u2019ve never thought about this'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Incident Readiness',
        question: 'Have you ever practiced responding to a security incident \u2014 even a tabletop exercise where you walk through \u201cwhat would we do if...\u201d?',
        options: [
          'Yes \u2014 we run exercises at least annually',
          'We\u2019ve talked through scenarios informally',
          'No, never',
          'What\u2019s a tabletop exercise?'
        ],
        points: [5, 3, 1, 0]
      },
      {
        category: 'Incident Readiness',
        question: 'If your systems were completely locked by ransomware and the attacker demanded $100,000, what would your company do?',
        options: [
          'We have a documented position on ransomware payments and a recovery plan that doesn\u2019t depend on paying',
          'We\u2019d consult with experts and our insurance company',
          'We\u2019d seriously consider paying because we don\u2019t have another option',
          'We\u2019ve never discussed this possibility'
        ],
        points: [5, 3, 1, 0]
      }
    ],

    // ── Computed ──
    get currentCategory() { return this.questions[this.currentQ]?.category || ''; },
    get isNewCategory() {
      if (this.currentQ === 0) return true;
      return this.questions[this.currentQ]?.category !== this.questions[this.currentQ - 1]?.category;
    },
    get totalScore() {
      let total = 0;
      for (let i = 0; i < this.questions.length; i++) {
        if (this.answers[i] !== undefined) total += this.questions[i].points[this.answers[i]];
      }
      return total;
    },
    get overallGrade() { return this.getGrade(this.totalScore, 185); },
    get overallTitle() {
      const titles = { A: 'Exceptional', B: 'Solid Foundation', C: 'Room to Grow', D: 'Significant Gaps', F: 'Critical Risk' };
      return titles[this.overallGrade] || '';
    },
    get overallDescription() {
      const desc = {
        A: 'Well-managed risk \u2014 security is a business strength. You\u2019re in the top 10% of companies your size.',
        B: 'Solid posture with manageable gaps that should be addressed. You\u2019re better than 60\u201370% of your peers.',
        C: 'Significant exposure \u2014 one bad day could be very expensive. You have some protections but major gaps remain.',
        D: 'Dangerous \u2014 statistically likely to have a costly incident within 12\u201324 months. Without action, you\u2019re one incident away from serious damage.',
        F: 'Critical \u2014 operating on borrowed time. You\u2019re missing essential security controls at a business-threatening level.'
      };
      return desc[this.overallGrade] || '';
    },
    get overallRisk() {
      const risks = { A: '<$83K', B: '$83K\u2013$250K', C: '$200K\u2013$650K', D: '$500K\u2013$1.7M', F: '$1M\u2013$4M+' };
      return risks[this.overallGrade] || '';
    },
    get categoryResults() {
      return this.categoryNames.map(catName => {
        const maxPts = this.categoryMaxPoints[catName];
        const qs = this.questions.map((q, i) => ({ ...q, index: i })).filter(q => q.category === catName);
        const score = qs.reduce((sum, q) => sum + (this.questions[q.index].points[this.answers[q.index]] || 0), 0);
        const grade = this.getGrade(score, maxPts);
        return { name: catName, score, maxPoints: maxPts, grade, risk: this.getCategoryRisk(catName, grade) };
      });
    },
    _serverTopRisks: null,
    get topRisks() {
      const top = [...this.categoryResults]
        .sort((a, b) => (a.score / a.maxPoints) - (b.score / b.maxPoints))
        .slice(0, 3)
        .map(r => ({ ...r, description: this.getCategoryRiskDesc(r.name, r.grade) }));

      // Merge cascade hints from server response if available
      if (this._serverTopRisks) {
        for (const t of top) {
          const match = this._serverTopRisks.find(s => s.name === t.name);
          if (match?.cascadeHint) t.cascadeHint = match.cascadeHint;
        }
      }
      return top;
    },

    // ── Methods ──
    selectAnswer(i) { this.answers[this.currentQ] = i; },
    nextQuestion() {
      if (this.currentQ < this.questions.length - 1) {
        this.currentQ++;
      } else {
        // Quiz complete → show teaser results (gated). Full detail unlocks after form submit.
        this.step = 'results';
        window.scrollTo({ top: 0, behavior: 'smooth' });
      }
    },
    prevQuestion() { if (this.currentQ > 0) this.currentQ--; },
    async unlockResults() {
      if (this.submitting) return;
      this.submitting = true;

      // Build answers array (point values in question order)
      const answerValues = [];
      for (let i = 0; i < this.questions.length; i++) {
        const selected = this.answers[i];
        answerValues.push(selected !== undefined ? this.questions[i].points[selected] : 0);
      }

      // Parse name into first/last
      const nameParts = (this.lead.name || '').trim().split(/\s+/);
      const firstName = nameParts[0] || '';
      const lastName = nameParts.slice(1).join(' ') || '';

      // POST to Netlify Function (server-side scoring + GHL + Beehiiv)
      try {
        const res = await fetch('/.netlify/functions/assess', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({
            answers: answerValues,
            lead: {
              firstName,
              lastName,
              email: this.lead.email,
              company: this.lead.company,
              role: this.lead.role,
              companySize: this.lead.size,
              newsletter: this.lead.newsletter,
            },
          }),
        });

        if (res.ok) {
          const data = await res.json();
          if (data.ok && data.results) {
            this._serverTopRisks = data.results.topRisks || null;
          }
        }
      } catch (err) {
        console.warn('[Signal Score] Server submission failed, showing client-side results:', err.message);
      }

      this.submitting = false;
      this.unlocked = true;
      // Scroll the newly-revealed detail into view
      this.$nextTick(() => window.scrollTo({ top: window.innerHeight * 0.4, behavior: 'smooth' }));
    },
    reset() {
      this.step = 'landing';
      this.currentQ = 0;
      this.answers = {};
      this.unlocked = false;
      this.submitting = false;
      this._serverTopRisks = null;
      this.lead = { name: '', email: '', company: '', role: '', size: '', newsletter: true };
    },

    getGrade(score, maxPoints) {
      if (maxPoints === 185) {
        if (score >= 163) return 'A';
        if (score >= 126) return 'B';
        if (score >= 89) return 'C';
        if (score >= 52) return 'D';
        return 'F';
      }
      if (maxPoints === 20) {
        if (score >= 18) return 'A';
        if (score >= 14) return 'B';
        if (score >= 10) return 'C';
        if (score >= 6) return 'D';
        return 'F';
      }
      // 25-point categories (default)
      if (score >= 22) return 'A';
      if (score >= 17) return 'B';
      if (score >= 12) return 'C';
      if (score >= 7) return 'D';
      return 'F';
    },

    getCategoryProgress(cat) {
      const qs = this.questions.map((q, i) => ({ ...q, index: i })).filter(q => q.category === cat);
      const answered = qs.filter(q => this.answers[q.index] !== undefined).length;
      if (answered === qs.length) return 'done';
      if (answered > 0 || this.questions[this.currentQ]?.category === cat) return 'active';
      return 'pending';
    },

    gradeColor(grade, type) {
      const colors = {
        A: { text: 'text-emerald-400', border: 'border-emerald-400', bg: 'bg-emerald-500/20 text-emerald-400', bar: 'bg-emerald-500' },
        B: { text: 'text-blue-400', border: 'border-blue-400', bg: 'bg-blue-500/20 text-blue-400', bar: 'bg-blue-500' },
        C: { text: 'text-yellow-400', border: 'border-yellow-400', bg: 'bg-yellow-500/20 text-yellow-400', bar: 'bg-yellow-500' },
        D: { text: 'text-orange-400', border: 'border-orange-400', bg: 'bg-orange-500/20 text-orange-400', bar: 'bg-orange-500' },
        F: { text: 'text-red-400', border: 'border-red-400', bg: 'bg-red-500/20 text-red-400', bar: 'bg-red-500' },
      };
      return colors[grade]?.[type] || '';
    },

    getCategoryRisk(cat, grade) {
      const risks = {
        'Identity & Access':        { A: '<$5K/yr', B: '$5K\u2013$15K/yr', C: '$10K\u2013$50K/yr', D: '$25K\u2013$100K/yr', F: '$50K\u2013$200K/yr' },
        'Devices & Patching':       { A: '<$10K/yr', B: '$10K\u2013$30K/yr', C: '$20K\u2013$75K/yr', D: '$50K\u2013$150K/yr', F: '$100K\u2013$500K/yr' },
        'Email & Phishing Defense': { A: '<$5K/yr', B: '$5K\u2013$15K/yr', C: '$10K\u2013$40K/yr', D: '$25K\u2013$100K/yr', F: '$50K\u2013$250K/yr' },
        'Backup & Recovery':        { A: '<$10K/yr', B: '$10K\u2013$30K/yr', C: '$25K\u2013$100K/yr', D: '$100K\u2013$400K/yr', F: '$250K\u2013$1M+/yr' },
        'Network Security':         { A: '<$8K/yr', B: '$8K\u2013$25K/yr', C: '$15K\u2013$60K/yr', D: '$40K\u2013$120K/yr', F: '$75K\u2013$300K/yr' },
        'Data Protection':          { A: '<$15K/yr', B: '$15K\u2013$40K/yr', C: '$30K\u2013$100K/yr', D: '$75K\u2013$250K/yr', F: '$150K\u2013$600K/yr' },
        'Vendor & SaaS Risk':       { A: '<$10K/yr', B: '$10K\u2013$30K/yr', C: '$25K\u2013$80K/yr', D: '$50K\u2013$200K/yr', F: '$100K\u2013$400K/yr' },
        'Incident Readiness':       { A: '<$20K/yr', B: '$20K\u2013$60K/yr', C: '$50K\u2013$150K/yr', D: '$100K\u2013$400K/yr', F: '$200K\u2013$800K/yr' }
      };
      return `Estimated risk: ${risks[cat]?.[grade] || 'N/A'}`;
    },

    getCategoryRiskDesc(cat, grade) {
      const descs = {
        'Identity & Access': {
          A: 'MFA everywhere, password manager enforced, access reviews quarterly.',
          B: 'MFA on critical systems, offboarding same-day, some reviews.',
          C: 'MFA on email only, shared admin accounts, cleanup happens eventually.',
          D: 'Spotty MFA, weak passwords, ex-employees still have access.',
          F: 'No MFA, no password policy, no offboarding process.'
        },
        'Devices & Patching': {
          A: 'EDR + encryption + auto-patching + device inventory.',
          B: 'Business AV + encryption, regular manual patching.',
          C: 'Basic AV, inconsistent encryption, patches when prompted.',
          D: 'Outdated AV, no encryption, months behind on patches.',
          F: 'No protection, unpatched, unsupported OS in production.'
        },
        'Email & Phishing Defense': {
          A: 'Advanced filtering + DMARC enforced + regular phishing tests + security culture.',
          B: 'Good filtering, DMARC monitoring, trained users.',
          C: 'Basic spam filtering, SPF exists, some awareness.',
          D: 'Poor filtering, no DMARC, regular phishing victims.',
          F: 'No email security, domain spoofable, users click everything.'
        },
        'Backup & Recovery': {
          A: '3-2-1 + immutable + tested quarterly + known RTO.',
          B: 'Regular backups, offsite, tested annually.',
          C: 'Backups exist but untested, scope unclear.',
          D: 'Sporadic backups, no offsite, never tested.',
          F: 'No backups \u2014 ransomware = game over.'
        },
        'Network Security': {
          A: 'NGFW + segmentation + VPN w/MFA + active monitoring.',
          B: 'Business firewall, guest WiFi separated, VPN.',
          C: 'Basic firewall, some segmentation, logs unreviewed.',
          D: 'Consumer router, flat network, exposed RDP.',
          F: 'ISP modem, open WiFi, no visibility.'
        },
        'Data Protection': {
          A: 'Classified, encrypted, inventoried, policy-driven.',
          B: 'Encryption + secure sharing + known sensitive data.',
          C: 'Partial encryption, informal policies.',
          D: 'No encryption, no controls, data scattered.',
          F: 'No idea where data lives, wide open access.'
        },
        'Vendor & SaaS Risk': {
          A: 'Vendor inventory, security reviews, contractual protections.',
          B: 'Major vendors tracked, some security evaluation.',
          C: 'Know some vendors, no formal evaluation.',
          D: 'No inventory, shadow IT, no vendor evaluation.',
          F: 'No idea what tools are in use or who has your data.'
        },
        'Incident Readiness': {
          A: 'IR plan + exercises + insurance + legal obligations known.',
          B: 'Plan documented, insurance, some practice.',
          C: 'Informal plan, some insurance.',
          D: 'Would call IT, no plan, no insurance.',
          F: 'No plan, no insurance, panic mode.'
        }
      };
      return descs[cat]?.[grade] || '';
    },
  };
}
</script>
@endpush
