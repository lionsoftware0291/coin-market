@extends('layouts.app')

@section('title', 'HOME | Bee Haven PVT LTD')

@section('head')
    <link rel="stylesheet" href="{{ asset('resources/css/components/footer.css') }}">

@endsection

@section('content')

<!-- ===================== OUR JOURNEY SECTION ===================== -->
   <section class="bg-green-300 text-gray-900 py-10">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-4xl font-bold mb-4">OUR JOURNEY</h2>
    </div>
  </section>

  <section class="bg-indigo-50 py-10">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">
      
      <!-- Left Content -->
      <div>
        <p class="text-gray-700 mb-6">
          Our story is one of continuous growth and evolution. We started as a small team with big dreams, determined to create a real estate platform that transcended the ordinary. Over the years, we’ve expanded our reach, forged valuable partnerships, and gained the trust of countless clients.
        </p>
        
        <div class="grid grid-cols-3 gap-4">
          <!-- Counter Cards -->
          <div class="bg-green-600 text-white rounded-md p-4 text-center">
            <p class="text-2xl font-bold counter" data-target="200">0</p>
            <p class="text-sm mt-1">Happy Customers</p>
          </div>
          <div class="bg-green-600 text-white rounded-md p-4 text-center">
            <p class="text-2xl font-bold counter" data-target="10">0</p>
            <p class="text-sm mt-1">Properties For Clients</p>
          </div>
          <div class="bg-green-600 text-white rounded-md p-4 text-center">
            <p class="text-2xl font-bold counter" data-target="16">0</p>
            <p class="text-sm mt-1">Years of Experience</p>
          </div>
        </div>
      </div>

      <!-- Right Images -->
      <div class="relative">
        <!-- You can replace these with actual image <img> tags -->
        <div class="absolute top-0 left-10">
          <img src="https://img.icons8.com/3d-fluency/100/house.png" alt="House" class="w-20"/>
        </div>
        <div class="absolute top-20 left-40">
          <img src="https://img.icons8.com/3d-fluency/100/city-buildings.png" alt="Buildings" class="w-20"/>
        </div>
        <div class="absolute top-40 left-20">
          <img src="https://img.icons8.com/3d-fluency/100/office.png" alt="Office" class="w-20"/>
        </div>
        <!-- Footsteps or icons can be added with SVG or images -->
        <div class="h-64 bg-transparent"></div>
      </div>
    </div>
  </section>




<!-- ===================== ABOUT US SECTION ===================== -->
 

<!-- ===================== WHY US SECTION ===================== -->
  <section class="bg-white py-16 px-4 md:px-20">
  <div class="max-w-6xl mx-auto text-center">
    <h2 class="text-4xl font-bold text-gray-900 mb-10">Why Us</h2>
    <div class="grid md:grid-cols-2 gap-12 items-start text-left">
      <!-- Left Column -->
      <div class="space-y-6">
        <p class="text-gray-700">
          Established in [Year of Establishment], <span class="font-semibold">[Your Travel Agency Name]</span> has been dedicated to creating unforgettable travel experiences. Our journey started with a simple idea: to make travel extraordinary. Today, we continue to turn dreams into reality.
        </p>
        <img src="IMAGE_URL_1" alt="Interior view" class="rounded-xl shadow-lg">
      </div>

      <!-- Right Column -->
      <div class="space-y-6">
        <p class="text-gray-700">
          What makes us unique is our unwavering commitment to excellence. We're not just a travel agency; we’re your trusted travel companion. Discover the reasons why travelers like you choose us for their adventures.
        </p>
        <img src="IMAGE_URL_2" alt="House view" class="rounded-xl shadow-lg">
      </div>
    </div>
  </div>
</section>
<!-- ===================== CONTACT SECTION ===================== -->
 @include('components.talk-headoffice-contact')




@endsection

@section('scripts')
 
@endsection
