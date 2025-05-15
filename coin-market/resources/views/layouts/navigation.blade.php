<!-- Responsive Header -->
<header class="text-white font-inter">
<!-- Top Bar -->
<div class="bg-[#03A63C] flex justify-between items-center px-4 py-2 text-sm border-b border-gray-700 flex-wrap text-white">

  <!-- Left Menu Links -->
  <div class="flex flex-wrap gap-4 items-center">
    <a href="#" class="hover:text-indigo-200 font-medium">Home Loan Calculator</a>
    <a href="#" class="hover:text-indigo-200 font-medium">Construction Cost Calculator</a>
    <a href="#" class="hover:text-indigo-200 font-medium">Add Property</a>
  </div>

  <!-- Right Icons -->
 <div class="flex items-center gap-4 mt-2 sm:mt-0">

  <!-- Login/Register -->
  <button onclick="openModal('loginModal')" class="flex items-center gap-1 hover:text-indigo-200 font-medium">
    🔒 Login/Register
  </button>

<!-- Language Switcher -->
<button id="langSwitcher" onclick="switchLanguage()" class="hover:text-indigo-200 text-lg font-medium">
  اردو
</button>

<script>
  const langElement = document.getElementById("langSwitcher");
  let currentLang = 'ur';

  function switchLanguage() {
    if (currentLang === 'ur') {
      alert("Switched to English");
      currentLang = 'en';
      langElement.textContent = 'EN';
      // Optional: document.body.dir = 'ltr'; or reload English content
    } else {
      alert("زبان اردو میں تبدیل ہوگئی۔");
      currentLang = 'ur';
      langElement.textContent = 'اردو';
      // Optional: document.body.dir = 'rtl'; or reload Urdu content
    }
  }
</script>



  <!-- Country Flag -->
  <button onclick="switchLocale()" class="hover:text-indigo-200 text-lg">🇵🇰</button>

  <!-- Settings Icon -->
  <button onclick="openModal('settingsModal')" class="hover:text-indigo-200 text-lg">⚙️</button>

  <!-- Profile/User Icon -->
  <button onclick="showProfile()" class="hover:text-indigo-200 text-lg">👤</button>

</div>

  <!-- Login/Register Modal -->
<div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white p-6 rounded-lg w-80 text-black relative">
    <h2 class="text-xl font-semibold mb-4">Login / Register</h2>
    <input type="text" placeholder="Email or Username" class="border p-2 mb-2 w-full" />
    <input type="password" placeholder="Password" class="border p-2 mb-2 w-full" />
    <button class="bg-green-600 text-white px-4 py-2 w-full rounded">Login</button>
    <p class="text-xs text-center mt-3">Don’t have an account? <a href="#" class="text-blue-500">Register</a></p>
    <button onclick="closeModal('loginModal')" class="absolute top-2 right-3 text-red-500">✖</button>
  </div>
</div>


<script>
  function switchLocale() {
    alert("Language switcher clicked (Implement Urdu/English switch logic here).");
  }
</script>
<!-- Settings Modal -->
<div id="settingsModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white p-6 rounded-lg w-80 text-black relative">
    <h2 class="text-xl font-semibold mb-4">Settings</h2>
    <label class="block mb-2">Theme:</label>
    <select class="border p-2 w-full mb-4">
      <option>Light</option>
      <option>Dark</option>
    </select>
    <label class="block mb-2">Notifications:</label>
    <input type="checkbox" /> Enable email alerts
    <button class="bg-green-600 text-white px-4 py-2 w-full mt-4 rounded">Save Settings</button>
    <button onclick="closeModal('settingsModal')" class="absolute top-2 right-3 text-red-500">✖</button>
  </div>
</div>
<script>
  function showProfile() {
    alert("User profile clicked (can open profile page or dropdown).");
  }
</script>
<script>
  function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
  }

  function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
  }
</script>

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
        <a href="{{ route('homes') }}"
            class="nav-link px-4 py-2 rounded-full hover:bg-[#02a23a] hover:text-white">
            Homes
        </a>
    </li>
    <li>
        <a href="{{ route('about') }}"
            class="nav-link px-4 py-2 rounded-full hover:bg-[#02a23a] hover:text-white">
            About Us
        </a>
    </li>
    <li>
        <a href="{{ route('apartments') }}"
            class="nav-link px-4 py-2 rounded-full hover:bg-[#02a23a] hover:text-white">
            Apartments
        </a>
    </li>
    <li>
        <a href="{{ route('plots') }}"
            class="nav-link px-4 py-2 rounded-full hover:bg-[#02a23a] hover:text-white">
            Plot
        </a>
    </li>
    <li>
        <a href="{{ route('farmHouses') }}"
            class="nav-link px-4 py-2 rounded-full hover:bg-[#02a23a] hover:text-white">
            Farm House
        </a>
    </li>
    <li>
        <a href="{{ route('newProjects') }}"
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
