<label class="block my-4 text-sm">
    {{ $label }}
    <input {{ $attributes }} class="block w-full p-2 my-2 border rounded-md outline-blue-600">
    @if (isset($name))
        @error($name)
            <p class="text-red-700">{{ __($message) }}</p>
        @enderror
    @endif
</label>
