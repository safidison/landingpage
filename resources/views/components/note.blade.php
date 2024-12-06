@props(['bg' => ''])
<div class="grid grid-cols-2 mt-4 max-w-[481px]">
    <div
        class="flex flex-col {{ $bg ?? 'bg-white' }} h-[104px] items-center justify-center {{ $bg ? '' : 'shadow-md' }} w-full rounded-lg">
        <div>
            <img src="images/google_logo.png" class="w-[20px] h-[20px]" />
        </div>
        <div>
            @for ($i = 1; $i <= 5; $i++)
                <i class="fa fa-star text-yellow-500 text-xl"></i>
            @endfor
        </div>
        <div><x-typography type="small"><span class="font-bold">4.7 | 8.085</span> avis</x-typography></div>
    </div>
    <div
        class="flex justify-center items-center h-[104px] p-8 {{ $bg ?? 'bg-white' }} {{ $bg ? '' : 'shadow-md' }}  rounded-lg ml-4">
        <img src="images/trustpilot.png" class="w-full m-4 object-cover" />
    </div>
</div>
