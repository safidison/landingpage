@props(['class' => '', 'width' => '502px'])
<button class="custom-btn w-[{{ $width }}] h-[80px] sm:h-[34px] lg:!px-4 sm:!px-2 {{ $class }}">
    {{ $slot }} <span class="fa fa-chevron-right text-white text-xl font-light"></span>
</button>
