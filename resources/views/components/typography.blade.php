@props(['type' => 'body', 'color' => 'text-primary', 'ml' => 'ml-0', 'class' => 'max-w-full'])

@switch($type)
    @case('title')
        <span
            class="font-title font-bold text-[40px] sm:text-[20px] text-[#1E1E1E] {{ $color }} {{ $ml }} {{ $class }}">{{ $slot }}</span>
    @break

    @case('subtitle')
        <span
            class="font-title sm:text-sans font-title text-[34px] sm:text-[17px] font-normal text-[#1E1E1E] {{ $color }} {{ $ml }} {{ $class }}">{{ $slot }}</span>
    @break

    @case('body')
        <span
            class="font-sans text-[26px] sm:text-[14px] font-normal text-[#1E1E1E] {{ $color }} {{ $ml }} {{ $class }}">{{ $slot }}</span>
    @break

    @case('body-title')
        <span
            class="font-title font-normal text-[23px] sm:text-[16px] text-[#424242] {{ $color }} {{ $ml }} {{ $class }}">{{ $slot }}</span>
    @break

    @case('button')
        <p
            class="font-title text-[26px] sm:text-[14px] font-extrabold text-[#FFFFFF] {{ $color }} {{ $ml }} {{ $class }}">
            {{ $slot }}</p>
    @break

    @case('button2')
        <p
            class="font-title font-semibold text-[25px] sm:text-[13px] font-segoe uppercase text-white {{ $color }} {{ $ml }} {{ $class }}">
            {{ $slot }}</p>
    @break

    @case('button3')
        <p
            class="font-title font-semibold text-[19px] sm:text-[16px] !text-white uppercase {{ $color }} {{ $ml }} {{ $class }}">
            {{ $slot }}</p>
    @break

    @case('small')
        <p
            class="font-sans text-[20px] sm:text-[12px] font-normal text-[#000000] {{ $color }} {{ $ml }} {{ $class }}">
            {{ $slot }}</p>
    @break

    @case('xsmall')
        <p class="text-[10px] sm:text-[8px] font-normal text-black {{ $color }} {{ $ml }} {{ $class }}">
            {{ $slot }}</p>
    @break

    @case('filter')
        <p class="font-sans font-normal text-[24px] text-black {{ $color }} {{ $ml }} {{ $class }}">
            {{ $slot }}</p>
    @break

    @case('link')
        <p
            class="font-sans underline font-normal text-[14px] text-[#36578A] {{ $color }} {{ $ml }} {{ $class }}">
            {{ $slot }}</p>
    @break

    @case('price')
        <p
            class="font-title font-bold text-[30px] sm:text-[16px] text-black {{ $color }} {{ $ml }} {{ $class }}">
            {{ $slot }}</p>
    @break

    @case('promo')
        <p
            class="font-title font-semibold text-[17px] sm:text-[10px] text-[#0000008C] {{ $color }} {{ $ml }} {{ $class }}">
            {{ $slot }}</p>
    @break

    @case('res-item')
        <p
            class="font-body font-semibold text-[#6d6d6d] text-[20px] sm:text-[13px] {{ $color }} {{ $ml }} {{ $class }}">
            {{ $slot }}</p>
    @break

    @case('number')
        <p
            class="font-title text-[30px] font-lato text-[#BF2A6B] {{ $color }} {{ $ml }} {{ $class }}">
            {{ $slot }}</p>
    @break
@endswitch
