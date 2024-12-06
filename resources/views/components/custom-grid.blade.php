@props(['items'])
<div class="grid grid-cols-8 w-full">
    @foreach ($items as $item)
        <div @class([
            'sm:col-span-8',
            'sm:items-center',
            'sm:justify-center',
            'w-full',
            'lg:order-none',
            "col-span-{$item['col']}",
            "sm:order-{$item['smOrder']}",
            'flex',
            'h-full',
            'bg-[#F8F9FB]' => isset($item['bg']),
            'bg-white' => !isset($item['bg']),
            "lg:!bg-[url('/public/images/form.png')] bg-cover sm:bg-contain sm:bg-center bg-no-repeat sm:bg-[url('/public/images/form2.jpg')] sm:py-32" => isset(
                $item['firstPage']),
            'p-4' => isset($item['firstPage']),
        ])>
            @include($item['view'])
        </div>
    @endforeach
</div>
