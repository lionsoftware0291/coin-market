<!-- Responsive Header -->
<header class="text-white font-inter">
    <!-- Top Bar -->
    <div class="bg-[#03A63C] flex justify-between items-center px-4 py-2 text-sm border-b border-gray-700 flex-wrap">
        <div class="flex flex-wrap gap-4">
            <a href="#" class="hover:text-indigo-300 font-medium">Home Loan Calculator</a>
            <a href="#" class="hover:text-indigo-300 font-medium">Construction Cost Calculator</a>
            <a href="#" class="hover:text-indigo-300 font-medium">Add Property</a>
        </div>
        <div>
            <a href="#" class="hover:text-indigo-300 font-medium">🔒 Login/Register</a>
        </div>
    </div>

    <!-- Bottom Navigation -->
    <nav class="bg-white text-black shadow-md px-4 flex justify-between items-center flex-wrap">
        <div class="flex items-center gap-4">
            <img src="{{ asset('assets/img/company_logo/logo_eight.jpg') }}" alt="Logo"
                class="w-16 h-auto contrast-125" />
        </div>

        <!-- Hamburger Menu Button (Mobile) -->
        <button id="menu-toggle" class="md:hidden text-black focus:outline-none">
            ☰
        </button>

        <!-- Nav Menu -->
        <div id="mobile-menu"
            class="w-full md:w-auto md:flex hidden flex-col md:flex-row md:items-center md:gap-6 mt-3 md:mt-0">
            <ul class="flex flex-col md:flex-row gap-3 md:gap-6 text-sm font-medium">
                <li>
                    <a href="index.html" aria-current="page"
                        class="nav-link px-4 py-2 rounded-full hover:bg-[#02a23a] hover:text-white">
                        Home
                    </a>
                </li>
                <li>
                    <a href="about.html" class="nav-link px-4 py-2 rounded-full hover:bg-[#02a23a] hover:text-white">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="apartment.html"
                        class="nav-link px-4 py-2 rounded-full hover:bg-[#02a23a] hover:text-white">
                        Apartment
                    </a>
                </li>
                <li>
                    <a href="plot.html" class="nav-link px-4 py-2 rounded-full hover:bg-[#02a23a] hover:text-white">
                        Plot
                    </a>
                </li>
                <li>
                    <a href="farmhouse.html"
                        class="nav-link px-4 py-2 rounded-full hover:bg-[#02a23a] hover:text-white">
                        Farm House
                    </a>
                </li>
                <li>
                    <a href="new-project.html"
                        class="nav-link px-4 py-2 rounded-full hover:bg-[#02a23a] hover:text-white">
                        New Project
                    </a>
                </li>
            </ul>

            <div class="mt-2 md:mt-0 md:ml-6">
                <a href="booking-form.html" class="nav-link px-4 py-2 rounded-full hover:bg-[#02a23a] hover:text-white">
                    Booking Form
                </a>
            </div>

        </div>
    </nav>

</header>

<!-- Mobile Menu Script -->
<script>
    document.getElementById("menu-toggle").addEventListener("click", function() {
        const menu = document.getElementById("mobile-menu");
        menu.classList.toggle("hidden");
    });
</script>


<!-- Optional Font and Reset -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');

    body {
        font-family: 'Inter', sans-serif;
        font-size: 16px;
    }
</style>
