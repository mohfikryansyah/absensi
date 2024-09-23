<x-app-layout>
    <div class="space-y-4 max-w-screen-lg">
        <div class="bg-white p-3 rounded-lg border">
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                        href="#">
                        Home
                    </a>
                    <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600"
                        href="#">
                        App Center
                        <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                </li>
                <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
                    Application
                </li>
            </ol>
        </div>


        <div class="bg-white border rounded-lg">
            <div class="px-5 py-2.5 border-b">
                <h1 class="text-2xl font-bold mt-2 text-neutral-800">Create Location</h1>
            </div>
            <div class="px-5 py-2.5">
                <form action="{{ route('office.store') }}" method="post">
                    @csrf
                    <div class="grid grid-cols-2 gap-x-5">
                        <div class="mt-2.5">
                            <x-input-label for="name">Nama Lokasi<span class="text-red-500">*</span></x-input-label>
                            <x-text-input name="name" id="name" class="w-full"
                                placeholder="Rumah Fiqri"></x-text-input>
                                @error('name', 'add_office')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-2.5">
                            <x-input-label for="radius">Radius (meter)<span
                                    class="text-red-500">*</span></x-input-label>
                            <x-number-input name="radius" id="radius" class="w-full"
                                placeholder="100"></x-number-input>
                                @error('radius', 'add_office')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <x-input-label for="latitude">Latitude<span class="text-red-500">*</span></x-input-label>
                            <x-number-input name="latitude" id="latitude" class="w-full"></x-number-input>
                            @error('latitude', 'add_office')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <x-input-label for="longitude">Longitude<span class="text-red-500">*</span></x-input-label>
                            <x-number-input name="longitude" id="longitude" class="w-full"></x-number-input>
                            @error('longitude', 'add_office')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <x-input-label for="clock_in">Jam Masuk<span class="text-red-500">*</span></x-input-label>
                            <x-time-input name="clock_in" id="clock_in"></x-time-input>
                            @error('clock_in', 'add_office')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <x-input-label for="clock_out">Jam Keluar<span class="text-red-500">*</span></x-input-label>
                            <x-time-input name="clock_out" id="clock_out"></x-time-input>
                            @error('clock_out', 'add_office')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-6 mb-4">
                        <x-primary-button>Submit</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <div class="max-w-screen-lg mt-4">
        <div id="map" class="rounded-lg" style="height: 500px;"></div>
    </div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Inisialisasi peta
        var map = L.map('map').setView([0.5473480901606731, 123.02029314477734],
            13); // Ganti latitude_default dan longitude_default dengan koordinat default

        // Tambahkan layer tile dari OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            // attribution: '© OpenStreetMap'
        }).addTo(map);
    </script>
    <script>
        // Event listener untuk klik pada peta
        map.on('click', function(e) {
            var latitude = e.latlng.lat;
            var longitude = e.latlng.lng;

            document.getElementById("latitude").value = latitude;
            document.getElementById("longitude").value = longitude;

            // Anda juga bisa memunculkan marker di lokasi yang diklik
            L.marker([latitude, longitude]).addTo(map)
                .bindPopup("Lokasi dipilih").openPopup();
        });
    </script>

</x-app-layout>
