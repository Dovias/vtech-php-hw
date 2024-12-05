<label class="block my-4 text-sm">
    {{ $label }}
    @if (isset($type) && strtolower($type) === 'textarea')
        <textarea {{ $attributes->except('type') }}></textarea>
    @else
        <input {{ $attributes }} />
    @endif
    @if (isset($name))
        @error($name)
        <p class="text-red-700">{{ __($message) }}</p>
        @enderror
    @endif
</label>
