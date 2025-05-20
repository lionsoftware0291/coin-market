@extends('layouts.app')

@section('title', 'HOME | Bee Haven PVT LTD')

@section('head')
    <!-- Load Tailwind & custom styles -->
    <link rel="stylesheet" href="{{ asset('resources/css/pages/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/css/components/footer.css') }}">
@endsection

@section('content')

    <!-- ===================== HERO SECTION ===================== -->
    <section class="relative bg-cover bg-center h-[580px] md:h-[600px]"
        style="background-image: url('{{ asset('assets/img/home_page/hello_section/bg_one.png') }}');">
        <div class="absolute inset-0 bg-black/70 z-0"></div>

        <div class="relative z-10 flex justify-center items-center h-full px-4">
            <div class="w-full max-w-6xl text-center text-white">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Find a perfect home you love.</h1>
                <p class="text-lg mb-6">
                    Etiam eget elementum elit. Aenean dignissim dapibus vestibulum.<br />
                    Integer a dolor eu sapien sodales vulputate ac in purus.
                </p>

                <!-- Buttons -->
                <div class="flex justify-center gap-4 mb-8 flex-wrap">
                    <button class="px-6 py-3 bg-blue-600 rounded-lg font-semibold hover:bg-blue-700">HOME</button>
                    <button
                        class="px-6 py-3 border border-white rounded-lg font-semibold hover:bg-white hover:text-black transition">APARTMENTS</button>
                    <button class="px-6 py-3 bg-blue-600 rounded-lg font-semibold hover:bg-blue-700">PLOTS</button>
                </div>

                <!-- ===================== Filter Box ===================== -->
                <div class="bg-white text-black p-6 rounded-md shadow-xl max-w-6xl mx-auto mt-6">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                        <!-- CITY -->
                        <div class="md:col-span-3 bg-gray-50 p-4 rounded shadow filter-item">
                            <label class="block font-bold mb-2">CITY</label>
                            <select class="w-full px-4 py-2 rounded bg-white">
                                <option>Islamabad</option>
                            </select>

                            <!-- Extra dropdown -->
                            <div id="dropdown-city" class="hidden mt-2">
                                <select class="w-full px-4 py-2 bg-gray-100 rounded">
                                    <option>Lahore</option>
                                    <option>Karachi</option>
                                    <option>Peshawar</option>
                                </select>
                            </div>
                        </div>

                        <!-- LOCATION -->
                        <div class="md:col-span-7 bg-gray-50 p-4 rounded shadow filter-item">
                            <label class="block font-bold mb-2">LOCATION</label>
                            <input type="text" id="location-input" class="w-full px-4 py-2 rounded bg-white"
                                placeholder="Enter location" />

                            <!-- Extra dropdowns -->
                            <div id="dropdown-location" class="hidden mt-2 grid grid-cols-1 md:grid-cols-2 gap-2">
                                <select class="w-full px-4 py-2 bg-gray-100 rounded">
                                    <option>Sector A</option>
                                    <option>Sector B</option>
                                </select>
                                <select class="w-full px-4 py-2 bg-gray-100 rounded">
                                    <option>Block 1</option>
                                    <option>Block 2</option>
                                </select>
                            </div>
                        </div>

                        <!-- FIND -->
                        <div class="md:col-span-2 bg-gray-50 p-4 rounded shadow filter-item">
                            <label class="block font-bold mb-2">FIND</label>
                            <button class="w-full bg-[#03A63C] text-white py-2 rounded hover:bg-green-700">Search</button>

                            <!-- Extra dropdown -->
                            <div id="dropdown-find" class="hidden mt-2">
                                <select class="w-full px-4 py-2 bg-gray-100 rounded">
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Show More Options -->
                    <div class="text-center text-sm text-gray-800 mt-4 space-x-2">
                        <span id="toggle-options" class="cursor-pointer underline font-medium">▼ Show More Options</span>
                        <span>|</span>
                        <a href="#" class="text-blue-600">Change Currency</a>
                        <span>|</span>
                        <a href="#" class="text-blue-600">Change Area Unit</a>
                        <span>|</span>
                        <a href="#" class="text-blue-600">Reset Search</a>
                    </div>
                </div>
                <!-- ===================== End Filter Box ===================== -->
            </div>
        </div>
    </section>
    <!-- ===================== END HERO SECTION ===================== -->

    <!-- ===================== PROJECT SLIDER ONE SECTION ===================== -->
    <section class="my-20 px-4 bg-gray-50">
        <h2 class="text-2xl font-bold text-center mb-8">Browse Projects By Category</h2>

        <div class="relative max-w-7xl mx-auto">
            <!-- Left Button -->
            <button id="slider-left"
                class="absolute z-10 left-0 top-1/2 -translate-y-1/2 bg-green-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-700 shadow-md">
                &#8592;
            </button>

            <!-- Slider Track -->
            <div id="slider-track" class="flex space-x-4 will-change-transform">
                <!-- Cards -->
                <div
                    class="slider-card flex-none w-[20%] border border-gray-300 rounded-xl p-4 bg-white shadow hover:shadow-md transition-all">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-green-100 text-2xl flex items-center justify-center rounded-lg">🏢</div>
                        <div>
                            <h3 class="font-semibold text-lg">Apartments</h3>
                            <p class="text-sm text-gray-500">320 Projects</p>
                        </div>
                    </div>
                </div>

                <div
                    class="slider-card flex-none w-[20%] border border-gray-300 rounded-xl p-4 bg-white shadow hover:shadow-md transition-all">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-green-100 text-2xl flex items-center justify-center rounded-lg">🏠</div>
                        <div>
                            <h3 class="font-semibold text-lg">Houses</h3>
                            <p class="text-sm text-gray-500">210 Projects</p>
                        </div>
                    </div>
                </div>

                <div
                    class="slider-card flex-none w-[20%] border border-gray-300 rounded-xl p-4 bg-white shadow hover:shadow-md transition-all">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-green-100 text-2xl flex items-center justify-center rounded-lg">🏗️</div>
                        <div>
                            <h3 class="font-semibold text-lg">Construction</h3>
                            <p class="text-sm text-gray-500">185 Projects</p>
                        </div>
                    </div>
                </div>

                <div
                    class="slider-card flex-none w-[20%] border border-gray-300 rounded-xl p-4 bg-white shadow hover:shadow-md transition-all">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-green-100 text-2xl flex items-center justify-center rounded-lg">🌆</div>
                        <div>
                            <h3 class="font-semibold text-lg">Commercial</h3>
                            <p class="text-sm text-gray-500">95 Projects</p>
                        </div>
                    </div>
                </div>

                <div
                    class="slider-card flex-none w-[20%] border border-gray-300 rounded-xl p-4 bg-white shadow hover:shadow-md transition-all">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-green-100 text-2xl flex items-center justify-center rounded-lg">🌳</div>
                        <div>
                            <h3 class="font-semibold text-lg">Plots</h3>
                            <p class="text-sm text-gray-500">150 Projects</p>
                        </div>
                    </div>
                </div>

                <div
                    class="slider-card flex-none w-[20%] border border-gray-300 rounded-xl p-4 bg-white shadow hover:shadow-md transition-all">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-green-100 text-2xl flex items-center justify-center rounded-lg">🏬</div>
                        <div>
                            <h3 class="font-semibold text-lg">Retail Spaces</h3>
                            <p class="text-sm text-gray-500">72 Projects</p>
                        </div>
                    </div>
                </div>

                <div
                    class="slider-card flex-none w-[20%] border border-gray-300 rounded-xl p-4 bg-white shadow hover:shadow-md transition-all">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 bg-green-100 text-2xl flex items-center justify-center rounded-lg">🏖️</div>
                        <div>
                            <h3 class="font-semibold text-lg">Resorts</h3>
                            <p class="text-sm text-gray-500">40 Projects</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Button -->
            <button id="slider-right"
                class="absolute z-10 right-0 top-1/2 -translate-y-1/2 bg-green-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-green-700 shadow-md">
                &#8594;
            </button>
        </div>
    </section>

    <!-- ===================== END PROJECT SLIDER ONE SECTION ===================== -->


    <!-- === CHECKOUT NEW PROJECTS SECTION === -->
    <section class="bg-white text-gray-800 px-8 py-10 max-w-7xl mx-auto">
        <!-- Header and Tabs -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-4">
            <div>
                <p class="uppercase text-sm tracking-wider text-gray-500 font-medium">Checkout Our New</p>
                <h2 class="text-3xl font-bold text-gray-900 mb-2">Discover New Projects</h2>
                <p class="text-gray-400 max-w-md">Donec porttitor euismod dignissim. Nullam a lacinia ipsum, nec dignissim
                    purus.</p>
            </div>
            <!-- Tabs -->
            <div id="project-tabs" class="flex flex-wrap gap-2 mt-4 md:mt-0">
                <button onclick="filterProjects('all', event)"
                    class="tab-button px-4 py-1 border border-gray-300 rounded-full text-sm font-medium hover:bg-gray-100">All</button>
                <button onclick="filterProjects('sell', event)"
                    class="tab-button px-4 py-1 bg-green-500 text-white rounded-full text-sm font-medium">Sell</button>
                <button onclick="filterProjects('buy', event)"
                    class="tab-button px-4 py-1 border border-gray-300 rounded-full text-sm font-medium hover:bg-gray-100">Buy</button>
            </div>
        </div>

        <!-- Scroll Buttons Below Tabs -->
        <div class="flex justify-end gap-3 mb-4">
            <button id="prevButton"
                class="w-9 h-9 flex items-center justify-center bg-green-500 text-white rounded-full shadow hover:bg-green-600 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button id="nextButton"
                class="w-9 h-9 flex items-center justify-center bg-green-500 text-white rounded-full shadow hover:bg-green-600 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>

        <!-- Project Scroller -->
        <div id="project-scroller" class="flex gap-6 overflow-x-auto scroll-smooth pb-4">
            <!-- Project Card -->
            <div class="project-card min-w-[280px] bg-white rounded-2xl shadow-md" data-type="sell">
                <div class="relative">
                    <img src="{{ asset('assets/img/discover_new_projects/project_one.png') }}" alt="House" class="w-full h-48 object-cover" />
                    <span
                        class="absolute bottom-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full">Popular</span>
                </div>
                <div class="p-4">
                    <p class="text-xl font-semibold">$ 5,970</p>
                    <p class="text-sm text-gray-600">Tranquil Haven in the Woods</p>
                    <p class="text-xs text-gray-400">103 Wright Court, Burien, WA 98168</p>
                    <div class="mt-2 text-sm text-gray-500">4 Beds • 3 Bath</div>
                </div>
            </div>

            <div class="project-card min-w-[280px] bg-white rounded-2xl shadow-md" data-type="buy">
                <div class="relative">
                    <img src="{{ asset('assets/img/discover_new_projects/project_two.png') }}" alt="Apartment" class="w-full h-48 object-cover" />
                    <span class="absolute bottom-2 left-2 bg-blue-500 text-white text-xs px-2 py-1 rounded-full">New
                        Listing</span>
                </div>
                <div class="p-4">
                    <p class="text-xl font-semibold">$ 1,970</p>
                    <p class="text-sm text-gray-600">Serene Retreat by the Lake</p>
                    <p class="text-xs text-gray-400">1964 Jehovah Drive, VA 22408</p>
                    <div class="mt-2 text-sm text-gray-500">3 Beds • 2 Bath</div>
                </div>
            </div>

            <div class="project-card min-w-[280px] bg-white rounded-2xl shadow-md" data-type="sell">
                <div class="relative">
                    <img src="{{ asset('assets\img\discover_new_projects/project_three.png') }}" alt="Cottage" class="w-full h-48 object-cover" />
                    <span
                        class="absolute bottom-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">Discounted
                        Price</span>
                </div>
                <div class="p-4">
                    <p class="text-xl font-semibold">$ 3,450</p>
                    <p class="text-sm text-gray-600">Charming Cottage in the Meadow</p>
                    <p class="text-xs text-gray-400">1508 Centennial Farm Road, Harlan, 51537</p>
                    <div class="mt-2 text-sm text-gray-500">4 Beds • 4 Bath</div>
                </div>
            </div>

            <div class="project-card min-w-[280px] bg-white rounded-2xl shadow-md" data-type="buy">
                <div class="relative">
                    <img src="{{ asset('assets\img\discover_new_projects/project_four.jpg') }}" alt="Estate" class="w-full h-48 object-cover" />
                    <span
                        class="absolute bottom-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full">Popular</span>
                </div>
                <div class="p-4">
                    <p class="text-xl font-semibold">$ 2,389</p>
                    <p class="text-sm text-gray-600">Grand Estate on the Hills</p>
                    <p class="text-xs text-gray-400">103 Wright Court, Burien, WA 98168</p>
                    <div class="mt-2 text-sm text-gray-500">4 Beds • 3 Bath</div>
                </div>
            </div> <div class="project-card min-w-[280px] bg-white rounded-2xl shadow-md" data-type="sell">
                <div class="relative">
                    <img src="{{ asset('assets\img\discover_new_projects/project_one.png') }}" alt="House" class="w-full h-48 object-cover" />
                    <span
                        class="absolute bottom-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full">Popular</span>
                </div>
                <div class="p-4">
                    <p class="text-xl font-semibold">$ 5,970</p>
                    <p class="text-sm text-gray-600">Tranquil Haven in the Woods</p>
                    <p class="text-xs text-gray-400">103 Wright Court, Burien, WA 98168</p>
                    <div class="mt-2 text-sm text-gray-500">4 Beds • 3 Bath</div>
                </div>
            </div>

            <div class="project-card min-w-[280px] bg-white rounded-2xl shadow-md" data-type="buy">
                <div class="relative">
                    <img src="{{ asset('assets\img\discover_new_projects/project_two.png') }}" alt="Apartment" class="w-full h-48 object-cover" />
                    <span class="absolute bottom-2 left-2 bg-blue-500 text-white text-xs px-2 py-1 rounded-full">New
                        Listing</span>
                </div>
                <div class="p-4">
                    <p class="text-xl font-semibold">$ 1,970</p>
                    <p class="text-sm text-gray-600">Serene Retreat by the Lake</p>
                    <p class="text-xs text-gray-400">1964 Jehovah Drive, VA 22408</p>
                    <div class="mt-2 text-sm text-gray-500">3 Beds • 2 Bath</div>
                </div>
            </div>

            <div class="project-card min-w-[280px] bg-white rounded-2xl shadow-md" data-type="sell">
                <div class="relative">
                    <img src="{{ asset('assets\img\discover_new_projects/project_three.png') }}" alt="Cottage" class="w-full h-48 object-cover" />
                    <span
                        class="absolute bottom-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full">Discounted
                        Price</span>
                </div>
                <div class="p-4">
                    <p class="text-xl font-semibold">$ 3,450</p>
                    <p class="text-sm text-gray-600">Charming Cottage in the Meadow</p>
                    <p class="text-xs text-gray-400">1508 Centennial Farm Road, Harlan, 51537</p>
                    <div class="mt-2 text-sm text-gray-500">4 Beds • 4 Bath</div>
                </div>
            </div>

            <div class="project-card min-w-[280px] bg-white rounded-2xl shadow-md" data-type="buy">
                <div class="relative">
                    <img src="{{ asset('assets\img\discover_new_projects/project_four.png') }}" alt="Estate" class="w-full h-48 object-cover" />
                    <span
                        class="absolute bottom-2 left-2 bg-red-500 text-white text-xs px-2 py-1 rounded-full">Popular</span>
                </div>
                <div class="p-4">
                    <p class="text-xl font-semibold">$ 2,389</p>
                    <p class="text-sm text-gray-600">Grand Estate on the Hills</p>
                    <p class="text-xs text-gray-400">103 Wright Court, Burien, WA 98168</p>
                    <div class="mt-2 text-sm text-gray-500">4 Beds • 3 Bath</div>
                </div>
            </div>
        </div>
        <!-- ===================== Browse Project by City ===================== -->
        {{-- <section class="project-by-city py-16 px-4 bg-gray-50">
    <h2 class="text-3xl font-bold text-center mb-4">Browse Projects by City</h2>
    <p class="text-center text-gray-500 mb-8">Donec porttitor euismod dignissim. Nullam a lacinia ipsum, nec dignissim purus.</p>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div class="card bg-white shadow-lg p-6 rounded-lg text-center">
            <div class="font-bold text-lg">Islamabad</div>
            <div class="text-gray-500">120 Projects</div>
            <button class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-md">View Projects</button>
        </div>
        <div class="card bg-white shadow-lg p-6 rounded-lg text-center">
            <div class="font-bold text-lg">Lahore</div>
            <div class="text-gray-500">95 Projects</div>
            <button class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-md">View Projects</button>
        </div>
        <div class="card bg-white shadow-lg p-6 rounded-lg text-center">
            <div class="font-bold text-lg">Karachi</div>
            <div class="text-gray-500">80 Projects</div>
            <button class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-md">View Projects</button>
        </div>
        <div class="card bg-white shadow-lg p-6 rounded-lg text-center">
            <div class="font-bold text-lg">Rawalpindi</div>
            <div class="text-gray-500">60 Projects</div>
            <button class="mt-4 px-6 py-2 bg-blue-600 text-white rounded-md">View Projects</button>
        </div>
    </div>
</section>  --}}

<!-- Section: Browse Projects by City -->
<section class="mb-12">
  <h2 class="text-2xl font-semibold text-gray-800 mb-2">Browse Project by City</h2>
  <p class="text-gray-500 mb-6">Donec porttitor amet dignissim. Lorem in aenean lorem nec dignissim purus.</p>
  <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div class="bg-white p-4 shadow rounded-xl text-center">
      <p class="font-semibold text-gray-700">Islamabad</p>
      <a href="#" class="text-purple-600 text-sm underline">View Project</a>
    </div>
    <div class="bg-white p-4 shadow rounded-xl text-center">
      <p class="font-semibold text-gray-700">Lahore</p>
      <a href="#" class="text-purple-600 text-sm underline">View Project</a>
    </div>
    <div class="bg-white p-4 shadow rounded-xl text-center">
      <p class="font-semibold text-gray-700">Karachi</p>
      <a href="#" class="text-purple-600 text-sm underline">View Project</a>
    </div>
    <div class="bg-white p-4 shadow rounded-xl text-center">
      <p class="font-semibold text-gray-700">Rawalpindi</p>
      <a href="#" class="text-purple-600 text-sm underline">View Project</a>
    </div>
  </div>
</section>

<!-- Section: Project by Bee Haven International -->
<section>
  <h2 class="text-2xl font-semibold text-gray-800 mb-2">Project by Bee Haven International</h2>
  <p class="text-gray-500 mb-6">Donec porttitor amet dignissim. Nullam in aenean lorem nec dignissim purus.</p>

  <div class="relative">
    <button id="slider-bhi-prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-purple-600 text-white p-2 rounded-full z-10 shadow-md">&#8592;</button>
    
    <div id="slider-bhi" class="flex overflow-x-auto space-x-4 px-8 pb-4 scroll-smooth">
      <div class="min-w-[280px] bg-white rounded-xl shadow-md">
        <img src="https://via.placeholder.com/280x180" alt="House 1" class="w-full h-40 object-cover rounded-t-xl">
        <div class="p-4">
          <p class="font-semibold text-gray-700 mb-1">Rs 1.56 Crore - 2.83 Crore</p>
          <p class="text-sm text-gray-500">5 Marla House</p>
        </div>
      </div>
      <div class="min-w-[280px] bg-white rounded-xl shadow-md">
        <img src="https://via.placeholder.com/280x180" alt="House 2" class="w-full h-40 object-cover rounded-t-xl">
        <div class="p-4">
          <p class="font-semibold text-gray-700 mb-1">Rs 1.56 Crore - 2.83 Crore</p>
          <p class="text-sm text-gray-500">10 Marla House</p>
        </div>
      </div>
      <div class="min-w-[280px] bg-white rounded-xl shadow-md">
        <img src="https://via.placeholder.com/280x180" alt="House 3" class="w-full h-40 object-cover rounded-t-xl">
        <div class="p-4">
          <p class="font-semibold text-gray-700 mb-1">Rs 1.56 Crore - 2.83 Crore</p>
          <p class="text-sm text-gray-500">1 Kanal House</p>
        </div>
      </div>
      <div class="min-w-[280px] bg-white rounded-xl shadow-md">
        <img src="https://via.placeholder.com/280x180" alt="House 4" class="w-full h-40 object-cover rounded-t-xl">
        <div class="p-4">
          <p class="font-semibold text-gray-700 mb-1">Rs 1.56 Crore - 2.83 Crore</p>
          <p class="text-sm text-gray-500">7 Marla House</p>
        </div>
      </div>
    </div>

    <button id="slider-bhi-next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-purple-600 text-white p-2 rounded-full z-10 shadow-md">&#8594;</button>
  </div>
</section>




<!-- Client Reviews Section -->
<section class="bg-gray-50 py-10">
  <div class="max-w-4xl mx-auto text-center">
    <h2 class="text-2xl font-bold mb-4">Client Reviews</h2>
    <div class="relative bg-white px-8 py-10 rounded-lg shadow-md overflow-hidden">
      <div id="review-slider" class="flex transition-transform duration-500 ease-in-out" style="width: 100%;">
        <div class="review-slide min-w-full text-gray-700 italic px-4">
          <div class="flex justify-center mb-4">
            <svg class="w-10 h-10 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
              <path d="M7.17 7.17C5.95 8.39 5 10.1 5 12v1h4v-1c0-1.1.9-2 2-2V7c-1.66 0-3.14.69-4.17 1.17zM17.17 7.17C15.95 8.39 15 10.1 15 12v1h4v-1c0-1.1.9-2 2-2V7c-1.66 0-3.14.69-4.17 1.17z" />
            </svg>
          </div>
          <p class="mb-4">
            As an overseas Pakistani working in Manchester, UK, I was initially worried about managing the construction of my 1 kanal home in Gulberg, Islamabad. However, Bee Haven exceeded my expectations. Their team kept me updated at every stage with virtual updates and transparent communication. This reliability and professionalism made me feel confident in my investment from thousands of miles away. For any overseas Pakistanis, Bee Haven is the most trustworthy partner to build your dream home.
          </p>
          <div class="text-green-600 font-semibold">Mr Shehzad Malik</div>
          <div class="flex justify-center mt-2 text-green-500 space-x-1">
            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
          </div>
        </div>

          <div class="review-slide min-w-full text-gray-700 italic px-4">
          <div class="flex justify-center mb-4">
            <svg class="w-10 h-10 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
              <path d="M7.17 7.17C5.95 8.39 5 10.1 5 12v1h4v-1c0-1.1.9-2 2-2V7c-1.66 0-3.14.69-4.17 1.17zM17.17 7.17C15.95 8.39 15 10.1 15 12v1h4v-1c0-1.1.9-2 2-2V7c-1.66 0-3.14.69-4.17 1.17z" />
            </svg>
          </div>
          <p class="mb-4">
            As an overseas Pakistani working in Manchester, UK, I was initially worried about managing the construction of my 1 kanal home in Gulberg, Islamabad. However, Bee Haven exceeded my expectations. Their team kept me updated at every stage with virtual updates and transparent communication. This reliability and professionalism made me feel confident in my investment from thousands of miles away. For any overseas Pakistanis, Bee Haven is the most trustworthy partner to build your dream home.
          </p>
          <div class="text-green-600 font-semibold">Mr Shehzad Malik</div>
          <div class="flex justify-center mt-2 text-green-500 space-x-1">
            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
          </div>
        </div>

          <div class="review-slide min-w-full text-gray-700 italic px-4">
          <div class="flex justify-center mb-4">
            <svg class="w-10 h-10 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
              <path d="M7.17 7.17C5.95 8.39 5 10.1 5 12v1h4v-1c0-1.1.9-2 2-2V7c-1.66 0-3.14.69-4.17 1.17zM17.17 7.17C15.95 8.39 15 10.1 15 12v1h4v-1c0-1.1.9-2 2-2V7c-1.66 0-3.14.69-4.17 1.17z" />
            </svg>
          </div>
          <p class="mb-4">
            As an overseas Pakistani working in Manchester, UK, I was initially worried about managing the construction of my 1 kanal home in Gulberg, Islamabad. However, Bee Haven exceeded my expectations. Their team kept me updated at every stage with virtual updates and transparent communication. This reliability and professionalism made me feel confident in my investment from thousands of miles away. For any overseas Pakistanis, Bee Haven is the most trustworthy partner to build your dream home.
          </p>
          <div class="text-green-600 font-semibold">Mr Shehzad Malik</div>
          <div class="flex justify-center mt-2 text-green-500 space-x-1">
            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
          </div>
        </div>
        <!-- Add more review-slide divs as needed -->
      </div>
      <div class="flex justify-center mt-6 space-x-4">
        <button id="prev-review" class="text-green-600 hover:text-green-800 text-xl">&#10094;</button>
        <button id="next-review" class="text-green-600 hover:text-green-800 text-xl">&#10095;</button>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="bg-white py-10">
  <div class="max-w-4xl mx-auto">
    <h2 class="text-2xl font-bold text-center mb-6">Frequently Asked Questions</h2>
    <div class="space-y-2" id="faq-container">
      <!-- FAQ Item -->
      <div class="border rounded-lg overflow-hidden">
        <button class="w-full flex justify-between items-center p-4 bg-green-100 hover:bg-green-200 faq-toggle">
          <div class="flex items-center space-x-2">
            <div class="w-6 h-6 bg-green-500 text-white flex items-center justify-center rounded">+</div>
            <span class="font-medium">I already own a plot. Can I still use Bee Haven services?</span>
          </div>
        </button>
        <div class="p-4 bg-gray-50 hidden">
          Yes, absolutely! Bee Haven provides services for clients who already own plots. We can help with design, construction, and more.
        </div>
      </div>
      <!-- Duplicate the FAQ item block as needed -->
    </div>
  </div>
</section>


<div id="custom-slider-wrapper" class="overflow-hidden relative w-full max-w-7xl mx-auto p-4">
  <div id="custom-slider-track" class="flex transition-transform duration-500 ease-in-out space-x-4">
    <!-- Slide 1 -->
    <div class="custom-slide min-w-[300px] bg-white rounded-lg shadow-md overflow-hidden">
      <img src="your-thumbnail1.jpg" alt="Thumbnail 1" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-semibold">New Model House in California</h3>
        <p class="text-sm text-gray-600">Explore this stunning family home...</p>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="custom-slide min-w-[300px] bg-white rounded-lg shadow-md overflow-hidden">
      <img src="your-thumbnail2.jpg" alt="Thumbnail 2" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-semibold">Modern Luxury Home Tour</h3>
        <p class="text-sm text-gray-600">Inside this ultra-modern dream home...</p>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="custom-slide min-w-[300px] bg-white rounded-lg shadow-md overflow-hidden">
      <img src="your-thumbnail3.jpg" alt="Thumbnail 3" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-semibold">Interior Design Showcase</h3>
        <p class="text-sm text-gray-600">Step into this stylish interior space...</p>
      </div>
    </div>  <!-- Slide 1 -->
    <div class="custom-slide min-w-[300px] bg-white rounded-lg shadow-md overflow-hidden">
      <img src="your-thumbnail1.jpg" alt="Thumbnail 1" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-semibold">New Model House in California</h3>
        <p class="text-sm text-gray-600">Explore this stunning family home...</p>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="custom-slide min-w-[300px] bg-white rounded-lg shadow-md overflow-hidden">
      <img src="your-thumbnail2.jpg" alt="Thumbnail 2" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-semibold">Modern Luxury Home Tour</h3>
        <p class="text-sm text-gray-600">Inside this ultra-modern dream home...</p>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="custom-slide min-w-[300px] bg-white rounded-lg shadow-md overflow-hidden">
      <img src="your-thumbnail3.jpg" alt="Thumbnail 3" class="w-full h-48 object-cover">
      <div class="p-4">
        <h3 class="text-lg font-semibold">Interior Design Showcase</h3>
        <p class="text-sm text-gray-600">Step into this stylish interior space...</p>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <div class="absolute inset-y-0 left-0 flex items-center">
    <button id="custom-slider-prev" class="bg-white p-2 shadow rounded-full hover:bg-gray-100">&#8592;</button>
  </div>
  <div class="absolute inset-y-0 right-0 flex items-center">
    <button id="custom-slider-next" class="bg-white p-2 shadow rounded-full hover:bg-gray-100">&#8594;</button>
  </div>
</div>



 


 

 

    @endsection

    @section('scripts')
        <script src="{{ asset('js/slider.js') }}"></script>
    @endsection
