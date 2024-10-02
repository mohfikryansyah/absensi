@props(['name', 'id', 'value' => ''])

<div class="py-2.5 px-3 bg-white border border-gray-200 rounded-lg"
    data-hs-input-number='{
    "min": -10
  }'>
    <div class="w-full flex justify-between items-center gap-x-3">
        <input name="{{ $name }}" id="{{ $id }}" value="{{ $value }}"
            class="w-full p-0 bg-transparent border-0 text-gray-800 focus:ring-0 [&::-webkit-inner-spin-button]:appearance-none [&::-webkit-outer-spin-button]:appearance-none"
            style="-moz-appearance: textfield;" type="{{ $type ?? 'number' }}" aria-roledescription="Number field" value="0" step="0.0000000000000001"
            data-hs-input-number-input="">
        <div class="flex justify-end items-center gap-x-1.5">
            <button type="button"
                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                tabindex="-1" aria-label="Decrease" data-hs-input-number-decrement="">
                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                </svg>
            </button>
            <button type="button"
                class="size-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                tabindex="-1" aria-label="Increase" data-hs-input-number-increment="">
                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5v14"></path>
                </svg>
            </button>
        </div>
    </div>
</div>
<!-- End Input Number -->
