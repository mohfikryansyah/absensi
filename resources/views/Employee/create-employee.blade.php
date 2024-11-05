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
                            <div id="avatarUpload" data-hs-file-attach class="max-w-[15rem]">
                                <template data-hs-file-attach-template>
                                    <div class="size-20">
                                        <img class="w-full h-full rounded-full preview-image"
                                            alt="Preview">
                                    </div>
                                </template>

                                <div class="flex items-center gap-3 sm:gap-5">
                                    <div class="preview-wrapper group">
                                        <!-- Default avatar icon -->
                                        <span
                                            class="no-image-selected flex shrink-0 justify-center items-center size-20 border-2 border-dotted border-gray-300 text-gray-400 cursor-pointer rounded-full hover:bg-gray-50 dark:border-neutral-700 dark:text-neutral-600 dark:hover:bg-neutral-700/50">
                                            <svg class="shrink-0 size-7" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <circle cx="12" cy="10" r="3"></circle>
                                                <path d="M7 20.662V19a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v1.662"></path>
                                            </svg>
                                        </span>
                                    </div>

                                    <div class="grow">
                                        <div class="flex items-center gap-x-2">
                                            <label
                                                class="py-2 px-3 text-nowrap inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 cursor-pointer">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                    <polyline points="17 8 12 3 7 8"></polyline>
                                                    <line x1="12" x2="12" y1="3" y2="15">
                                                    </line>
                                                </svg>
                                                Upload photo
                                                <input type="file" name="avatar" class="hidden file-input"
                                                    accept="image/*">
                                            </label>

                                            <button type="button"
                                                class="delete-button py-2 px-3 inline-flex items-center gap-x-2 text-xs font-semibold rounded-lg border border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:hover:bg-neutral-800">
                                                Delete
                                            </button>
                                        </div>
                                    </div>
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

    <x-slot:script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const fileUpload = document.getElementById('avatarUpload');
                if (!fileUpload) return;

                const fileInput = fileUpload.querySelector('.file-input');
                const previewWrapper = fileUpload.querySelector('.preview-wrapper');
                const noImageSelected = fileUpload.querySelector('.no-image-selected');
                const deleteButton = fileUpload.querySelector('.delete-button');
                const template = fileUpload.querySelector('[data-hs-file-attach-template]');

                let currentPreview = null;

                fileInput.addEventListener('change', function(e) {
                    const file = e.target.files[0];
                    if (!file) return;

                    // Remove existing preview if any
                    if (currentPreview) {
                        currentPreview.remove();
                    }

                    // Create new preview
                    const preview = template.content.cloneNode(true);
                    const previewImage = preview.querySelector('.preview-image');

                    // Create object URL for preview
                    const objectUrl = URL.createObjectURL(file);
                    previewImage.src = objectUrl;

                    // Hide the default icon and show preview
                    noImageSelected.style.display = 'none';
                    previewWrapper.appendChild(preview);
                    currentPreview = previewWrapper.querySelector('div:last-child');

                    // Enable delete button
                    deleteButton.disabled = false;
                });

                deleteButton.addEventListener('click', function() {
                    // Remove preview
                    if (currentPreview) {
                        currentPreview.remove();
                        currentPreview = null;
                    }

                    // Show default icon
                    noImageSelected.style.display = 'flex';

                    // Clear file input
                    fileInput.value = '';

                    // Disable delete button
                    deleteButton.disabled = true;
                });
            });
        </script>
    </x-slot:script>
</x-app-layout>
