<div class="bg-gray-200 p-4 rounded-lg shadow-md max-w-md">
    <div class="flex items-center mb-4">
        <x-avatar :name="$name" :photo="$photo" class="mr-4" />
        <span class="text-lg font-semibold text-gray-800">{{ $name }}</span>
    </div>

    <div class="flex items-center mb-4">
        @for ($i = 1; $i <= 5; $i++)
            <i class="fa {{ $i <= $rating ? 'fa-star text-yellow-500' : 'fa-star-o text-gray-400' }} text-lg"></i>
        @endfor
    </div>

    <div class="text-gray-700 text-sm">
        {{ $slot }}
    </div>
</div>
