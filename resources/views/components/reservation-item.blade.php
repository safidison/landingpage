@props(['item' => []])
<div
    class="w-full grid grid-cols-12 lg:h-[161px] shadow-lg  px-4 rounded-md bg-white flex lg:items-center justify-center mb-2">
    <div class="sm:col-span-6 col-span-8  py-4">
        <div class="flex flex-col">
            <div class="flex flex-row sm:flex-col">
                <div class="flex flex-col sm:flex-row">
                    <div>
                        <x-typography type="res-item">{{ $item['jours'] }}</x-typography>
                    </div>
                    <div class="ml-1">
                        <x-typography type="res-item">{{ $item['date'] }}</x-typography>
                    </div>
                </div>
                <div class="flex flex-col lg:ml-8">
                    <div class="lg:h-6"></div>
                    <div class="flex flex-row">
                        <i
                            class="fa fa-map-marker text-[30px] sm:text-[14px] relative lg:-top-2 mr-2 text-[#6d6d6d]"></i>
                        <div>
                            <x-typography type="res-item">{{ $item['address'] }}</x-typography>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[60%] border-b border-b-1 pb-4"></div>
            <div class="flex lg:flex-row sm:flex-col lg:ml-2">
                <div class="mt-4 font-sans text-[18px] sm:text-[11px] leading-[24px] font-semibold text-[#BF2A6B] opacity-100">
                    {{ $item['details'] }}</div>
                <div class="flex flex-row lg:ml-6 mt-2">
                    <i class="fa fa-warning text-[15px] mr-2 text-[#B90909]"></i>
                    <span class="font-sans text-[14px] leading-[19px] text-[#B90909] opacity-100">Dernière places à
                        cette date</span>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full col-span-4 lg:ml-8 sm:col-span-6 lg:border-l-2">
        <div class="flex flex-col justify-center items-center py-4">
            <div class="flex flex-row">
                <x-typography type="price" class="self-end">{{ $item['price'] }}€</x-typography>
                <x-typography type="promo" class="self-end"><span
                        class="line-through">{{ $item['promo'] }}</span>€</x-typography>
            </div>
            <x-typography type="xsmall">Après remboursement*</x-typography>
            <x-button class="!h-[40px] !rounded-md p-2 mr-4 w-[168px] sm:w-[110px] sm:h-[32px] sm:my-1 sm:py-2">
                <span
                    class="font-body text-[17px] sm:text-[13px] leading-[23px] font-bold text-white uppercase opacity-100">Réserver</span>
            </x-button>
            <x-typography type="xsmall">{{ $item['place'] }} places disponibles à cette date</x-typography>
        </div>
    </div>
</div>
