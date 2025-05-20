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
