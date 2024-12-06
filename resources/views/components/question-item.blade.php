@props(['items'])

@foreach ($items as $key => $item)
    <p
        class="text-[30px] font-normal text-[#585858] opacity-100 tracking-normal {{ $key != count($items) - 1 ? 'border-b border-b-1 border-[#585858]' : '' }} py-6">
        {{ $item['texte'] }}
    </p>
@endforeach
