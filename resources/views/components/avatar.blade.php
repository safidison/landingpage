@props(['name', 'photo'])

@if ($photo)
    <div
        {{ $attributes->merge(['class' => 'w-12 h-12 rounded-full overflow-hidden bg-gray-300 flex items-center justify-center']) }}>
        <img src="{{ $photo }}" alt="{{ $name }}" class="object-cover w-full h-full">
    </div>
@else
    <div
        {{ $attributes->merge(['class' => 'w-12 h-12 rounded-full bg-gray-500 text-white flex items-center justify-center font-bold text-lg']) }}>
        {{ strtoupper(substr($name, 0, 1)) }}
    </div>
@endif
