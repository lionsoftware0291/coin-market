<div class="bg-[#03A63C] text-white px-4 py-2 text-sm flex justify-between flex-wrap items-center">
    <!-- Left Links -->
    <div class="flex flex-wrap items-center gap-4">
        @php
            $topLinks = [
                ['label' => 'Home Loan Calculator', 'route' => '#', 'active' => request()->is('home-loan')],
                ['label' => 'Construction Cost Calculator', 'route' => '#', 'active' => request()->is('construction-cost')],
                ['label' => 'Add Property', 'route' => '#', 'active' => request()->is('add-property')],
            ];
        @endphp

        @foreach($topLinks as $link)
            <div class="relative group">
                <a href="{{ $link['route'] }}"
                   class="font-medium hover:text-indigo-200 {{ $link['active'] ? 'text-white' : '' }}">
                    {{ $link['label'] }}
                </a>
                @if($link['active'])
                    <div class="absolute top-full left-1/2 -translate-x-1/2 mt-0.5">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0L24 12H0z" />
                        </svg>
                    </div>
                @endif
            </div>
        @endforeach
    </div>

    <!-- Right Icons -->
    <div class="flex items-center gap-4 mt-2 sm:mt-0">
        <button id="loginTrigger" class="flex items-center gap-1 hover:text-indigo-200 font-medium">
            🔒 Login/Register
        </button>

        <button id="langSwitcher" class="hover:text-indigo-200 text-lg font-medium">اردو</button>

        <button id="localeSwitcher" class="hover:text-indigo-200 text-lg">🇵🇰</button>
        <button id="settingsTrigger" class="hover:text-indigo-200 text-lg">⚙️</button>
        <button id="profileTrigger" class="hover:text-indigo-200 text-lg">👤</button>
    </div>

    <!-- Modals -->
    @include('partials.modals.login')
    @include('partials.modals.settings')
</div>
