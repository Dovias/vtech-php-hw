@php
    $_size = [
        'small' => [
            'content' => 'px-2 py-1 text-sm',
            'square' => 'size-6 p-1.5'
        ],
        'large' => [
            'content' => 'px-2.5 py-1.5',
            'square' => 'size-8 p-2'
        ]
    ];
@endphp

<x-button class="{{ $_size[$size][$dimensions] }}" :attributes="$attributes">
    {{ $slot }}
</x-button>
