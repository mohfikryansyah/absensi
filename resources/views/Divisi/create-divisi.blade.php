<x-app-layout>
    <div class="bg-white border rounded-lg max-w-screen-lg">
        <div class="px-5 py-3 border-b">
            <h1 class="text-xl font-bold text-neutral-800">Buat Divisi</h1>
            <h2 class="text-sm font-normal text-neutral-400">Isi formulir berikut untuk membuat divisi</h2>
        </div>
        <div class="px-5 py-2.5">
            <form action="{{ route('divisi.store') }}" method="post">
                @csrf

                <div class="md:grid grid-cols-12 mt-6 items-center">
                    <div class="col-span-2 md:mb-0 mb-2">
                        <label for="name" class="text-gray-500">Nama Divisi<span
                                class="text-red-500">*</span></label>
                    </div>
                    <div class="col-span-10">
                        <x-text-input name="name" id="name" class="w-full"
                            value="{{ old('name') }}"></x-text-input>
                    </div>
                    <div class="col-span-10 col-start-3">

                        @error('name', 'add_employee')
                            <p class="text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="md:grid grid-cols-12 mt-6 items-center">
                    <div class="col-span-2 md:mb-0 mb-2">
                        <label for="devisi" class="text-gray-500">Divisi<span
                                class="text-red-500">*</span></label>
                    </div>
                    <div class="col-span-10">
                        <x-select-input name="ketua" id="ketua">
                            <option value="">Pilih</option>
                            @foreach ($users as $user)
                                @if (old('user') == $user->id)
                                    <option value="{{ $user->id }}" selected>{{ $user->name }}</option>
                                @else
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endif
                            @endforeach
                        </x-select-input>
                    </div>
                    <div class="col-span-10 col-start-3">
                        @error('ketua', 'add_employee')
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
</x-app-layout>