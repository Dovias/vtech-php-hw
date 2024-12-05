@extends('layouts.app')

@section('body')
    <div class="flex items-center justify-center flex-col gap-12 min-w-[100vw] min-h-[100vh]">
        <a href="{{route('home')}}" class="min-w-36 text-blue-700">
            <x-branding />
        </a>
        <div class="w-80 rounded-md border shadow-lg">
            <header class="flex items-center justify-between p-4 border-b">
                <h2 class="text-lg">{{ __('route.login.title') }}</h2>
            </header>
            <x-form id="login" name="user" route="login" method="post" class="p-4">
                <x-text.field
                    type="text"
                    name="username"
                    value="{{ old('username') }}"
                    label="{{ __('route.login.form.field.username.label') }}"
                    placeholder="{{ __('route.login.form.field.username.placeholder') }}"
                />
                <x-text.field
                    type="password"
                    name="password"
                    value="{{ old('password') }}"
                    label="{{ __('route.login.form.field.password.label') }}"
                    placeholder="{{ __('route.login.form.field.password.placeholder') }}"
                />
            </x-form>
            <footer class="flex items-center justify-end gap-2 p-4 border-t">
                <x-action.button variant="primary" size="large" form="login" dimensions="content">
                    {{ __('route.login.form.button.authenticate.label') }}
                </x-action.button>
            </footer>
        </div>
    </div>
@endsection
