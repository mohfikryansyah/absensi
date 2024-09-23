<x-delete-modal modal="hs-scale-animation-modal">
    <form method="POST" action="{{ route('attendances.destroy', ['attendance' => $attendance->id]) }}">
        @csrf
        @method('delete')

        <div class="p-4 text-center">
            <h2 class="text-lg font-medium text-gray-900">
                Apakah anda yakin?
            </h2>
            <p class="mt-1 text-sm text-gray-600">
                Setelah data dihapus, semua sumber daya dan datanya akan dihapus secara permanen.
            </p>

            <input type="hidden" id="delete_id" name="id"></input>
        </div>

        <div class="flex justify-center items-center gap-x-2 py-3 px-4">
            <button type="submit"
                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                Ya, Hapus!
            </button>
            <button type="button"
                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                data-hs-overlay="#hs-scale-animation-modal">
                Batal
            </button>
        </div>
    </form>
</x-delete-modal>
