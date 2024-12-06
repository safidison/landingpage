@props(['items'])

@foreach ($items as $item)
    <div
        class="flex flex-col text-white text-center text-[20px] leading-[27px] font-normal opacity-100 tracking-normal w-[202px] sm:mb-16">
        <div><i class="fa fa-{{ $item['icon'] }} text-6xl" aria-hidden="true"></i></div>
        <div class="mt-4">{{ $item['texte'] }}</div>
    </div>
@endforeach
