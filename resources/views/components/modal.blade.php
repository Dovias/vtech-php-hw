<dialog class="rounded-md backdrop:bg-black/50 backdrop:transition {{ $class }}" id="{{ $id }}" data-modal>
    <header class="flex items-center justify-between p-2 border-b">
        <h2 class="text-lg">{{ $heading }}</h2>
        <button data-modal-close-button class="size-8 p-2.5 ml-8 text-neutral-800 rounded-md transition hover:bg-gray-100 active:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="currentColor" d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
        </button>
    </header>
    <div class="p-2">
        {{ $content }}
    </div>
    <footer class="flex items-center justify-end gap-2 p-2 border-t">
        {{ $footer }}
    </footer>
</dialog>
