<x-app-layout>

    <div class="bg-white p-3 lg:mb-5 mb-0 rounded-lg border max-w-screen-lg lg:block hidden">
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
                    <svg class="shrink-0 mx-2 size-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="m9 18 6-6-6-6"></path>
                    </svg>
                </a>
            </li>
            <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
                Application
            </li>
        </ol>
    </div>

    <div class="max-w-screen-lg lg:space-y-5 space-y-4">
        <nav
            class="flex max-w-max gap-x-1 overflow-x-auto mx-auto rounded-xl bg-white p-2 shadow-sm ring-1 ring-gray-950/5 md:flex">
            <a href="{{ route('office.index') }}"
                class="fi-tabs-item group flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition duration-75 fi-active fi-tabs-item-active bg-gray-50"
                aria-selected="aria-selected" role="tab">
                <svg class="fi-tabs-item-icon h-5 w-5 shrink-0 transition duration-75 text-primary-600"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z">
                    </path>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z">
                    </path>
                </svg>

                <span class="fi-tabs-item-label transition duration-75 text-primary-600">
                    View
                </span>
            </a>

            <a href="{{ route('office.edit', ['office' => $office->id]) }}"
                class="fi-tabs-item group flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50"
                role="tab">
                <svg class="fi-tabs-item-icon h-5 w-5 shrink-0 transition duration-75 text-gray-400"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10">
                    </path>
                </svg>
                <span
                    class="fi-tabs-item-label transition duration-75 text-gray-500 group-hover:text-gray-700 group-focus-visible:text-gray-700">
                    Edit
                </span>
            </a>

            <a href="http://absensi.test/admin/offices?record=1"
                class="fi-tabs-item group flex items-center gap-x-2 rounded-lg px-3 py-2 text-sm font-medium outline-none transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50"
                role="tab">
                <i class="text-base text-gray-400 fa-regular fa-rectangle-list"></i>
                <span
                    class="fi-tabs-item-label transition duration-75 text-gray-500 group-hover:text-gray-700 group-focus-visible:text-gray-700">
                    List
                </span>
            </a>
        </nav>

        <section class="bg-white rounded-xl border">
            <header class="p-4 border-b">
                <h1 class="text-neutral-800 leading-6 font-semibold">Lokasi</h1>
            </header>
            <div class="p-4">
                <div class="grid grid-cols-3">
                    <div class="space-y-4">
                        <div class="space-y-1">
                            <h1 class="font-medium leading-6 text-sm text-gray-950">Lokasi</h1>
                            <p class="leading-6 text-sm text-gray-950">{{ $office->name }}</p>
                        </div>
                        <div class="space-y-1">
                            <h1 class="font-medium leading-6 text-sm text-gray-950">Radius</h1>
                            <p class="leading-6 text-sm text-gray-950">{{ $office->radius }}</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="space-y-1">
                            <h1 class="font-medium leading-6 text-sm text-gray-950">Latitude</h1>
                            <p class="leading-6 text-sm text-gray-950">{{ $office->latitude }}</p>
                        </div>
                        <div class="space-y-1">
                            <h1 class="font-medium leading-6 text-sm text-gray-950">Longitude</h1>
                            <p class="leading-6 text-sm text-gray-950">{{ $office->longitude }}</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="space-y-1">
                            <h1 class="font-medium leading-6 text-sm text-gray-950">Jam Masuk</h1>
                            <p class="leading-6 text-sm text-gray-950">{{ $office->clock_in }}</p>
                        </div>
                        <div class="space-y-1">
                            <h1 class="font-medium leading-6 text-sm text-gray-950">Jam Keluar</h1>
                            <p class="leading-6 text-sm text-gray-950">{{ $office->clock_out }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <div id="map" class="rounded-lg" style="height: 500px;"></div>

        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script>
            var map = L.map('map').setView([{{ $office->latitude }}, {{ $office->longitude }}],
                13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                minZoom: 10,
            }).addTo(map);

            L.marker([{{ floatval($office->latitude) }}, {{ floatval($office->longitude) }}]).addTo(map)
                .bindPopup("{{ $office->name }}")
                .openPopup();


            var circle = L.circle([{{ floatval($office->latitude) }}, {{ floatval($office->longitude) }}], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: {{ $office->radius }} // Radius dalam meter
            }).addTo(map);

            // Menambahkan popup ke lingkaran
            circle.bindPopup('Ini adalah lingkaran dengan radius ' + {{ $office->radius }} + ' meter.');
        </script>
    </div>
</x-app-layout>
