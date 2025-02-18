<x-guest-layout>
    <!-- ========== HEADER ========== -->

    <header
        class="overflow-hidden sticky top-0 inset-x-0 bg-[#f3f7f9] dark:bg-neutral-800 dark:border-neutral-700 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full">
        <nav
            class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 px-4 sm:px-6 lg:px-8 py-4  border-b border-gray-200">
            <!-- Logo w/ Collapse Button -->
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80"
                    href="/" aria-label="Logo">
                    <img src="{{ asset('image/logo_bonbol.png') }}" class="md:w-[3rem] w-[2rem] h-auto" alt=""
                        srcset="">
                </a>
                <!-- End Logo -->

                <!-- Collapse Button -->
                <div class="md:hidden">
                    <button type="button"
                        class="hs-collapse-toggle relative size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                        id="hs-header-scrollspy-collapse" aria-expanded="false" aria-controls="hs-header-scrollspy"
                        aria-label="Toggle navigation" data-hs-collapse="#hs-header-scrollspy">
                        <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <line x1="3" x2="21" y1="6" y2="6" />
                            <line x1="3" x2="21" y1="12" y2="12" />
                            <line x1="3" x2="21" y1="18" y2="18" />
                        </svg>
                        <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                </div>
                <!-- End Collapse Button -->
            </div>
            <!-- End Logo w/ Collapse Button -->

            <!-- Collapse -->
            <div id="hs-header-scrollspy"
                class="hs-collapse md:ms-[20rem] hidden overflow-hidden transition-all duration-300 basis-full grow md:block"
                aria-labelledby="hs-header-scrollspy-collapse">
                <div
                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                    <div data-hs-scrollspy="#scrollspy"
                        class="py-2 md:py-0 [--scrollspy-offset:220] md:[--scrollspy-offset:70] flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">
                        <a class="flex p-2 items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 hs-scrollspy-active:bg-transparent dark:hs-scrollspy-active:bg-neutral-700"
                            href="#landing">
                            Dinas Penanaman Modasl dan Pelayanan Terpadu Satu Pintu
                        </a>
                        <a class="md:hidden p-2 items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 hs-scrollspy-active:bg-transparent dark:hs-scrollspy-active:bg-neutral-700"
                            href="{{ route('login') }}">
                            Login
                        </a>

                        {{-- <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 hs-scrollspy-active:bg-gray-200 dark:hs-scrollspy-active:bg-neutral-700"
                            href="#account">
                            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                            Account
                        </a>

                        <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 hs-scrollspy-active:bg-gray-200 dark:hs-scrollspy-active:bg-neutral-700"
                            href="#work">
                            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 12h.01" />
                                <path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
                                <path d="M22 13a18.15 18.15 0 0 1-20 0" />
                                <rect width="20" height="14" x="2" y="6" rx="2" />
                            </svg>
                            Work
                        </a>

                        <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:bg-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 hs-scrollspy-active:bg-gray-200 dark:hs-scrollspy-active:bg-neutral-700"
                            href="#blog">
                            <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                                <path d="M18 14h-8" />
                                <path d="M15 18h-5" />
                                <path d="M10 6h8v4h-8V6Z" />
                            </svg>
                            Blog
                        </a> --}}

                    </div>
                </div>
            </div>

            <div class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block"
                aria-labelledby="hs-header-scrollspy-collapse">
                <div
                    class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                    <div
                        class="py-2 md:py-0 [--scrollspy-offset:220] md:[--scrollspy-offset:70] flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">
                        @auth
                            <a class="px-4 py-2 flex items-center text-sm text-gray-800 bg-white border border-gray-200 rounded-full"
                                href="{{ url('/dashboard') }}">
                                Dashboard
                            </a>
                        @else
                            <a class="px-4 py-2 flex items-center text-sm text-gray-800 bg-white border border-gray-200 rounded-full"
                                href="{{ route('login') }}">
                                Login
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
            <!-- End Collapse -->
        </nav>
    </header>
    <!-- ========== END HEADER ========== -->


    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" class="bg-[#f3f7f9] relative overflow-hidden">
        <div id="scrollspy">
            <div id="landing" class="max-w-[85rem] min-h-[68rem] mx-auto py-10 px-4 sm:px-6 lg:px-8">
                <h1 class="text-5xl md:text-6xl lg:text-7xl text-gray-800 text-center font-inter mt-24 font-bold"
                    data-aos="fade-down" data-aos-duration="3000">Cepat. Tepat. Tuntas.</h1>
                <div class="max-w-[40rem] mx-auto">
                    <p data-aos="fade-up" data-aos-duration="3000" class="mt-4 text-xl text-gray-400 text-center">
                        Kami hadir dengan pelayanan yang cepat, tepat,
                        dan tuntas untuk mendukung kemudahan investasi dan perizinan bagi masyarakat.</p>
                </div>
                <div class="grid md:grid-cols-3 justify-center gap-x-5 md:gap-y-0 gap-y-5 mt-40">
                    <div data-aos="fade-up" data-aos-duration="3000"
                        class="hover:scale-105 order-2 md:order-1 transition duration-300 customboxshadow bg-gradient-to-b from-[#fbfdfe] to-[#eff5f6] h-80 w-96 relative  overflow-hidden">
                        <div class="h-full p-10">
                            <div class="px-4 py-2 max-w-max text-gray-50 rounded-full bg-gray-700 text-sm font-medium">
                                Total Pengguna</div>
                            <div class="mt-3 text-6xl font-semibold">30+</div>
                            <div class="mt-3 text-base text-gray-400">dengan</div>
                            <div class="absolute text-lg text-gray-800 z-[10]">10.000+ kehadiran tercatat</div>
                            <div class="w-[30rem] h-[10rem] bg-gray-300 absolute bottom-0 -rotate-45"></div>
                            <div class="w-[30rem] h-[10rem] bg-gray-200 absolute bottom-10 -rotate-45"></div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="3000"
                        class="hover:scale-105 order-1 md:order-2 transition duration-300 customboxshadow bg-gradient-to-b from-[#fbfdfe] to-[#eff5f6] h-96 w-96 relative overflow-hidden">
                        <h2
                            class="absolute left-1/2 transform -translate-x-1/2 top-[2.5rem] text-lg font-medium tracking-wide">
                            For Android</h2>
                        <img src="{{ asset('image/Clock_In.png') }}"
                            class="absolute right-1/2 transform top-[4.5rem] text-lg max-w-[15rem] h-auto z-[11]"
                            alt="">
                        <img src="{{ asset('image/Clock_InOut.png') }}"
                            class="absolute left-1/2 transform -translate-x-1/2 top-[1rem] text-lg max-w-[15rem] h-auto"
                            alt="">
                        <img src="{{ asset('image/Clock_Out.png') }}"
                            class="absolute left-1/2 transform top-[4.5rem] text-lg max-w-[15rem] h-auto z-[11]"
                            alt="">
                        <div
                            class="z-[10] w-[50rem] h-[50rem] rounded-full bg-gray-100/80 absolute -bottom-[35rem] left-1/2 transform -translate-x-1/2 border-2 border-gray-300/20">
                        </div>
                        <div
                            class="z-[12] w-[50rem] h-[50rem] rounded-full bg-gray-200/70 absolute -bottom-[38rem] left-1/2 transform -translate-x-1/2 border-2 border-gray-300/20">
                        </div>
                        <div
                            class="z-[14] w-[50rem] h-[50rem] rounded-full bg-gray-300/60 absolute -bottom-[41rem] left-1/2 transform -translate-x-1/2 border-2 border-gray-300/20">
                        </div>
                        <a href="{{ asset('aplikasi-mobile/absensi.apk') }}"
                            class="z-[15] absolute left-1/2 transform -translate-x-1/2 bottom-8 rounded-full py-4 px-4 inline-flex items-center gap-x-2 text-sm font-medium border border-transparent bg-[#3b5766] text-white hover:bg-[#334b58] focus:outline-none focus:bg-[#3b5766] disabled:opacity-50 disabled:pointer-events-none">
                            <i class="fa-solid fa-cloud-arrow-down text-xl"></i>
                            <div>
                                <p class="text-sm text-gray-400">Download</p>
                                <p class="text-sm">Aplikasi Absensi</p>
                            </div>
                        </a>
                    </div>

                    <div data-aos="fade-up" data-aos-duration="3000"
                        class="hover:scale-105 order-3 transition duration-300 customboxshadow bg-gradient-to-b from-[#fbfdfe] to-[#eff5f6] h-80 w-96">
                        <div class="h-full p-4 relative">
                            {{-- <h1 class="pt-4 pl-5 font-medium text-gray-600">Fitur</h1> --}}
                            <div
                                class="px-4 py-2 mt-6 absolute z-[20] ml-6 max-w-max text-gray-50 rounded-full bg-gray-700 text-sm font-medium">
                                Fitur</div>
                            <div
                                class="border-2 border-gray-200/30 bg-[#e6edf0] px-4 pt-10 pb-3 rounded-xl absolute z-[10] right-6 text-gray-600 mt-[4rem]">
                                Export Rekapan Kehadiran</div>
                            <div
                                class="border-2 border-gray-200/30 bg-[#e6edf0]/50 px-4 pt-10 pb-3 rounded-xl absolute z-[9] right-[2.5rem] text-gray-600 mt-[7.5rem]">
                                Laporan Kehadiran Real-Time</div>
                            <div
                                class="border-2 border-gray-200/30 bg-[#e6edf0]/30 px-4 pt-10 pb-3 rounded-xl absolute z-[8] right-[3.5rem] text-gray-600 mt-[11rem]">
                                Absensi dengan Lokasi & Swafoto</div>
                            <div
                                class="w-[11rem] h-[11rem] rounded-full relative flex justify-center items-center bg-white/20 border-2 border-gray-300/20">
                                <div
                                    class="w-[9rem] h-[9rem] rounded-full relative flex justify-center items-center bg-white/40 border-2 border-gray-300/20">
                                    <div
                                        class="w-[7rem] h-[7rem] rounded-full relative flex justify-center items-center bg-gray-50/60 border-2 border-gray-300/20">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div id="account" class="min-h-[25rem] max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex md:flex-1 flex-wrap md:space-y-0 space-y-7 items-center justify-evenly">
                    <img data-aos="fade-up-right" data-aos-duration="2000" src="{{ asset('image/LoginScreen.png') }}"
                        class="max-w-[19rem] h-auto" alt="Login Screen">
                    <div data-aos="fade-up-left" data-aos-duration="2000" class="space-y-4">
                        <h1 class="text-[#004643] text-5xl font-medium max-w-md">Absensi Instan di Genggaman Anda</h1>
                        <p class="text-xl font-medium max-w-md">Layanan absensi yang intuitif dan aman, cukup login dan
                            catat kehadiran tanpa repot.</p>
                    </div>
                </div>

            </div>

            <div id="work" class="min-h-[25rem] max-w-[85rem] mx-auto py-10 px-4 sm:px-6 lg:px-8 md:mt-24">
                <h2 class="text-3xl mb-10 font-semibold text-gray-800 dark:text-white text-center">How to use?</h2>
                <!-- Stepper -->
                <div data-hs-stepper="">
                    <!-- Stepper Nav -->
                    <ul class="relative flex flex-row gap-x-2 left-[14%]">
                        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                            data-hs-stepper-nav-item='{
        "index": 1
      }'>
                            <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                                <span
                                    class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                                    <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">1</span>
                                    <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </span>
                                <span class="ms-2 text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Step
                                </span>
                            </span>
                            <div
                                class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-700 dark:hs-stepper-success:bg-blue-600 dark:hs-stepper-completed:bg-teal-600">
                            </div>
                        </li>

                        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                            data-hs-stepper-nav-item='{
        "index": 2
      }'>
                            <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                                <span
                                    class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                                    <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">2</span>
                                    <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </span>
                                <span class="ms-2 text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Step
                                </span>
                            </span>
                            <div
                                class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-700 dark:hs-stepper-success:bg-blue-600 dark:hs-stepper-completed:bg-teal-600">
                            </div>
                        </li>

                        <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                            data-hs-stepper-nav-item='{
          "index": 3
        }'>
                            <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                                <span
                                    class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                                    <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">3</span>
                                    <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                </span>
                                <span class="ms-2 text-sm font-medium text-gray-800 dark:text-neutral-200">
                                    Step
                                </span>
                            </span>
                            <div
                                class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-700 dark:hs-stepper-success:bg-blue-600 dark:hs-stepper-completed:bg-teal-600">
                            </div>
                        </li>
                        <!-- End Item -->
                    </ul>
                    <!-- End Stepper Nav -->

                    <!-- Stepper Content -->
                    <div class="mt-5 sm:mt-8">
                        <!-- First Content -->
                        <div data-hs-stepper-content-item='{
        "index": 1
      }'>
                            <div id="clock-in" class="min-h-[25rem] max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
                                <div
                                    class="flex md:flex-1 flex-wrap md:space-y-0 space-y-7 items-center justify-evenly">
                                    <div data-aos="fade-up-left" data-aos-duration="2000"
                                        class="space-y-4 md:mt-0 mt-[6rem] relative">
                                        <img src="{{ asset('image/Clock_In.png') }}"
                                            class="absolute -top-[10rem] -left-[5rem] text-lg max-w-[15rem] h-auto z-[11]"
                                            alt="">
                                        <h1 class="text-[#004643] text-5xl font-medium max-w-md">Clock In</h1>
                                        <p class="text-xl font-medium max-w-md">Tekan ikon ini untuk memulai presensi
                                            dengan swafoto, menandai kehadiran Anda di aplikasi.</p>
                                    </div>
                                    <img data-aos="fade-up-right" data-aos-duration="2000"
                                        src="{{ asset('image/Dashboard.png') }}" class="max-w-[19rem] h-auto"
                                        alt="Dashboard Screen">
                                </div>
                            </div>
                        </div>
                        <!-- End First Content -->

                        <!-- First Content -->
                        <div data-hs-stepper-content-item='{
        "index": 2
      }' style="display: none;">
                            <div id="ambil-swafoto" class="min-h-[25rem] max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
                                <div
                                    class="flex md:flex-1 flex-wrap md:space-y-0 space-y-7 items-center justify-evenly">
                                    <img data-aos="fade-up-right" data-aos-duration="2000"
                                        src="{{ asset('image/Kamera.png') }}" class="max-w-[19rem] h-auto"
                                        alt="Kamera Screen">
                                    <div data-aos="fade-up-left" data-aos-duration="2000" class="space-y-4 relative">
                                        {{-- <img src="{{ asset('image/Clock_Out.png') }}"
                                            class="absolute -top-[10rem] -left-[5rem] text-lg max-w-[15rem] h-auto z-[11]"
                                            alt=""> --}}
                                        <h1 class="text-[#004643] text-5xl font-medium max-w-md">Ambil Swafoto</h1>
                                        <p class="text-xl font-medium max-w-md">Setelah menekan tombol, kamera akan
                                            terbuka untuk mengambil swafoto sebagai bukti kehadiran Anda di aplikasi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End First Content -->

                        <!-- First Content -->
                        <div data-hs-stepper-content-item='{
        "index": 3
      }' style="display: none;">
                            <div id="kirim-absensi" class="min-h-[25rem] max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
                                <div
                                    class="flex md:flex-1 flex-wrap md:space-y-0 space-y-7 items-center justify-evenly">
                                    <div data-aos="fade-up-left" data-aos-duration="2000"
                                        class="space-y-4 relative">
                                        <h1 class="text-[#004643] text-5xl font-medium max-w-md">Kirim Absensi</h1>
                                        <p class="text-xl font-medium max-w-md">Pastikan Anda <span
                                                class="text-red-500">berada dalam radius </span>
                                            absensi sebelum menekan tombol Clock In.</p>
                                        <p class="text-xl font-medium max-w-md">Anda dapat memperbarui lokasi Anda
                                            dengan menekan tombol di sudut kanan layar.</p>
                                        <p class="text-xl font-medium max-w-md">Absensi diluar radius dapat dilakukan
                                            apabila status kehadiran adalah <span class="text-red-500"> Sakit, Izin,
                                            </span>atau<span class="text-red-500"> Perjalanan Dinas.</span></p>
                                    </div>
                                    <img data-aos="fade-up-right" data-aos-duration="2000"
                                        src="{{ asset('image/Clock In Screen.png') }}" class="max-w-[19rem] h-auto"
                                        alt="ClockIn Screen">
                                </div>
                            </div>
                        </div>
                        <!-- End First Content -->

                        <!-- Final Content -->
                        <div data-hs-stepper-content-item='{
        "isFinal": true
      }' style="display: none;">
                            <div id="account" class="min-h-[25rem] max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
                                <div
                                    class="flex md:flex-1 flex-wrap md:space-y-0 space-y-7 items-center justify-evenly">
                                    <img data-aos="fade-up-right" data-aos-duration="2000"
                                        src="{{ asset('image/Sukses.png') }}" class="max-w-[19rem] h-auto"
                                        alt="ClockIn Screen">
                                    <div data-aos="fade-up-left" data-aos-duration="2000"
                                        class="space-y-4 md:mt-0 mt-[6rem] relative">
                                        <h1 class="text-[#004643] text-5xl font-medium max-w-md">Sukses!</h1>
                                        <p class="text-xl font-medium max-w-md">Jika muncul tampilan seperti ini, maka
                                            absensi <span class="text-green-500">berhasil </span>dilakukan. Jangan lupa
                                            untuk melakukan clock out.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Final Content -->

                        <!-- Button Group -->
                        <div class="mt-5 flex justify-between items-center gap-x-2">
                            <button type="button"
                                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                data-hs-stepper-back-btn="">
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m15 18-6-6 6-6"></path>
                                </svg>
                                Back
                            </button>
                            <button type="button"
                                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                data-hs-stepper-next-btn="">
                                Next
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg>
                            </button>
                            <button type="button"
                                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                data-hs-stepper-finish-btn="" style="display: none;">
                                Finish
                            </button>
                            <button type="reset"
                                class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                data-hs-stepper-reset-btn="" style="display: none;">
                                Reset
                            </button>
                        </div>
                        <!-- End Button Group -->
                    </div>
                    <!-- End Stepper Content -->
                </div>
                <!-- End Stepper -->
            </div>

            {{-- <div id="blog" class="min-h-[25rem] max-w-[85rem] mx-auto py-10 px-4 sm:px-6 lg:px-8">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Blog section</h2>
            </div>

            <div id="first" class="min-h-[65rem] max-w-[85rem] mx-auto py-10 px-4 sm:px-6 lg:px-8">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Dropdown: First section</h2>
            </div>

            <div id="second" class="min-h-[65rem] max-w-[85rem] mx-auto py-10 px-4 sm:px-6 lg:px-8">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Dropdown: Second section</h2>
            </div>

            <div id="three" class="min-h-[65rem] max-w-[85rem] mx-auto py-10 px-4 sm:px-6 lg:px-8">
                <h2 class="text-lg font-semibold text-gray-800 dark:text-white">Dropdown: Third section</h2>
            </div> --}}
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <x-slot:script>
        <script>
            window.addEventListener('load', function() {
                (function() {
                    const collapse = window?.$hsCollapseCollection ? HSCollapse.getInstance(
                        '#hs-header-scrollspy-collapse', true) : null;
                    const scrollSpy = window?.$hsScrollspyCollection ? HSScrollspy.getInstance(
                        '[data-hs-scrollspy="#scrollspy"]', true) : null;

                    if (collapse && scrollSpy) scrollSpy.element.on('beforeScroll', () => {
                        console.log(1);
                        return new Promise((res) => {
                            if (window.innerWidth <= 639 && collapse.element.el.classList.contains(
                                    'open')) {
                                collapse.element.hide();
                                HSStaticMethods.afterTransition(collapse.element.content, () => res(
                                    true));
                            } else res(true);
                        });
                    });
                })();
            });
        </script>
    </x-slot:script>
</x-guest-layout>
