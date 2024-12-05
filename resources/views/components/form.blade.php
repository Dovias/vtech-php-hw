<form
    @if (!isset($action) && isset($route))
        action="{{ is_array($route) ? route($route[0], array_slice($route, 1)) : route($route) }}"
    @endif

    @if (isset($method))
        method="{{
            strtolower($method) === 'get' || strtolower($method) === 'post'
                ? $method
                : 'post'
        }}"
    @endif

    {{ $attributes->except('route') }}
>
    @csrf
    @if (isset($method) && strtolower($method) !== 'get' && strtolower($method) !== 'post')
        @method($method)
    @endif

    @if (isset($name))
        @error($name)
            <p class="bg-red-200 text-red-900 rounded-md border border-red-300 p-2">{{ __($message) }}</p>
        @enderror
    @endif
    {{ $slot }}
</form>
