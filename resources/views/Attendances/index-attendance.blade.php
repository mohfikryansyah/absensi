<x-app-layout>
    {{-- <div class="flex justify-between">
        <div class="bg-white p-3 rounded-xl border">
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
    </div> --}}

    <div class="lg:flex items-center mb-2 justify-between">
        <div class="lg:flex items-center">
            <form action="{{ route('attendances.index') }}" method="GET">
                <div class="rounded-xl hs-dropdown [--auto-close:inside] relative sm:inline-flex z-20">
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

                <div class="md:inline-flex flex items-center md:gap-0 gap-2 my-2">
                    <button type="submit" class="px-4 py-3 bg-[#004642] text-white rounded-lg text-sm">Terapkan
                        filter</button>
                    @if (request()->has('hadir') ||
                            request()->has('izin') ||
                            request()->has('alpa') ||
                            request()->has('sakit') ||
                            request()->has('perjalanan_dinas') ||
                            request()->has('start_date') ||
                            request()->has('end_date'))
                        <a href="{{ route('attendances.index') }}"
                            class="px-4 py-3 bg-gray-300 text-gray-800 rounded-lg text-sm"><i
                                class="fa-solid fa-filter-circle-xmark mr-2"></i>Reset
                            Filter</a>
                    @endif
            </form>
            <div class="w-px h-6 rounded-sm bg-gray-300 ms-5"></div>
            <div id="modalExport" class="ms-5 self-center">
                <button type="button"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-lg font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                    aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-medium-modal"
                    data-hs-overlay="#hs-medium-modal">
                    <i class="fa-solid fa-download"></i>
                </button>
            </div>
        </div>
    </div>
    <a href="{{ route('attendances.create') }}"
        class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-[#004642] text-white hover:bg-[#004642] focus:outline-none focus:bg-[#004642] disabled:opacity-50 disabled:pointer-events-none">
        Create
    </a>
    </div>
    <div id="hs-medium-modal"
        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="hs-medium-modal-label">
        <div
            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all md:max-w-2xl md:w-full m-3 md:mx-auto">
            <div
                class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                    <h3 id="hs-medium-modal-label" class="font-bold text-gray-800 dark:text-white">
                        Export Kehadiran
                    </h3>
                    <button type="button"
                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                        aria-label="Close" data-hs-overlay="#hs-medium-modal">
                        <span class="sr-only">Close</span>
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                    </button>
                </div>
                <div class="p-4 overflow-y-auto">
                    <form action="{{ route('attendances.export') }}" method="get">
                        <!-- Select -->
                        <label for="users"
                            class="block text-sm font-medium mb-2 dark:text-white ms-1">Pegawai</label>
                        <select name="users[]" id="users" multiple=""
                            data-hs-select='{
                                "placeholder": "Pilih beberapa pilihan...",
                                "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
                                "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                                "optionTemplate": "<div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div><div class=\"hs-selected:font-semibold text-sm text-gray-800 dark:text-neutral-200 \" data-title></div></div><div class=\"ms-auto\"><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div></div>",
                                "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                            }'
                            class="hidden">
                            <option value="">Choose</option>
                            @foreach ($employees as $employee)
                                @php
                                    $nameParts = explode(' ', $employee->user->name);
                                    $firstName = $nameParts[0] ?? '';
                                    $secondName = $nameParts[1] ?? '';
                                    $avatarUrl =
                                        'https://ui-avatars.com/api/?name=' .
                                        urlencode($firstName . ' ' . $secondName) .
                                        '&background=004643&color=fffffe';
                                @endphp
                                <option value="{{ $employee->user_id }}"
                                    @if ($employee->avatar != null) data-hs-select-option='{
                "icon": "<img class=\"shrink-0 size-5 rounded-full\" src=\"{{ asset('storage/' . $employee->avatar) }}\" alt=\"{{ $employee->user->name }}\" />"}'
                                    @else
                                        data-hs-select-option='{
                "icon": "<img class=\"shrink-0 size-5 rounded-full\" src=\"{{ asset('storage/' . $avatarUrl) }}\" alt=\"{{ $employee->user->name }}\" />"}' @endif>
                                    {{ $employee->user->name }}
                                </option>
                            @endforeach
                        </select>

                        <!-- End Select -->
                        <div class="mt-3">
                            <div>
                                <p
                                    class="block text-sm font-medium mb-2 dark:text-white ms-1">Rentang tanggal</p>
                                <div class="sm:flex rounded-lg shadow-sm">
                                    <input type="date" name="startDate"
                                        class="py-3 px-4 pe-3 block w-full border-gray-200 sm:shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <span
                                        class="py-3 px-4 inline-flex items-center min-w-fit w-full border border-gray-200 bg-gray-50 text-sm text-gray-500 -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:w-auto sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg dark:bg-neutral-700 dark:border-neutral-700 dark:text-neutral-400">
                                        <p>to</p>
                                    </span>
                                    <input type="date" name="endDate"
                                        class="py-3 px-4 pe-3 block w-full border-gray-200 shadow-sm -mt-px -ms-px first:rounded-t-lg last:rounded-b-lg sm:first:rounded-s-lg sm:mt-0 sm:first:ms-0 sm:first:rounded-se-none sm:last:rounded-es-none sm:last:rounded-e-lg text-sm relative focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                    <button type="button"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        data-hs-overlay="#hs-medium-modal">
                        Close
                    </button>
                    <button type="submit"
                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                        Export
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>




    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="border bg-white py-1 rounded-xl overflow-hidden">
                    <table id="table_attendances">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 text-start text-xs font-medium text-gray-600 uppercase">
                                    Nama</th>
                                <th scope="col"
                                    class="px-6 text-start text-xs font-medium text-gray-600 uppercase">
                                    Status</th>
                                <th scope="col"
                                    class="px-6 text-start text-xs font-medium text-gray-600 uppercase">
                                    Latitude</th>
                                <th scope="col"
                                    class="px-6 text-start text-xs font-medium text-gray-600 uppercase">
                                    Longitude</th>
                                <th scope="col"
                                    class="px-6 text-start text-xs font-medium text-gray-600 uppercase">
                                    Jam Masuk</th>
                                <th scope="col"
                                    class="px-6 text-start text-xs font-medium text-gray-600 uppercase">
                                    Jam Keluar</th>
                                <th scope="col"
                                    class="px-6 text-start text-xs font-medium text-gray-600 uppercase">
                                    Durasi</th>
                                <th scope="col"
                                    class="px-6 text-start text-xs font-medium text-gray-600 uppercase">
                                    Keterangan</th>
                                <th scope="col"
                                    class="px-6 text-start text-xs font-medium text-gray-600 uppercase">
                                    Tanggal Absensi</th>
                                <th scope="col"
                                    class="px-6 text-start text-xs font-medium text-gray-600 uppercase">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($attendances as $attendance)
                                <tr>
                                    @php
                                        $nameParts = explode(' ', $attendance->user->name);
                                        $firstName = $nameParts[0] ?? '';
                                        $secondName = $nameParts[1] ?? '';
                                        $avatarUrl =
                                            'https://ui-avatars.com/api/?name=' .
                                            urlencode($firstName . ' ' . $secondName) .
                                            '&background=004643&color=fffffe';
                                    @endphp
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <div class="flex items-center gap-x-3">
                                                @if ($attendance->swafoto != null)
                                                    <img class="customimg inline-block size-[38px] bg-cover bg-center object-cover rounded-full"
                                                        src="{{ asset('storage/' . $attendance->swafoto) }}"
                                                        alt="Avatar">
                                                @else
                                                    <img src="{{ $avatarUrl }}" alt="Avatar"
                                                        class="inline-block size-[38px] rounded-full">
                                                @endif
                                                <div class="grow">
                                                    <span
                                                        class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $attendance->user->name }}</span>
                                                    <span
                                                        class="block text-sm text-gray-500 dark:text-neutral-500">{{ $attendance->user->email }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            var fullName = "{{ $attendance->user->name }}";
                                            var nameParts = fullName.split(" ");

                                            var firstName = nameParts[0] || "";
                                            var secondName = nameParts[1] || "";

                                            var avatarUrl = "https://ui-avatars.com/api/?name=" + encodeURIComponent(firstName + "+" + secondName) +
                                                "&background=004643&color=fffffe";

                                            var avatarImage = document.getElementById("avatar-image");
                                            if (avatarImage) {
                                                avatarImage.src = avatarUrl;
                                            }
                                        });
                                    </script>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            @php
                                                $statusClass = 'bg-teal-100 text-teal-800';
                                                if ($attendance->status === 'Hadir') {
                                                    $statusClass = 'bg-green-100 text-green-800';
                                                } elseif ($attendance->status === 'Alpa') {
                                                    $statusClass = 'bg-red-100 text-red-800';
                                                } elseif ($attendance->status === 'Izin') {
                                                    $statusClass = 'bg-blue-100 text-blue-800';
                                                } elseif ($attendance->status === 'Sakit') {
                                                    $statusClass = 'bg-yellow-100 text-yellow-800';
                                                } elseif ($attendance->status === 'Perjalanan Dinas') {
                                                    $statusClass = 'bg-purple-100 text-purple-800';
                                                }
                                            @endphp
                                            <span
                                                class="py-1 px-3 inline-flex items-center text-xs font-medium {{ $statusClass }} rounded-full dark:bg-opacity-10 dark:text-opacity-80">
                                                {{ $attendance->status }}
                                            </span>
                                        </div>
                                    </td>

                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                {{ $attendance->latitude ?? '-' }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                {{ $attendance->longitude ?? '-' }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span
                                                class="text-sm {{ $attendance->clock_in < $office->clock_in ? 'text-red-500' : 'text-green-500' }} dark:text-neutral-500">
                                                {{ $attendance->clock_in->format('H:i:s') }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span
                                                class="text-sm {{ $attendance->clock_out < $office->clock_out ? 'text-red-500' : 'text-green-500' }} dark:text-neutral-500">
                                                {{ $attendance->clock_out ? $attendance->clock_out->format('H:i:s') : '-' }}
                                            </span>
                                        </div>
                                    </td>
                                    @php
                                        $seconds = $attendance->total_jam_kerja;
                                        $hours = floor($seconds / 3600);
                                        $minutes = floor(($seconds % 3600) / 60);
                                        $seconds = $seconds % 60;
                                        $result = $hours . ' jam ' . $minutes . ' menit ' . $seconds . ' detik';
                                    @endphp
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                {{ $attendance->clock_out ? $result : 'Durasi tidak tersedia.' }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                {{ $attendance->keterangan }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span
                                                class="text-sm text-gray-500 dark:text-neutral-500">{{ date_format(date_create($attendance->tanggal), 'd F Y') }}</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        <a data-id={{ $attendance->id }} href="javascript:void(0);"
                                            x-data=""
                                            x-on:click="$dispatch('open-modal', 'delete_attendance')"
                                            class="deletebtn py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none transition">
                                            <i class="fa-solid fa-trash-arrow-up"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @if ($attendances->isNotEmpty())
        @include('Attendances.delete-attendance')
    @endif

    <x-slot:script>
        <script>
            new DataTable('#table_attendances', {
                order: []
            });
        </script>

        <script>
            document.querySelector('form').addEventListener('submit', function(e) {
                const startDateInput = document.getElementById('start_date');
                const endDateInput = document.getElementById('end_date');

                if (!startDateInput.value) {
                    startDateInput.removeAttribute('name');
                }

                if (!endDateInput.value) {
                    endDateInput.removeAttribute('name');
                }
            });
        </script>

        <script>
            $(document).ready(function() {
                $('table').on('click', '.deletebtn', function() {
                    var id = $(this).data('id');
                    
                    $('#delete_id').val(id);
                });
            });
        </script>
    </x-slot:script>
</x-app-layout>
