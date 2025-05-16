@extends('layouts.app')

@section('title', 'HOME | Bee Haven PVT LTD')

@section('head')
     {{-- Load Tailwind & custom styles --}}
    @vite(['resources/css/welcome.css'])
    @vite(['resources/css/footer.css'])
@endsection

@section('content')

<!-- ===================== HERO SECTION ===================== -->
<section class="hero" style="background-image: url('{{ asset('assets/img/home_page/hello_section/bg_one.png') }}');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1>Find a perfect home you love.</h1>
        <p>
            Etiam eget elementum elit. Aenean dignissim dapibus vestibulum. <br>
            Integer a dolor eu sapien sodales vulputate ac in purus.
        </p>

        <div class="nav-buttons flex justify-center gap-4 mb-6 mt-4">
            <button class="primary">HOME</button>
            <button>APARTMENTS</button>
            <button class="primary">PLOTS</button>
        </div>

        <!-- ===================== FILTER SECTION ===================== -->
        <div class="container mx-auto">
            <div class="grid grid-cols-12 justify-center">
                <div class="col-span-12 md:col-span-10 md:col-start-2">
                    <div class="filter-box">
                        <div class="grid grid-cols-1 md:grid-cols-12 gap-4 mb-4">
                            <div class="filter-item md:col-span-3">
                                <label>CITY</label>
                                <select class="w-full">
                                    <option>Islamabad</option>
                                </select>
                            </div>
                            <div class="filter-item md:col-span-7">
                                <label>LOCATION</label>
                                <input type="text" placeholder="Enter location" class="w-full" />
                            </div>
                            <div class="filter-item md:col-span-2">
                                <label>FIND</label>
                                <button class="w-full">Search</button>
                            </div>
                        </div>

                        <div class="filter-options text-sm text-gray-700 space-x-2">
                            <span class="cursor-pointer font-medium">▼ More Options</span>
                            <span>|</span>
                            <a href="#">Change Currency</a>
                            <span>|</span>
                            <a href="#">Change Area Unit</a>
                            <span>|</span>
                            <a href="#">Reset Search</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===================== END FILTER SECTION ===================== -->
    </div>
</section>
<!-- ===================== END HERO SECTION ===================== -->

 <!-- ===================== PROJECT CATEGORY SLIDER SECTION ===================== -->
<section class="project-category-slider">
    <button class="arrow-button left" onclick="scrollSlider(-1)">&#8592;</button>
    <div class="slider-wrapper" id="slider">
        <div class="slider-card">
            <div class="icon">🏢</div>
            <h3>Apartments</h3>
            <p>320 Projects</p>
        </div>
        <div class="slider-card">
            <div class="icon">🏠</div>
            <h3>Houses</h3>
            <p>210 Projects</p>
        </div>
        <div class="slider-card">
            <div class="icon">🏗️</div>
            <h3>Construction</h3>
            <p>185 Projects</p>
        </div>
        <div class="slider-card">
            <div class="icon">🌆</div>
            <h3>Commercial</h3>
            <p>95 Projects</p>
        </div>
        <div class="slider-card">
            <div class="icon">🌳</div>
            <h3>Plots</h3>
            <p>150 Projects</p>
        </div>
        <div class="slider-card">
            <div class="icon">🏬</div>
            <h3>Retail Spaces</h3>
            <p>72 Projects</p>
        </div>
        <div class="slider-card">
            <div class="icon">🏖️</div>
            <h3>Resorts</h3>
            <p>40 Projects</p>
        </div>
    </div>
    <button class="arrow-button right" onclick="scrollSlider(1)">&#8594;</button>
</section>
<!-- ===================== END PROJECT CATEGORY SLIDER SECTION ===================== -->


 





<!-- === CHECKOUT NEW PROJECTS SECTION === -->
<section class="checkout-new-project">
  <div class="section-header">
    <h5>CHECKOUT OUR NEW</h5>
    <h2><b>Discover New Projects</b></h2>
    <p>Donec porttitor euismod dignissim. Nullam a lacinia ipsum, nec dignissim purus.</p>
  </div>

  <div class="filter-header">
    <!-- Tabs for All, Sell, and Buy -->
    <div class="tabs">
      <button class="tab-btn active" data-tab="all">All</button>
      <button class="tab-btn" data-tab="sell">Sell</button>
      <button class="tab-btn" data-tab="buy">Buy</button>
    </div>
    <!-- Slider controls with left and right buttons -->
    <div class="slider-controls">
      <button class="slider-btn prev">&#8592;</button>
      <button class="slider-btn next">&#8594;</button>
    </div>
  </div>

  <!-- Tab Contents -->
  <div class="tab-content active" id="tab-all">
    <div class="projects-slider">
          <!-- Card 1 -->
    <div class="project-card">
      <div class="project-image">
        <img src="{{ asset('assets/img/projects_section/project_one.png') }}" alt="project_one">
      </div>
      <div class="project-header">
        <span class="project-tag popular">Popular</span>
        <div class="project-price">$5,970</div>
        <div class="project-title">Tranquil Haven in the Woods</div>
        <div class="project-address">IDS Wright Court, Burien, WA 88108</div>
      </div>
      <div class="project-details">
        <div class="detail-item"><span>🛏️</span> 4 Beds</div>
        <div class="detail-item"><span>🛁</span> 3 Baths</div>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="project-card">
      <div class="project-image">
        <img src="{{ asset('assets/img/projects_section/project_two.png') }}" alt="project_two">
      </div>
      <div class="project-header">
        <span class="project-tag new-listing">New Listing</span>
        <div class="project-price">$1,970</div>
        <div class="project-title">Serene Retreat by the Lake</div>
        <div class="project-address">ISRA Jehovah Drive, VA 22408</div>
      </div>
      <div class="project-details">
        <div class="detail-item"><span>🛏️</span> 3 Beds</div>
        <div class="detail-item"><span>🛁</span> 2 Baths</div>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="project-card">
      <div class="project-image">
        <img src="{{ asset('assets/img/projects_section/project_three.png') }}" alt="project_three">
      </div>
      <div class="project-header">
        <span class="project-tag all">All</span>
        <div class="project-price">$3,450</div>
        <div class="project-title">Charming Cottage in the Meadow</div>
        <div class="project-address">Centennial Farm Road, Herlen 51837</div>
      </div>
      <div class="project-details">
        <div class="detail-item"><span>🛏️</span> 4 Beds</div>
        <div class="detail-item"><span>🛁</span> 4 Baths</div>
      </div>
    </div>

    <!-- Card 4 -->
    <div class="project-card">
      <div class="project-image">
        <img src="{{ asset('assets/img/projects_section/project_four.jpg') }}" alt="project_four">
      </div>
      <div class="project-header">
        <span class="project-tag buy">Buy</span>
        <div class="project-price">$2,389</div>
        <div class="project-title">Grand Estate on I</div>
        <div class="project-address">Wright Court, Burien</div>
      </div>
      <div class="project-details">
        <div class="detail-item"><span>🛏️</span> 4 Beds</div>
        <div class="detail-item"><span>🛁</span> 3 Baths</div>
      </div>
    </div>  
    
    <!-- Card 5 -->
    <div class="project-card">
      <div class="project-image">
        <img src="{{ asset('assets/img/projects_section/project_one.png') }}" alt="project_four">
      </div>
      <div class="project-header">
        <span class="project-tag buy">Buy</span>
        <div class="project-price">$2,389</div>
        <div class="project-title">Grand Estate on I</div>
        <div class="project-address">Wright Court, Burien</div>
      </div>
      <div class="project-details">
        <div class="detail-item"><span>🛏️</span> 4 Beds</div>
        <div class="detail-item"><span>🛁</span> 3 Baths</div>
      </div>
    </div>
    </div>
  </div>
  <div class="tab-content" id="tab-sell">
    <div class="projects-slider">
      <!-- Sell Tab Cards -->
    </div>
  </div>
  <div class="tab-content" id="tab-buy">
    <div class="projects-slider">
      <!-- Buy Tab Cards -->
    </div>
  </div>
</section>


 

  


   <!-- ===================== beehaven-project and project-by-city start ===================== -->
  <!-- Browse by City -->
  <section class="project-by-city">
    <h2>Browse Project by City</h2>
    <p>Donec porttitor euismod dignissim. Nullam a lacinia ipsum, nec dignissim purus.</p>
    <div class="city-grid">
      <div class="card">
        <div class="city-title">Islamabad</div>
        <div>907 Projects</div>
        <div class="btn-view">View Project →</div>
      </div>
      <div class="card">
        <div class="city-title">Lahore</div>
        <div>654 Projects</div>
        <div class="btn-view">View Project →</div>
      </div>
      <div class="card">
        <div class="city-title">Karachi</div>
        <div>509 Projects</div>
        <div class="btn-view">View Project →</div>
      </div>
      <div class="card">
        <div class="city-title">Rawalpindi</div>
        <div>320 Projects</div>
        <div class="btn-view">View Project →</div>
      </div>
    </div>
  </section>

  <!-- Project Slider Section -->
  <section class="beehaven-project" id="beehavenSliderSection">
    <h2>Projects by Bee Haven International</h2>
    <p>Donec porttitor euismod dignissim. Nullam a lacinia ipsum, nec dignissim purus.</p>
    <div class="slider-container">
      <button class="slider-button prev" onclick="scrollSlider('beehavenSliderSection', -1)">&#8592;</button>
      <div class="project-slider-track">
           <div class="card">
          <img src="{{ asset('assets/img/projects_by_bee_haven_international/house_one.png') }}" alt="House 1">
          <div class="project-title">PKR 1.56 Crore – 2.93 Crore</div>
          <div>Haven House</div>
          <small>Location: Lahore</small>
        </div>
        <div class="card">
          <img src="{{ asset('assets/img/projects_by_bee_haven_international/house_two.png') }}" alt="House 2">
          <div class="project-title">PKR 1.56 Crore – 2.93 Crore</div>
          <div>Haven House</div>
          <small>Location: Lahore</small>
        </div>
        <div class="card">
          <img src="{{ asset('assets/img/projects_by_bee_haven_international/house_three.png') }}" alt="House 3">
          <div class="project-title">PKR 1.56 Crore – 2.93 Crore</div>
          <div>Haven House</div>
          <small>Location: Lahore</small>
        </div>
        <div class="card">
          <img src="{{ asset('assets/img/projects_by_bee_haven_international/house_four.png') }}" alt="House 4">
          <div class="project-title">PKR 1.56 Crore – 2.93 Crore</div>
          <div>Haven House</div>
          <small>Location: Lahore</small>
        </div>
        <div class="card">
          <img src="{{ asset('assets/img/projects_by_bee_haven_international/house_one.png') }}" alt="House 4">
          <div class="project-title">PKR 1.56 Crore – 2.93 Crore</div>
          <div>Haven House</div>
          <small>Location: Lahore</small>
        </div>
        <div class="card">
          <img src="{{ asset('assets/img/projects_by_bee_haven_international/house_three.png') }}" alt="House 4">
          <div class="project-title">PKR 1.56 Crore – 2.93 Crore</div>
          <div>Haven House</div>
          <small>Location: Lahore</small>
        </div>
      </div>
      <button class="slider-button next" onclick="scrollSlider('beehavenSliderSection', 1)">&#8594;</button>
    </div>
  </section>

  <!-- ===================== beehaven-project and project-by-city end ===================== -->







 

 

<!-- ===================== Client Reviews Sart ===================== -->

  <section class="client-reviews-slider-section">
    <h2>Client Reviews</h2>
    <div class="slider">
      <div class="slides-wrapper" id="slides-wrapper">
        <div class="slide">
          <p>As an overseas Pakistani working in Manchester, UK, I was initially worried about managing the construction of my 1 Kanal home in Gulberg Residencia, Islamabad. However, Bee Haven exceeded my expectations: Their team kept me updated at every stage with virtual updates and transparent communication. Their reliability and professionalism made me feel confident in my investment from thousands of miles away. For any overseas Pakistani, Bee Haven is the most trustworthy partner to build your dream home.</p>
          <div class="client-name">Mr Shehzad Malik</div>
        </div>
        <div class="slide">
          <p>This is another review example. Everything went smoothly and the communication was top-notch. Highly recommend Bee Haven!</p>
          <div class="client-name">Ms Ayesha Khan</div>
        </div>
        <div class="slide">
          <p>Great experience from start to finish. Bee Haven was professional, responsive, and delivered quality results.</p>
          <div class="client-name">Mr Imran Shah</div>
        </div>
        <div class="slide">
          <p>The entire team is amazing! Very satisfied with the service and attention to detail.</p>
          <div class="client-name">Mrs Saira Malik</div>
        </div>
      </div>
    </div>
    <div class="slider-controls">
      <button onclick="prevSlide()">‹</button>
      <button onclick="nextSlide()">›</button>
    </div>
    <div class="dots">
      <span class="dot active"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
  </section>
  <!-- ===================== Client Reviews end ===================== -->


<!-- ===================== faq-section Sart ===================== -->
  <section class="faq-section">
    <h2>Frequently Asked Questions</h2>
    <div class="faq-item"><span>+</span>I already own a plot. Can I still use Bee Haven services?</div>
    <div class="faq-item"><span>+</span>I already own a plot. Can I still use Bee Haven services?</div>
    <div class="faq-item"><span>+</span>I already own a plot. Can I still use Bee Haven services?</div>
    <div class="faq-item"><span>+</span>I already own a plot. Can I still use Bee Haven services?</div>
    <div class="faq-item"><span>+</span>I already own a plot. Can I still use Bee Haven services?</div>
    <div class="faq-item"><span>+</span>I already own a plot. Can I still use Bee Haven services?</div>
    <div class="faq-item"><span>+</span>I already own a plot. Can I still use Bee Haven services?</div>
    <div class="faq-item"><span>+</span>I already own a plot. Can I still use Bee Haven services?</div>
    <div class="faq-item"><span>+</span>I already own a plot. Can I still use Bee Haven services?</div>
  </section>
 
<!-- ===================== faq-section end ===================== -->








<!-- ===================== Explore Stunning Houses Sart ===================== -->
<section id="youtube-explore-houses" style="padding: 40px; ">
  <h2 style="text-align: center; font-size: 2em; margin-bottom: 20px;">Explore Stunning Houses</h2>
  <p style="text-align: center; max-width: 700px; margin: 0 auto 40px; font-size: 1.1em; color: #555;">
    Discover beautiful houses from around the world. From modern minimalism to classic charm, these video tours showcase exceptional design and architecture.
  </p>

  <div class="slider-container" style="max-width: 1000px; margin: 0 auto; overflow: hidden; position: relative;">
    
    <!-- Left Button -->
    <button onclick="moveSlide(-1)" style="position: absolute; top: 50%; left: 0px; transform: translateY(-50%);
      background-color: #4CAF50; border: none; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;
      border-radius: 4px; cursor: pointer; z-index: 1;">
      <svg fill="white" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
      </svg>
    </button>

    <!-- Right Button -->
    <button onclick="moveSlide(1)" style="position: absolute; top: 50%; right: 0px; transform: translateY(-50%);
      background-color: #4CAF50; border: none; width: 40px; height: 40px; display: flex; justify-content: center; align-items: center;
      border-radius: 4px; cursor: pointer; z-index: 1;">
      <svg fill="white" height="20" viewBox="0 0 24 24" width="20" xmlns="http://www.w3.org/2000/svg">
        <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6z"/>
      </svg>
    </button>

    <div class="slider-track" id="slider-track" style="display: flex; transition: transform 0.5s ease;">

      <!-- Slide 1 -->
      <div class="video-slide" style="flex: 0 0 33.3333%; padding: 10px; box-sizing: border-box; position: relative;">
        <a href="https://www.youtube.com/watch?v=VIDEO_ID_1" target="_blank" style="display: block; position: relative;">
          <img src="{{ asset('assets/img/youtube_tumbnail/thumbnail_one.png') }}" alt="House Tour 1" style="width: 100%; border-radius: 8px;">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/YouTube_social_white_squircle_%282017%29.svg"
               alt="Play Icon"
               style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60px; height: 60px; opacity: 0.9;">
        </a>
      </div>

      <!-- Slide 2 -->
      <div class="video-slide" style="flex: 0 0 33.3333%; padding: 10px; box-sizing: border-box; position: relative;">
        <a href="https://www.youtube.com/watch?v=VIDEO_ID_2" target="_blank" style="display: block; position: relative;">
          <img src="{{ asset('assets/img/youtube_tumbnail/thumbnail_two.png') }}" alt="House Tour 2" style="width: 100%; border-radius: 8px;">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/YouTube_social_white_squircle_%282017%29.svg"
               alt="Play Icon"
               style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60px; height: 60px; opacity: 0.9;">
        </a>
      </div>

      <!-- Slide 3 -->
      <div class="video-slide" style="flex: 0 0 33.3333%; padding: 10px; box-sizing: border-box; position: relative;">
        <a href="https://www.youtube.com/watch?v=VIDEO_ID_3" target="_blank" style="display: block; position: relative;">
          <img src="{{ asset('assets/img/youtube_tumbnail/thumbnail_three.png') }}" alt="House Tour 3" style="width: 100%; border-radius: 8px;">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/YouTube_social_white_squircle_%282017%29.svg"
               alt="Play Icon"
               style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60px; height: 60px; opacity: 0.9;">
        </a>
      </div>   <div class="video-slide" style="flex: 0 0 33.3333%; padding: 10px; box-sizing: border-box; position: relative;">
        <a href="https://www.youtube.com/watch?v=VIDEO_ID_3" target="_blank" style="display: block; position: relative;">
          <img src="{{ asset('assets/img/youtube_tumbnail/thumbnail_one.png') }}" alt="House Tour 3" style="width: 100%; border-radius: 8px;">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/YouTube_social_white_squircle_%282017%29.svg"
               alt="Play Icon"
               style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60px; height: 60px; opacity: 0.9;">
        </a>
      </div>   <div class="video-slide" style="flex: 0 0 33.3333%; padding: 10px; box-sizing: border-box; position: relative;">
        <a href="https://www.youtube.com/watch?v=VIDEO_ID_3" target="_blank" style="display: block; position: relative;">
          <img src="{{ asset('assets/img/youtube_tumbnail/thumbnail_two.png') }}" alt="House Tour 3" style="width: 100%; border-radius: 8px;">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/YouTube_social_white_squircle_%282017%29.svg"
               alt="Play Icon"
               style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60px; height: 60px; opacity: 0.9;">
        </a>
      </div>   <div class="video-slide" style="flex: 0 0 33.3333%; padding: 10px; box-sizing: border-box; position: relative;">
        <a href="https://www.youtube.com/watch?v=VIDEO_ID_3" target="_blank" style="display: block; position: relative;">
          <img src="{{ asset('assets/img/youtube_tumbnail/thumbnail_three.png') }}" alt="House Tour 3" style="width: 100%; border-radius: 8px;">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/YouTube_social_white_squircle_%282017%29.svg"
               alt="Play Icon"
               style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 60px; height: 60px; opacity: 0.9;">
        </a>
      </div>

      <!-- More slides can be added here -->

    </div>
  </div>

 
</section>
<!-- ===================== Explore Stunning Houses End ===================== -->


@endsection

@section('scripts')
    @vite(['resources/js/welcome.js'])
@endsection
