@extends('layouts.app')

@section('title', 'HOME | Bee Haven PVT LTD')

@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/welcome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
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

<!-- ===================== CUSTOM SLIDER SECTION ===================== -->
<section class="custom-slider">
    <button class="arrow-button left" onclick="scrollSlider(-1)">&#8592;</button>
    <div class="slider-wrapper" id="slider">
        @foreach(['Flats', 'Plots', 'Apartments', 'Houses', 'Construction'] as $type)
            @for ($i = 0; $i < 2; $i++)
                <div class="slider-card">
                    <div class="icon">🏢</div>
                    <h3>{{ $type }}</h3>
                    <p>509 Projects</p>
                </div>
            @endfor
        @endforeach
    </div>
    <button class="arrow-button right" onclick="scrollSlider(1)">&#8594;</button>
</section>
<!-- ===================== END CUSTOM SLIDER SECTION ===================== -->

<!-- ===================== PROJECTS SECTION ===================== -->
<section id="projects">
    <h1>CHECKOUT OUR NEW</h1>
    <div class="projects-section">
        <h2>Discover New Projects</h2>
        <p>Donec portitor euismod dignissim. Nullam a locinta ipsum, nec dignissim purus.</p>
        <div class="projects-container">
            @foreach([
                ['Popular', '$ 5,970', 'Tranquil Haven in the Woods', 'IDS Wright CourtBurien, WA 88108', 4, 3],
                ['New Listing', '$ 1,970', 'Serene Retreat by the Lake', 'ISRA Jehovah Drive, VA 22408', 3, 2],
                ['All', '$ 3,450', 'Charming Cottage in the Meadow', 'ISDS Centennial Farm RoadHerlen, 51837', 4, 4],
                ['Buy', '$ 2,389', 'Grand Estate on I', 'IDS Wright CourtBurie', 4, 3]
            ] as [$tag, $price, $title, $address, $beds, $baths])
                <div class="project-card">
                    <div class="project-header">
                        <span class="project-tag {{ strtolower(str_replace(' ', '-', $tag)) }}">{{ $tag }}</span>
                        <div class="project-price">{{ $price }}</div>
                        <div class="project-title">{{ $title }}</div>
                        <div class="project-address">{{ $address }}</div>
                    </div>
                    <div class="project-details">
                        <div class="detail-item"><span>💬</span> {{ $beds }} Beds</div>
                        <div class="detail-item"><span>💬</span> {{ $baths }} Bath</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- ===================== CITY BROWSING SECTION ===================== -->
    <section id="projects">
    <div class="cities-section">
        <h2>Browse Project by City</h2>
        <p>Donec portitor euismod dignissim. Nullam a locinta ipsum, nec dignissim purus.</p>
        <div class="cities-container">
            @foreach(['Islamabad', 'Lahore', 'Karachi', 'Rawalpindi'] as $city)
                <div class="city-card">
                    <div class="city-name">{{ $city }}</div>
                    <div class="project-count">508 Projects</div>
                </div>
            @endforeach
            <div class="alien-project">Alien Project</div>
        </div>
    </div>
    <!-- ===================== END CITY BROWSING SECTION ===================== -->

    <!-- ===================== DEVELOPER SECTION ===================== -->
    <div class="developer-section">
        <h2>Project by Bee Haven International</h2>
        <p>Donec portitor euismod dignissim. Nullam a locinta ipsum, nec dignissim purus.</p>
    </div>
    <!-- ===================== END DEVELOPER SECTION ===================== -->
</section>
<!-- ===================== END PROJECTS SECTION ===================== -->

@endsection

@section('scripts')
    <script src="{{ asset('assets/js/welcome.js') }}"></script>
@endsection
