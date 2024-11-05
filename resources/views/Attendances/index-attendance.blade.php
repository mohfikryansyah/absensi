<x-app-layout>
    <div class="flex justify-between">
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
        <div>
            <a href="{{ route('attendances.create') }}"
                class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-[#004642] text-white hover:bg-[#004642] focus:outline-none focus:bg-[#004642] disabled:opacity-50 disabled:pointer-events-none">
                Create
            </a>
        </div>
    </div>

    <form action="{{ route('attendances.index') }}" method="GET">
        <div class="mt-5 mb-2 rounded-xl hs-dropdown [--auto-close:inside] relative sm:inline-flex z-20">
            <button type="button"
                class="hs-dropdown-toggle py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                <i class="fa-solid fa-filter"></i>
                Filter Data
                <svg class="hs-dropdown-open:rotate-180 size-2.5" width="16" height="16" viewBox="0 0 16 16"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
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
                            <span class="block text-sm text-gray-800 dark:text-neutral-300">Perjalanan Dinas</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="mt-2 px-4 py-3 bg-[#004642] text-white rounded-lg text-sm">Terapkan
            filter</button>
        @if (request()->has('hadir') ||
                request()->has('izin') ||
                request()->has('alpa') ||
                request()->has('sakit') ||
                request()->has('perjalanan_dinas'))
            <a href="{{ route('attendances.index') }}" class="px-4 py-3 bg-gray-300 text-gray-800 rounded-lg text-sm"><i
                    class="fa-solid fa-filter-circle-xmark mr-2"></i>Reset
                Filter</a>
        @endif
    </form>


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
                                                        src="https://{{ 'absensi.bpkhtl15gorontalo.com' . '/storage/' . $attendance->swafoto }}"
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
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                {{ $attendance->clock_in->format('H:i:s') }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                {{ $attendance->clock_out ? $attendance->clock_out->format('H:i:s') : '-' }}
                                            </span>
                                        </div>
                                    </td>
                                    @php
                                        $seconds = $attendance->total_jam_kerja;
                                        $hours = floor($seconds / 3600);
                                        $minutes = floor(($seconds % 3600) / 60);
                                        $seconds = $seconds % 60;
                                    @endphp
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">

                                                {{ $hours }} jam, {{ $minutes }} menit,
                                                {{ $seconds }} detik
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
                                        <a data-id="{{ $attendance->id }}" href="javascript:void(0);"
                                            class="deletebtn py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-[#004642] text-white hover:bg-[#004642] focus:outline-none focus:bg-[#004642] disabled:opacity-50 disabled:pointer-events-none"
                                            aria-haspopup="dialog" aria-expanded="false"
                                            aria-controls="hs-scale-animation-modal"
                                            data-hs-overlay="#hs-scale-animation-modal">
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
            $(document).ready(function() {
                $('table').on('click', '.deletebtn', function() {
                    var data = $(this).data();

                    var id = $(this).data('id');

                    $('#delete_id').val(id);
                });
            });
        </script>
    </x-slot:script>
</x-app-layout>
