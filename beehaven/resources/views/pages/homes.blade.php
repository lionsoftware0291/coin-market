@extends('layouts.app')

@section('title', 'HOME | Bee Haven PVT LTD')

@section('head')
     {{-- Load Tailwind & custom styles --}}
     
    @vite(['resources/css/homes.css'])
    @vite(['resources/css/about.css'])
    @vite(['resources/css/footer.css'])
        @vite(['resources/css/talk-headoffice-contact.css'])

@endsection

@section('content')
<!-- ===================== HERO SECTION ===================== -->
<!-- ===================== HERO SECTION ===================== -->
  <div class="relative w-full h-screen">
    <!-- Two Column Background -->
    <div class="absolute top-0 left-0 w-full h-full flex">
      <div class="w-1/2 bg-white"></div>
      <div class="w-1/2 bg-cover bg-center" style="background-image: url('{{ asset('assets/img/homes/bg.png') }}');"></div>
    </div>

    <!-- Overlay -->
    <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50"></div>

    <!-- Content -->
    <div class="relative z-10 flex flex-col items-start justify-center h-full px-10 max-w-7xl mx-auto">
      <h1 class="text-4xl font-bold text-white">Your home to find, our <br><span class="font-semibold">comfort achieved</span></h1>
      <p class="text-white mt-4 max-w-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>

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

<!-- ===================== END HERO SECTION ===================== -->




<!-- ===================== END HERO SECTION ===================== -->
@endsection

@section('scripts')
    @vite(['resources/js/welcome.js'])
@endsection
