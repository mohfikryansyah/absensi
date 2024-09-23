  <div id="{{ $modal }}"
      class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
      role="dialog" tabindex="-1" aria-labelledby="{{ $modal }}-label">
      <div
          class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-md sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
          <div
              class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
              {{-- <div class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                  <h3 id="{{ $modal }}-label" class="font-bold text-gray-800 dark:text-white">
                      {{ $title }}
                  </h3>
                  <button type="button"
                      class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                      aria-label="Close" data-hs-overlay="#{{ $modal }}">
                      <span class="sr-only">Close</span>
                      <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path d="M18 6 6 18"></path>
                          <path d="m6 6 12 12"></path>
                      </svg>
                  </button>
              </div> --}}
              <div class="mx-auto mt-5">
                  <div class="rounded-full w-20 h-20 bg-orange-400 flex items-center justify-center">
                      <div
                          class="rounded-full w-[4.7rem] h-[4.7rem] bg-white flex flex-col items-center justify-center text-4xl text-orange-400">
                          <i class="fa-solid fa-exclamation"></i>
                      </div>
                  </div>
              </div>
              <div class="overflow-y-auto">
                  {{ $slot }}
              </div>
          </div>
      </div>
  </div>
