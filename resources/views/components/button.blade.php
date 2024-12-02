@php
    $_emphasis = [
        '100' => 'p-2.5',
        '200' => 'px-4 py-2.5'
    ];

    $_significance = [
        '100' => 'rounded-md transition hover:bg-gray-100 active:bg-gray-200',
        '200' => 'bg-blue-700 text-white rounded-md active:bg-blue-800 transition'
    ];
@endphp


<button class="{{ $_emphasis[$emphasis] }} {{ $_significance[$significance] }} {{ $class ?? '' }}" {{ $attributes }}>
    {{ $slot }}
</button>
