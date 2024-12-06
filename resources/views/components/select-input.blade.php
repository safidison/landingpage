@props(['options' => []])

<div class="w-full w-[315px] mx-2">
    <select
        {{ $attributes->merge(['class' => 'w-full bg-[#E9E9E9] border-t border-b border-[#707070] border-l-0 border-r-0 px-4 py-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500']) }}>
        @foreach ($options['options'] as $value => $label)
            <option value="0">Filtrer par {{ $options['title'] }}</option>
            <option value="{{ $value }}" class="text-[#707070]">{{ $label }}</option>
        @endforeach
    </select>
</div>
