<x-app-layout>
    <div class="space-y-3 max-w-screen-lg">
        <nav
            class="flex max-w-max gap-x-1 overflow-x-auto mx-auto rounded-xl bg-white p-2 shadow-sm ring-1 ring-gray-950/5 md:flex">
            <a href="{{ route('office.show', ['office' => $office->id]) }}"
                class="fi-tabs-item group flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition duration-75 {{ request()->routeIs('office.show') ? 'bg-gray-50' : 'hover:bg-gray-50' }}"
                aria-selected="aria-selected" role="tab">

                <svg class="fi-tabs-item-icon h-5 w-5 shrink-0 transition duration-75 text-gray-500 group-hover:text-gray-700"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z">
                    </path>
                </svg>

                <span
                    class="fi-tabs-item-label transition duration-75 text-gray-500 group-hover:text-gray-700 group-focus-visible:text-gray-700">
                    View
                </span>
            </a>


            <a href="{{ route('office.edit', ['office' => $office->id]) }}"
                class="fi-tabs-item group flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50 {{ request()->routeIs('office.edit') ? 'bg-gray-50' : '' }}"
                role="tab">
                <svg class="fi-tabs-item-icon h-5 w-5 shrink-0 transition duration-75 {{ request()->routeIs('office.edit') ? 'text-gray-700' : 'group-hover:text-gray-700' }}"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10">
                    </path>
                </svg>
                <span
                    class="fi-tabs-item-label transition duration-75 {{ request()->routeIs('office.edit') ? 'text-gray-700' : '' }} group-hover:text-gray-700 group-focus-visible:text-gray-700">
                    Edit
                </span>
            </a>

            {{-- <a href="{{ route('office.index') }}"
                class="fi-tabs-item group flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50 text-gray-400"
                role="tab">
                <i class="text-base fa-regular fa-rectangle-list group-hover:text-gray-700"></i>
                <span
                    class="fi-tabs-item-label transition duration-75 text-gray-500 group-hover:text-gray-700 group-focus-visible:text-gray-700">
                    List
                </span>
            </a> --}}
        </nav>

        <div class="bg-white border rounded-lg">
            <div class="px-5 py-2.5 border-b">
                <h1 class="text-lg font-bold mt-2 text-neutral-800">Ubah Lokasi Absensi</h1>
            </div>
            <div class="px-5 py-2.5">
                <form action="{{ route('office.update', ['office' => $office->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="grid grid-cols-2 gap-x-5">
                        <div class="mt-2.5">
                            <x-input-label for="name">Nama Lokasi<span class="text-red-500">*</span></x-input-label>
                            <x-text-input name="name" id="name" class="w-full" placeholder="Rumah Fiqri"
                                value="{{ old('name', $office->name) }}"></x-text-input>
                            @error('name', 'edit_office')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-2.5">
                            <x-input-label for="radius">Radius (meter)<span
                                    class="text-red-500">*</span></x-input-label>
                            <x-number-input name="radius" id="radius" class="w-full" placeholder="100"
                                value="{{ old('radius', $office->radius) }}"></x-number-input>
                            @error('radius', 'edit_office')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <x-input-label for="latitude">Latitude<span class="text-red-500">*</span></x-input-label>
                            <x-number-input name="latitude" id="latitude" class="w-full"
                                value="{{ old('latitude', $office->latitude) }}"></x-number-input>
                            @error('latitude', 'edit_office')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <x-input-label for="longitude">Longitude<span class="text-red-500">*</span></x-input-label>
                            <x-number-input name="longitude" id="longitude" class="w-full"
                                value="{{ old('longitude', $office->longitude) }}"></x-number-input>
                            @error('longitude', 'edit_office')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <x-input-label for="clock_in">Jam Masuk<span class="text-red-500">*</span></x-input-label>
                            <x-time-input name="clock_in" id="clock_in"
                                value="{{ old('clock_in', $office->clock_in ? $office->clock_in->format('H:i') : '') }}"></x-time-input>
                            @error('clock_in', 'edit_office')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-6">
                            <x-input-label for="clock_out">Jam Keluar<span class="text-red-500">*</span></x-input-label>
                            <x-time-input name="clock_out" id="clock_out"
                                value="{{ old('clock_out', $office->clock_out ? $office->clock_out->format('H:i') : '') }}"></x-time-input>
                            @error('clock_out', 'edit_office')
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
        let marker;

        map.on('click', function(e) {
            var latitude = e.latlng.lat;
            var longitude = e.latlng.lng;

            document.getElementById("latitude").value = latitude;
            document.getElementById("longitude").value = longitude;

            if (marker) {
                map.removeLayer(marker);
            }

            marker = L.marker([latitude, longitude]).addTo(map)
                .bindPopup("Lokasi dipilih").openPopup();
        });
    </script>


</x-app-layout>
