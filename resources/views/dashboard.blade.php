<x-app-layout>
    <div class="grid sm:grid-cols-1 lg:grid-cols-3 gap-4 sm:gap-3 max-w-screen-md">
        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                        Absensi hari ini
                    </p>
                    <div class="hs-tooltip">
                        <div class="hs-tooltip-toggle">
                            <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                <path d="M12 17h.01" />
                            </svg>
                            <span
                                class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700"
                                role="tooltip">
                                Angka absensi hari ini
                            </span>
                        </div>
                    </div>
                </div>

                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                        {{ $countAttendancesToday }}
                    </h3>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                        Total Absensi
                    </p>
                </div>

                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                        {{ $countEmployees }}
                    </h3>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                        Total Pegawai
                    </p>
                </div>

                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                        {{ $countEmployees }}
                    </h3>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        {{-- <div class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
            <div class="p-4 md:p-5">
                <div class="flex items-center gap-x-2">
                    <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                        Pageviews
                    </p>
                </div>

                <div class="mt-1 flex items-center gap-x-2">
                    <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                        92,913
                    </h3>
                </div>
            </div>
        </div> --}}
    </div>

    <div class="rounded-xl max-w-screen-md p-5 bg-white mt-5">
        <div class="flex items-center mb-2 justify-between">
            <div class="flex items-center md:space-y-0 space-y-2">
                <form action="{{ route('dashboard') }}" method="GET">
                    <div class="rounded-xl hs-dropdown [--auto-close:inside] relative sm:inline-flex z-10">
                        <button type="button"
                            class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                            <i class="fa-solid fa-filter"></i>
                            Filter Data
                            <svg class="hs-dropdown-open:rotate-180 size-2.5" width="16" height="16"
                                viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700"
                            role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-auto-close-inside">
                            <div class="p-1 space-y-0.5">
                                <div
                                    class="flex items-center gap-x-2 py-2 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700">
                                    <input id="hadir" name="hadir" type="checkbox"
                                        class="shrink-0 border-gray-200 rounded text-blue-600 focus:ring-blue-500"
                                        {{ request()->has('hadir') ? 'checked' : '' }}>
                                    <label for="hadir" class="grow">
                                        <span class="block text-sm text-gray-800 dark:text-neutral-300">Hadir</span>
                                    </label>
                                </div>
                                <div
                                    class="flex items-center gap-x-2 py-2 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700">
                                    <input id="izin" name="izin" type="checkbox"
                                        class="shrink-0 border-gray-200 rounded text-blue-600 focus:ring-blue-500"
                                        {{ request()->has('izin') ? 'checked' : '' }}>
                                    <label for="izin" class="grow">
                                        <span class="block text-sm text-gray-800 dark:text-neutral-300">Izin</span>
                                    </label>
                                </div>
                                <div
                                    class="flex items-center gap-x-2 py-2 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700">
                                    <input id="alpa" name="alpa" type="checkbox"
                                        class="shrink-0 border-gray-200 rounded text-blue-600 focus:ring-blue-500"
                                        {{ request()->has('alpa') ? 'checked' : '' }}>
                                    <label for="alpa" class="grow">
                                        <span class="block text-sm text-gray-800 dark:text-neutral-300">Alpa</span>
                                    </label>
                                </div>
                                <div
                                    class="flex items-center gap-x-2 py-2 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700">
                                    <input id="sakit" name="sakit" type="checkbox"
                                        class="shrink-0 border-gray-200 rounded text-blue-600 focus:ring-blue-500"
                                        {{ request()->has('sakit') ? 'checked' : '' }}>
                                    <label for="sakit" class="grow">
                                        <span class="block text-sm text-gray-800 dark:text-neutral-300">Sakit</span>
                                    </label>
                                </div>
                                <div
                                    class="flex items-center gap-x-2 py-2 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700">
                                    <input id="perjalanan_dinas" name="perjalanan_dinas" type="checkbox"
                                        class="shrink-0 border-gray-200 rounded text-blue-600 focus:ring-blue-500"
                                        {{ request()->has('perjalanan_dinas') ? 'checked' : '' }}>
                                    <label for="perjalanan_dinas" class="grow">
                                        <span class="block text-sm text-gray-800 dark:text-neutral-300">Perjalanan
                                            Dinas</span>
                                    </label>
                                </div>
                                <div class="border-t border-gray-200">
                                    <h1 class="border-b border-gray-200 py-2 text-center text-sm text-gray-500">Rentang
                                        Tanggal
                                        Kehadiran</h1>
                                    <div class="flex justify-between items-center gap-x-3 py-2 px-3 rounded-lg">
                                        <label for="start_date"
                                            class="text-sm text-gray-800 dark:text-neutral-300">Mulai</label>
                                        <input type="date" id="start_date" name="start_date"
                                            @if (request()->start_date) value="{{ request()->start_date }}" @endif
                                            class="border-gray-200 rounded text-gray-800 dark:text-neutral-300">
                                    </div>
                                    <div class="flex justify-between items-center gap-x-2 py-2 px-3 rounded-lg">
                                        <label for="end_date"
                                            class="text-sm text-gray-800 dark:text-neutral-300">Akhir</label>
                                        <input type="date" id="end_date" name="end_date"
                                            @if (request()->end_date) value="{{ request()->end_date }}" @endif
                                            class="border-gray-200 rounded text-gray-800 dark:text-neutral-300">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md:inline-flex flex md:mt-0 mt-3">

                        <button type="submit" class="px-4 py-3 bg-[#004642] text-white rounded-lg text-sm mr-1">Terapkan
                            filter</button>
                        @if (request()->has('hadir') ||
                                request()->has('izin') ||
                                request()->has('alpa') ||
                                request()->has('sakit') ||
                                request()->has('perjalanan_dinas') ||
                                request()->has('start_date') ||
                                request()->has('end_date'))
                            <a href="{{ route('dashboard') }}"
                                class="px-4 py-3 bg-gray-300 text-gray-800 rounded-lg text-sm"><i
                                    class="fa-solid fa-filter-circle-xmark mr-2"></i>Reset
                                Filter</a>
                        @endif
                    </div>
                </form>
            </div>
        </div>

        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
        <div id="map" class="rounded-lg max-w-screen-md mt-5 w-full h-[500px] z-[9]"></div>

        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script>
            var map = L.map('map').setView([{{ floatval($office->latitude) }}, {{ floatval($office->longitude) }}],
                13);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                minZoom: 10,
            }).addTo(map);

            var circle = L.circle([{{ $office->latitude }}, {{ $office->longitude }}], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: {{ $office->radius }}
            }).addTo(map);

            const markers = @json($attendances);


            markers.forEach(marker => {
                const lat = parseFloat(marker.latitude);
                const lng = parseFloat(marker.longitude);

                if (!isNaN(lat) && !isNaN(lng)) {
                    let popupContent =
                        `<strong>${marker.user.name}</strong><br>Jam Masuk: ${marker.clock_in}<br>${marker.status}`;

                    if (marker.swafoto) {
                        popupContent +=
                            `<br><img src="{{ asset('storage') }}/${marker.swafoto}" alt="Swafoto" style="width:100px;height:auto;">`;
                    } else {
                        popupContent += `<br><em>Swafoto tidak tersedia</em>`;
                    }

                    L.marker([lat, lng])
                        .addTo(map)
                        .bindPopup(popupContent);
                } else {
                    console.warn('Invalid latitude or longitude for marker:', marker);
                }
            });
        </script>

    </div>

</x-app-layout>
