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
