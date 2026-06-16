{{--
    Pricing tier card (TailwindPlus "Three tiers with emphasized tier" pattern, brand-adapted).
    Required vars: name, tagline, price, priceSuffix, description, features (array), cta, featured (bool)
    Optional vars: metaphor (short brand-metaphor line under the name; renders empty if absent)
--}}
<div @if($featured) data-featured="true" @endif
     class="group/tier relative flex flex-col rounded-3xl bg-echo-950/60 p-8 ring-1 ring-echo-700/50 backdrop-blur-sm transition-all hover:ring-echo-600 data-featured:bg-echo-950 data-featured:ring-2 data-featured:ring-crimson-600 data-featured:shadow-glow xl:p-10">

    @if($featured)
        <div class="absolute -top-4 left-1/2 -translate-x-1/2">
            <span class="inline-flex items-center gap-1.5 rounded-full bg-crimson-600 px-4 py-1.5 text-xs font-bold uppercase tracking-wider text-white shadow-lg shadow-crimson-900/50">
                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.539 1.118l-2.8-2.034a1 1 0 00-1.176 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                Most Popular
            </span>
        </div>
    @endif

    <div class="flex-1">
        <div class="flex items-baseline justify-between">
            <h3 class="font-display text-xl font-semibold text-white group-data-featured/tier:text-crimson-400">{{ $name }}</h3>
            <span class="text-xs font-medium uppercase tracking-wider {{ $featured ? 'text-crimson-400' : 'text-echo-500' }}">{{ $tagline }}</span>
        </div>

        @if(!empty($metaphor ?? null))
            <p class="mt-1 font-mono text-sm text-crimson-500">{{ $metaphor }}</p>
        @endif

        <p class="mt-6 flex items-baseline gap-x-2">
            <span class="font-display text-5xl font-bold tracking-tight text-white">{{ $price }}</span>
            <span class="text-sm text-echo-500">{{ $priceSuffix }}</span>
        </p>

        <p class="mt-6 text-sm leading-6 text-echo-300">
            {{ $description }}
        </p>

        <ul role="list" class="mt-8 space-y-3 text-sm leading-6 text-echo-300">
            @foreach($features as $feature)
                <li class="flex gap-x-3">
                    <svg class="h-6 w-5 flex-none text-crimson-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" />
                    </svg>
                    {{ $feature }}
                </li>
            @endforeach
        </ul>
    </div>

    <div class="mt-8 pt-6 border-t border-echo-800">
        <a href="/contact"
           class="block w-full rounded-lg px-4 py-3 text-center text-sm font-semibold transition-all
                  {{ $featured
                      ? 'bg-crimson-700 text-white shadow-sm hover:bg-crimson-600 hover:shadow-glow'
                      : 'bg-echo-800/60 text-white ring-1 ring-echo-700 hover:bg-echo-700 hover:ring-echo-600' }}">
            {{ $cta }}
        </a>
    </div>
</div>
