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
            >
            {{ Session::get('error') }}
        @endif

        <p id="lokasi"></p>
        <div class="bg-white border rounded-lg max-w-screen-lg">
            <div class="px-5 py-3 border-b">
                <h1 class="text-xl font-bold text-neutral-800">Buat pengguna baru</h1>
                <h2 class="text-sm font-normal text-neutral-400">Isi formulir berikut untuk membuat akun dan menambahkan
                    data pegawai.</h2>
            </div>
            <div class="px-5 py-2.5">
                <form action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="md:grid grid-cols-12 mt-2.5">
                        <div class="col-span-2 md:mb-0 mb-2">
                            <label for="avatar" class="text-gray-500">Avatar</label>
                        </div>
                        <div class="flex items-center col-span-10">
                            <div
                                class="flex items-center overflow-hidden justify-center w-20 h-20 border-2 border-dotted rounded-full border-gray-300">
                                @if (auth()->user()->avatar)
                                    <img src="{{ auth()->user()->avatar }}" alt="avatar.jpg">
                                @else
                                    <svg class="text-gray-300" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="18" height="18" x="3" y="3" rx="2" ry="2">
                                        </rect>
                                        <circle cx="9" cy="9" r="2"></circle>
                                        <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                    </svg>
                                @endif
                            </div>
                            <div class="ms-4">
                                <div class="max-w-sm">
                                    <label class="block">
                                        <span class="sr-only">Choose profile photo</span>
                                        <input type="file" id="avatar" name="avatar"
                                            class="block w-full text-sm text-gray-500
                                          file:me-4 file:py-2 file:px-4
                                          file:rounded-lg file:border-0
                                          file:text-sm file:font-semibold
                                          file:bg-blue-600 file:text-white
                                          hover:file:bg-blue-700
                                          file:disabled:opacity-50 file:disabled:pointer-events-none
                                          dark:text-neutral-500
                                          dark:file:bg-blue-500
                                          dark:hover:file:bg-blue-400
                                        ">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-10 col-start-3">
                            @error('avatar', 'add_employee')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:grid grid-cols-12 mt-6 items-center">
                        <div class="col-span-2 md:mb-0 mb-2">
                            <label for="name" class="text-gray-500">Nama lengkap<span
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
                            <label for="date_of_birth" class="text-gray-500">Tanggal Lahir<span
                                    class="text-red-500">*</span></label>
                        </div>
                        <div class="col-span-10">
                            <input type="date" name="date_of_birth" id="date_of_birth"
                                class="w-full border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-sm py-2.5 mt-0.5"
                                value="{{ old('date_of_birth') }}">
                        </div>
                        <div class="col-span-10 col-start-3">
                            @error('date_of_birth', 'add_employee')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:grid grid-cols-12 mt-6 items-center">
                        <div class="col-span-2 md:mb-0 mb-2">
                            <label for="gender" class="text-gray-500">Jenis Kelamin<span
                                    class="text-red-500">*</span></label>
                        </div>
                        <div class="col-span-10">
                            <x-select-input name="gender" id="gender">
                                <option value="">Pilih</option>
                                <option value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'selected' : '' }}>
                                    Laki-laki
                                </option>
                                <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan</option>
                            </x-select-input>

                        </div>
                        <div class="col-span-10 col-start-3">
                            @error('gender', 'add_employee')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:grid grid-cols-12 mt-6 items-center">
                        <div class="col-span-2 md:mb-0 mb-2">
                            <label for="address" class="text-gray-500">Alamat<span
                                    class="text-red-500">*</span></label>
                        </div>
                        <div class="col-span-10">
                            <x-text-input name="address" id="address" class="w-full"
                                value="{{ old('address') }}"></x-text-input>
                        </div>
                        <div class="col-span-10 col-start-3">
                            @error('address', 'add_employee')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:grid grid-cols-12 mt-6 items-center">
                        <div class="col-span-2 md:mb-0 mb-2">
                            <label for="phone_number" class="text-gray-500">Whatsapp<span
                                    class="text-red-500">*</span></label>
                        </div>
                        <div class="col-span-10">
                            <x-number-input name="phone_number" id="phone_number" class="w-full"
                                value="{{ old('phone_number') }}"></x-number-input>
                        </div>
                        <div class="col-span-10 col-start-3">
                            @error('phone_number', 'add_employee')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- <div class="md:grid grid-cols-12 mt-6 items-center">
                        <div class="col-span-12">
                            <div class="inline-flex items-center justify-center w-full">
                                <hr class="w-full h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
                                <span class="absolute px-3 font-medium text-gray-900 bg-white dark:text-white dark:bg-gray-900">or</span>
                            </div>
                        </div>
                    </div> --}}

                    <div class="md:grid grid-cols-12 mt-6 items-center">
                        <div class="col-span-2 md:mb-0 mb-2">
                            <label for="email" class="text-gray-500">Email<span
                                    class="text-red-500">*</span></label>
                        </div>
                        <div class="col-span-10">
                            <x-text-input name="email" id="email" class="w-full"
                                value="{{ old('email') }}"></x-text-input>
                        </div>
                        <div class="col-span-10 col-start-3">
                            @error('email', 'add_employee')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:grid grid-cols-12 mt-6 items-center">
                        <div class="col-span-2 md:mb-0 mb-2">
                            <label for="devisi" class="text-gray-500">Devisi<span
                                    class="text-red-500">*</span></label>
                        </div>
                        <div class="col-span-10">
                            <x-select-input name="devisi" id="devisi">
                                <option value="">Pilih</option>
                                @foreach ($devisis as $devisi)
                                    @if (old('devisi') == $devisi->id)
                                        <option value="{{ $devisi->id }}" selected>{{ $devisi->name }}</option>
                                    @else
                                        <option value="{{ $devisi->id }}">{{ $devisi->name }}</option>
                                    @endif
                                @endforeach
                            </x-select-input>
                        </div>
                        <div class="col-span-10 col-start-3">
                            @error('devisi', 'add_employee')
                                <p class="text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="md:grid grid-cols-12 mt-6 items-center">
                        <div class="col-span-2 md:mb-0 mb-2">
                            <label for="date_joined" class="text-gray-500">Bergabung sejak<span
                                    class="text-red-500">*</span></label>
                        </div>
                        <div class="col-span-10">
                            <input type="date" name="date_joined" id="date_joined"
                                class="w-full border-gray-200 focus:border-indigo-500 focus:ring-indigo-500 rounded-lg shadow-sm py-2.5 mt-0.5"
                                value="{{ old('date_joined') }}">
                        </div>
                        <div class="col-span-10 col-start-3">
                            @error('date_joined', 'add_employee')
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
</x-app-layout>
