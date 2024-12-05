@php
    $_variant = [
        'dangerous' => 'bg-red-600 text-center text-white rounded-md transition hover:bg-red-700 active:bg-red-800',
        'primary' => 'bg-blue-700 text-center text-white rounded-md shadow transition hover:bg-blue-800 active:bg-blue-900',
        'secondary' => 'bg-white text-center text-black border rounded-md shadow transition hover:bg-gray-100 active:bg-gray-200',
    ];

@endphp

@if ($attributes['route'])
    <a href="{{ route($route) }}" class="{{ $_variant[$variant] }} {{ $class ?? '' }}" {{ $attributes }}>
        {{ $slot }}
    </a>
@else
    <button class="{{ $_variant[$variant] }} {{ $class ?? '' }}" {{ $attributes }}>
        {{ $slot }}
    </button>
@endif
