<x-modal class="min-w-80" :attributes="$attributes">
    <x-slot name="heading">
        {{__('modal.login.title')}}
    </x-slot>
    <x-slot name="content">
        <x-text-field type="text" name="username" label="{{ __('modal.login.field.username.label') }}" placeholder="{{ __('modal.login.field.username.placeholder') }}" />
        <x-text-field type="password" name="password" label="Slaptažodis" placeholder="•••••••••"/>
    </x-slot>
    <x-slot name="footer">
        <x-button emphasis="100" significance="200">{{ __('modal.login.button.login.label') }}</x-button>
    </x-slot>
</x-modal>
