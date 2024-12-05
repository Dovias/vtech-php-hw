<x-action.button
    type="submit"
    variant="primary"
    size="large"

    :form="$form"
    :attributes="$attributes"
>
    {{ $slot }}
</x-action.button>
