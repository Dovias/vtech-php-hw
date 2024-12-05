@php
    $_variant = [
        'primary' => 'bg-blue-700 text-white rounded-md transition hover:bg-blue-800 active:bg-blue-900',
        'secondary' => 'bg-white text-black border rounded-md shadow transition hover:bg-gray-100 active:bg-gray-200',
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
