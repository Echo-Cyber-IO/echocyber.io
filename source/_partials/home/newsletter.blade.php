{{-- ==================== NEWSLETTER ==================== --}}
<section class="border-t border-echo-800 bg-echo-950 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
                <span class="font-mono text-xs uppercase tracking-widest text-crimson-500">Weekly newsletter</span>
                <div class="w-8 h-1 bg-crimson-600 rounded-full"></div>
            </div>
            <h2 class="mt-6 font-display text-3xl font-bold tracking-tight text-white">
                Signal vs. Noise
            </h2>
            <p class="mt-6 text-lg leading-8 text-echo-300">
                Cutting through the chaos of cybersecurity and technology, so you can lead with clarity. One email every Sunday. No fluff, no vendor hype, no fear-mongering.
            </p>
        </div>

        <div x-data="newsletterSignup()" x-init="init()" class="mx-auto mt-10 max-w-lg">
            <form @submit.prevent="submit()" x-show="!success" class="flex flex-col gap-3 sm:flex-row">
                <label for="newsletter-email" class="sr-only">Email address</label>
                <input id="newsletter-email" type="email" x-model="email" required
                       placeholder="you@company.com"
                       :disabled="submitting"
                       class="flex-1 px-4 py-3 bg-echo-900 border border-echo-700 rounded-lg text-white placeholder-echo-500 focus:outline-none focus:border-crimson-500 focus:ring-1 focus:ring-crimson-500 transition disabled:opacity-60">
                <button type="submit" :disabled="submitting"
                        class="px-6 py-3 bg-crimson-700 hover:bg-crimson-600 disabled:opacity-60 disabled:cursor-not-allowed text-white font-semibold rounded-lg transition-all hover:shadow-glow whitespace-nowrap">
                    <span x-text="submitting ? 'Subscribing...' : 'Subscribe'"></span>
                </button>

                {{-- Honeypot: invisible to humans, irresistible to lazy bots. --}}
                <input type="text" name="company_website" x-model="hp" tabindex="-1" autocomplete="off"
                       aria-hidden="true"
                       style="position:absolute;left:-5000px;width:1px;height:1px;opacity:0">
            </form>

            {{-- Cloudflare Turnstile widget. Site key is public; matching secret stays in Netlify env. --}}
            <div x-show="!success" class="mt-3 flex justify-center">
                <div class="cf-turnstile"
                     data-sitekey="0x4AAAAAADG_poOR76T-jTV5"
                     data-callback="onTurnstileSuccess"
                     data-error-callback="onTurnstileError"
                     data-expired-callback="onTurnstileExpired"
                     data-theme="dark"
                     data-size="flexible"></div>
            </div>

            <div x-show="success" x-cloak x-transition class="rounded-lg border border-crimson-800/50 bg-crimson-950/30 p-4 text-center">
                <p class="font-semibold text-white">You're in. 💎</p>
                <p class="mt-1 text-sm text-echo-300">Check your inbox to confirm.</p>
            </div>

            <p x-show="error" x-cloak class="mt-2 text-center text-sm text-red-400" x-text="error"></p>

            <p class="mt-4 text-center text-sm text-echo-500">
                <a href="https://signal.echocyber.io" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-x-1 text-echo-400 transition-colors hover:text-white">
                    Browse past issues <span aria-hidden="true">&rarr;</span>
                </a>
            </p>
        </div>
    </div>
</section>

@push('scripts')
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
@endpush

@push('scripts')
<script>
function newsletterSignup() {
    return {
        email: '',
        hp: '',
        ts: 0,
        turnstileToken: '',
        submitting: false,
        success: false,
        error: '',
        init() {
            this.ts = Date.now();
            // Expose token-setter callbacks for Turnstile.
            window.onTurnstileSuccess = (token) => { this.turnstileToken = token; };
            window.onTurnstileError = () => { this.turnstileToken = ''; };
            window.onTurnstileExpired = () => { this.turnstileToken = ''; };
        },
        async submit() {
            if (this.submitting) return;
            this.submitting = true;
            this.error = '';
            try {
                const res = await fetch('/.netlify/functions/subscribe', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        email: this.email,
                        source: 'homepage',
                        hp: this.hp,
                        ts: this.ts,
                        turnstileToken: this.turnstileToken,
                    }),
                });
                const data = await res.json().catch(() => ({}));
                if (res.ok && data.ok) {
                    this.success = true;
                } else {
                    this.error = data.error || 'Something went wrong. Try again?';
                    // Reset Turnstile so user can retry.
                    if (window.turnstile && typeof window.turnstile.reset === 'function') {
                        window.turnstile.reset();
                    }
                }
            } catch (err) {
                this.error = 'Network error. Try again?';
            } finally {
                this.submitting = false;
            }
        },
    };
}
</script>
@endpush
