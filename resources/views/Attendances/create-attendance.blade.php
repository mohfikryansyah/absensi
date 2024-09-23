<x-app-layout>
    <div class="space-y-4">
        <div class="bg-white p-3 rounded-lg border max-w-screen-lg">
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
        @if (Session::get('error'))
            <div id="alert-3"
                class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-500 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
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

        <p id="lokasi"></p>
        <div class="bg-white border rounded-lg max-w-screen-lg">
            <div class="px-5 py-2.5 border-b">
                <h1 class="text-2xl font-bold mt-2 text-neutral-800">Create Location</h1>
            </div>
            <div class="px-5 py-2.5">
                <form action="{{ route('attendances.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="latitude" id="latitude">
                    <input type="hidden" name="longitude" id="longitude">

                    <div class="">
                        <div class="mt-2.5">
                            <x-input-label for="status" class="mb-2">Status Kehadiran<span
                                    class="text-red-500">*</span></x-input-label>
                            <!-- Select -->
                            <select
                                data-hs-select='{
                                    "placeholder": "Pilih status ...",
                                    "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border {{ $errors->add_attendance->has('status') ? 'border-red-500' : 'border-gray-200' }} rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
                                    "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                                    "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                                    "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-blue-500 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
                                    "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                                }'
                                class="hidden" id="status" name="status">
                                <option value="">Pilih</option>
                                <option value="Hadir" {{ old('status') == 'Hadir' ? 'selected' : '' }}>Hadir</option>
                                <option value="Sakit" {{ old('status') == 'Sakit' ? 'selected' : '' }}>Sakit</option>
                                <option value="Alpa" {{ old('status') == 'Alpa' ? 'selected' : '' }}>Alpa</option>
                                <option value="Izin" {{ old('status') == 'Izin' ? 'selected' : '' }}>Izin</option>
                            </select>
                            @error('status', 'add_attendance')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                            <!-- End Select -->
                        </div>
                        <div class="mt-2.5">
                            <x-input-label for="keterangan" class="mb-2">Keterangan<span
                                    class="text-red-500">*</span></x-input-label>
                            <textarea rows="4" name="keterangan" id="keterangan" class="w-full border-gray-200 rounded-lg focus:outline-none"></textarea>
                        </div>
                    </div>
                    <div class="mt-6 mb-4">
                        <x-primary-button>Submit</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <x-slot:script>
        <script>
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
        </script>
    </x-slot:script>
</x-app-layout>
