<x-app-layout>
    @if (Session::get('error'))
        <div id="alert-3"
            class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-500 dark:bg-gray-800 dark:text-green-400"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
                {{ Session::get('error') }}
            </div>
            <button type="button"
                class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    @php
        $today = Carbon\Carbon::today();
        $checkAttendance = App\Models\Attendance::where('user_id', auth()->user()->id)
            ->where('tanggal', $today)
            ->first();
    @endphp

    <div class="bg-gradient-to-t from-blue-300 to-blue-600 max-w-md rounded-xl p-5">
        <div class="flex justify-between gap-4">
            <div>
                <h1 class="font-semibold text-lg text-white">Welcome back, {{ auth()->user()->name }}</h1>
                <p class="text-gray-200 text-sm">{{ $randomSentence }}</p>
            </div>
            <div>
                <div class="h-12 w-12 bg-red-500 rounded-full"></div>
            </div>
        </div>

        @if (!$checkAttendance)
            <div class="mt-6">
                <form action="{{ route('attendances.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="latitude" id="latitude">
                    <input type="hidden" name="longitude" id="longitude">

                    <div class="">
                        <div class="mt-2.5">
                            <x-input-label for="status" class="mb-2 text-blue-100">Status Kehadiran<span
                                    class="text-red-500">*</span></x-input-label>
                            <!-- Select -->
                            <select
                                data-hs-select='{
                                "placeholder": "Pilih status ...",
                                "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-blue-200 border border-blue-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
                                "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-blue-200 border border-blue-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-blue-100 rounded-lg focus:outline-none focus:bg-gray-100 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                                "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-blue-500 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                            }'
                                class="hidden" id="status" name="status">
                                <option value="">Pilih</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Alpa">Alpa</option>
                                <option value="Izin">Izin</option>
                            </select>
                            <!-- End Select -->
                            @error('status', 'add_attendance')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-2.5">
                            <x-input-label for="keterangan" class="mb-2 text-blue-100">Keterangan</x-input-label>
                            <textarea rows="2" name="keterangan" id="keterangan"
                                class="w-full border-blue-200 bg-blue-200 rounded-lg focus:outline-none"></textarea>
                        </div>
                    </div>
                    <div class="mt-6">
                        <button type="submit"
                            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-200 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                            <i class="fa-solid fa-play text-gray-700"></i>
                            Clock in
                        </button>
                    </div>
                </form>
            </div>
        @else
            <form action="{{ route('attendances.clockout') }}" method="post">
                @csrf
                @method('PUT')

                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">

                <div class="mt-6">
                    <button type="submit"
                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-200 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                        <i class="fa-solid fa-play text-gray-700 rotate-180"></i>
                        Clock out
                    </button>
                </div>
            </form>
        @endif

    </div>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
    <div class="max-w-screen-sm">
        <div id="map" style="height: 250px;"></div>
    </div>


    <x-slot:script>
        {{-- <script>
            // Fungsi untuk mendapatkan lokasi dari perangkat (laptop, smartphone)
            function getLocationFromDevice() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition, showError, {
                        enableHighAccuracy: true, // Memastikan mendapatkan lokasi yang akurat
                        timeout: 10000, // Timeout jika terlalu lama
                        maximumAge: 0 // Tidak menggunakan cache lokasi lama
                    });
                } else {
                    document.getElementById("lokasi").innerHTML = "Geolocation tidak didukung oleh browser ini.";
                }
            }

            // Fungsi untuk menampilkan lokasi di halaman
            function showPosition(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;

                // document.getElementById("lokasi").innerHTML = `Latitude: ${latitude}, Longitude: ${longitude}`;
                document.getElementById("latitude").value = latitude;
                document.getElementById("longitude").value = longitude;
                console.log(latitude);

            }

            // Fungsi untuk menampilkan error geolocation
            function showError(error) {
                switch (error.code) {
                    case error.PERMISSION_DENIED:
                        document.getElementById("lokasi").innerHTML = "Pengguna menolak permintaan geolocation.";
                        break;
                    case error.POSITION_UNAVAILABLE:
                        document.getElementById("lokasi").innerHTML = "Informasi lokasi tidak tersedia.";
                        break;
                    case error.TIMEOUT:
                        document.getElementById("lokasi").innerHTML = "Permintaan lokasi kehabisan waktu.";
                        break;
                    case error.UNKNOWN_ERROR:
                        document.getElementById("lokasi").innerHTML = "Terjadi kesalahan yang tidak diketahui.";
                        break;
                }
            }

            // Memulai proses pengambilan lokasi ketika halaman dimuat
            window.onload = getLocationFromDevice;
        </script> --}}
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>
        <script>
            // Inisialisasi peta
            var map = L.map('map').setView([0, 0], 13); // Koordinat awal (0,0)

            // Tambahkan tile layer untuk peta
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '© OpenStreetMap'
            }).addTo(map);

            L.marker([{{ $office->latitude }}, {{ $office->longitude }}]).addTo(map)
                .bindPopup("{{ $office->name }}")
                .openPopup();

            L.circle([{{ $office->latitude }}, {{ $office->longitude }}], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: {{ $office->radius }} // Radius dalam meter
            }).addTo(map);

            // Marker untuk menampilkan lokasi pengguna
            var marker = L.marker([0, 0]).addTo(map);

            // Fungsi untuk memperbarui lokasi pengguna secara real-time
            function updateLocation(position) {
                var lat = position.coords.latitude;
                var lon = position.coords.longitude;
                var accuracy = position.coords.accuracy;

                document.getElementById("latitude").value = lat;
                document.getElementById("longitude").value = lon;
                console.log(lat);


                // Set posisi marker ke lokasi pengguna saat ini
                marker.setLatLng([lat, lon])
                    .bindPopup("Your location is within " + accuracy + " meters.")
                // .openPopup();

                // Pindahkan peta ke lokasi terbaru
                map.setView([lat, lon], 13);
            }

            // Fungsi ketika ada kesalahan saat mengakses lokasi
            function locationError(error) {
                alert('Error getting location: ' + error.message);
            }

            // Dapatkan lokasi pengguna secara real-time
            if (navigator.geolocation) {
                navigator.geolocation.watchPosition(updateLocation, locationError, {
                    enableHighAccuracy: true,
                    timeout: 5000,
                    maximumAge: 0
                });
            } else {
                alert('Geolocation is not supported by your browser.');
            }
        </script>
    </x-slot:script>
</x-app-layout>
