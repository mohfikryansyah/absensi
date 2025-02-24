<x-app-layout>

    {{-- <form action="{{ route('devisi.index') }}" method="GET">
        <div class="mb-2 rounded-xl hs-dropdown [--auto-close:inside] relative sm:inline-flex z-20">
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
                    <h1 class="border-b border-gray-200 py-2 text-center text-sm text-gray-500">Jenis Kelamin</h1>
                    <div
                        class="flex items-center gap-x-2 py-2 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700">
                        <input id="pria" name="pria" type="checkbox"
                            class="shrink-0 border-gray-200 rounded text-blue-600 focus:ring-blue-500"
                            {{ request()->has('pria') ? 'checked' : '' }}>
                        <label for="pria" class="grow">
                            <span class="block text-sm text-gray-800 dark:text-neutral-300">Laki-laki</span>
                        </label>
                    </div>
                    <div
                        class="flex items-center gap-x-2 py-2 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700">
                        <input id="wanita" name="wanita" type="checkbox"
                            class="shrink-0 border-gray-200 rounded text-blue-600 focus:ring-blue-500"
                            {{ request()->has('wanita') ? 'checked' : '' }}>
                        <label for="wanita" class="grow">
                            <span class="block text-sm text-gray-800 dark:text-neutral-300">Perempuan</span>
                        </label>
                    </div>
                    <h1 class="border-y border-gray-200 py-2 text-center text-sm text-gray-500">Divisi</h1>
                    @foreach ($divisis as $divisi)
                        <div
                            class="flex items-center gap-x-2 py-2 px-3 rounded-lg hover:bg-gray-100 dark:hover:bg-neutral-700">
                            <input id="{{ Str::snake($divisi->name) }}" name="{{ Str::snake($divisi->name) }}"
                                type="checkbox"
                                class="shrink-0 border-gray-200 rounded text-blue-600 focus:ring-blue-500"
                                {{ request()->has(Str::snake($divisi->name)) ? 'checked' : '' }}>
                            <label for="{{ Str::snake($divisi->name) }}" class="grow">
                                <span
                                    class="block text-sm text-gray-800 dark:text-neutral-300">{{ $divisi->name }}</span>
                            </label>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <button type="submit" class="mt-2 px-4 py-3 bg-[#004642] text-white rounded-lg text-sm">Terapkan
            filter</button>
        @if (request()->has('pria') ||
    request()->has('wanita') ||
    collect($divisis)->contains(function ($divisi) {
        return request()->has(Str::snake($divisi->name));
    }))
            <a href="{{ route('devisi.index') }}" class="px-4 py-3 bg-gray-300 text-gray-800 rounded-lg text-sm">
                <i class="fa-solid fa-filter-circle-xmark mr-2"></i>Reset Filter
            </a>
        @endif

        
    </form> --}}
    <div class="mb-2">
        <a href="{{ route('devisi.create') }}"
            class="py-2.5 ms-2 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            Buat Divisi
        </a>
    </div>


    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="border bg-white py-1 rounded-xl overflow-hidden">
                    <table id="table_devisi">
                        <thead>
                            <tr>
                                <th scope="col" class="px-6 text-start text-xs font-medium text-gray-600 uppercase">
                                    Divisi</th>
                                <th scope="col" class="px-6 text-start text-xs font-medium text-gray-600 uppercase">
                                    Ketua Divisi</th>
                                <th scope="col" class="px-6 text-start text-xs font-medium text-gray-600 uppercase">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($devisi as $item)
                                <tr>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <span class="text-sm text-gray-500 dark:text-neutral-500">
                                                {{ $item->name }}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap">
                                        <div class="px-6 py-3">
                                            <p class="text-sm text-gray-800 font-medium dark:text-neutral-500">
                                                {{ $item->KetuaDivisi->name }}
                                            </p>
                                            <p class="text-sm text-gray-500 dark:text-neutral-500">
                                                {{ $item->KetuaDivisi->email }}
                                            </p>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        <a data-id={{ $item->id }} href="javascript:void(0);"
                                            x-data=""
                                            x-on:click="$dispatch('open-modal', 'delete_divisi')"
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

    @if ($devisi->isNotEmpty())
        @include('Divisi.delete-divisi')
    @endif

    <x-slot:script>
        <script>
            new DataTable('#table_devisi', {
                order: []
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
