<div class="container mx-auto px-6 md:px-12 py-10">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- User Profile Card -->

        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="flex items-center space-x-4">
                <img class="w-16 h-16 rounded-full" src="{{ asset('storage/images/' . Auth::user()->image) }}"
                    alt="User Avatar">
                <div>
                    <h2 class="text-xl font-bold text-gray-800">{{ Auth::user()->name }}</h2>
                    <p class="text-gray-600">{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>

        <!-- Recent Projects Card -->
        <div class="col-span-2 bg-white shadow-md rounded-lg p-6">
            <h3 class="text-lg font-bold text-gray-800 mb-4">Recent Projects</h3>
            <div class="space-y-4">
                <!-- Project Item -->
                <div class="flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow-sm">
                    <div>
                        <h4 class="text-md font-bold text-gray-700">Project Title 1</h4>
                        <p class="text-sm text-gray-600">Description of the project.</p>
                    </div>
                    <div>
                        <span class="text-sm text-gray-500">Due: 2024-07-15</span>
                    </div>
                </div>

                <!-- Project Item -->
                <div class="flex justify-between items-center bg-gray-50 p-4 rounded-lg shadow-sm">
                    <div>
                        <h4 class="text-md font-bold text-gray-700">Project Title 2</h4>
                        <p class="text-sm text-gray-600">Description of the project.</p>
                    </div>
                    <div>
                        <span class="text-sm text-gray-500">Due: 2024-08-01</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings and Statistics -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
        <!-- Earnings Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-lg font-bold text-gray-800 mb-4">Earnings</h3>
            <div class="text-2xl font-bold text-gray-700">$12,345</div>
            <p class="text-sm text-gray-500">Total earnings</p>
        </div>

        <!-- Statistics Card -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-lg font-bold text-gray-800 mb-4">Statistics</h3>
            <div class="grid grid-cols-2 gap-4">
                <div class="text-center">
                    <div class="text-2xl font-bold text-gray-700">45</div>
                    <p class="text-sm text-gray-500">Completed Projects</p>
                </div>
                <div class="text-center">
                    <div class="text-2xl font-bold text-gray-700">10</div>
                    <p class="text-sm text-gray-500">Ongoing Projects</p>
                </div>
            </div>
        </div>
    </div>
</div>
