<div
    class="flex items-center w-full border border-gray-300 rounded-full overflow-hidden bg-white shadow-md  lg:p-4 sm:h-[40px] sm:grid sm:grid-cols-12 sm:h-full">
    <div class="lg:px-3 px-1 text-gray-500 flex items-center sm:col-span-1">
        <i class="fa fa-map-marker text-[60px] sm:text-[24px] sm:ml-2"></i>
    </div>

    <input type="text" name="{{ $name ?? 'location' }}"
        placeholder="{{ $placeholder ?? 'Rechercher une localisation...' }}"
        class="flex-grow py-2 px-3 focus:outline-none text-gray-700 font-sans font-normal text-[25px] sm:text-[14px] leading-[34px] font-nunito tracking-normal text-black opacity-100 sm:col-span-6" />
    
    <div class="px-3 text-gray-500 flex items-center sm:col-span-1">
        <i class="fa fa-paper-plane text-[30px] sm:text-[18px] cursor-pointer hover:text-blue-500"></i>
    </div>
    <button type="submit"
        class="ml-2 py-2 px-4 bg-[#36578A] !w-[100%] lg:w-[262px] lg:h-[91px] text-white text-sm font-semibold rounded-full hover:bg-blue-600 focus:outline-none sm:sm:col-span-4 sm:h-full">
        <span class="sm:hidden"><x-typography type="button2">Rechercher</x-typography></span>
        <span class="lg:hidden"><x-typography type="body" color="text-white">Rechercher</x-typography></span>
    </button>
</div>
