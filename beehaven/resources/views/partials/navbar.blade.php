<header class="text-white font-inter">
    <nav class="bg-white text-black shadow-md px-4 py-2 flex justify-between items-center flex-wrap">
        <!-- Logo -->
        <div class="flex items-center gap-4">
            <img src="{{ asset('assets/img/company_logo/logo_eight.png') }}" alt="Logo"
                class="h-auto contrast-125" style="width: 6rem;" />
        </div>

        <!-- Hamburger (Mobile) -->
        <button id="menu-toggle" class="md:hidden text-black focus:outline-none text-2xl">
            ☰
        </button>

        <!-- Navigation Menu -->
        <div id="mobile-menu"
            class="w-full md:w-auto md:flex hidden flex-col md:flex-row md:items-center md:gap-6 mt-3 md:mt-0">
            <ul class="flex flex-col md:flex-row gap-3 md:gap-6 text-sm font-medium">
                @php
                    $navItems = [
                        ['label' => 'Home', 'route' => 'home'],
                        ['label' => 'About Us', 'route' => 'about'],
                        ['label' => 'Homes', 'route' => 'homes'],
                        ['label' => 'Apartments', 'route' => 'apartments'],
                        ['label' => 'Plot', 'route' => 'plots'],
                        ['label' => 'Farm House', 'route' => 'farmHouses'],
                        ['label' => 'New Project', 'route' => 'newProjects'],
                    ];
                @endphp

                @foreach ($navItems as $item)
                    <li>
                        <a href="{{ route($item['route']) }}"
                            class="nav-link px-4 py-2 rounded-full {{ request()->routeIs($item['route']) ? 'bg-[#02a23a] text-white' : 'hover:bg-[#02a23a] hover:text-white' }}">
                            {{ $item['label'] }}
                        </a>
                    </li>
                @endforeach
            </ul>

            <!-- Booking Button -->
            <div class="mt-3 md:mt-0 md:ml-4">
                <a href="booking-form.html"
                    class="inline-flex items-center gap-2 px-6 py-2 text-sm font-medium text-white bg-[#02a23a] rounded-full shadow-md transition duration-300 hover:bg-[#028b32] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#02a23a]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12h6m2 0a8 8 0 11-16 0 8 8 0 0116 0z" />
                    </svg>
                    Booking Form
                </a>
            </div>
        </div>
    </nav>
</header>
