@extends('layouts.dashboard')

@section('content')
    <x-form id="conference" name="conference" route="conference.add" method="post" class="pb-8 border-b">
        <div class="grid grid-cols-2 gap-4">
            <x-text.field
                label="{{ __('route.conference.add.form.field.address.label') }}"
                name="address"
                value="{{ old('address') }}"
            />
            <x-date.field
                label="{{ __('route.conference.add.form.field.date.label')}}"
                name="date"
                value="{{ old('date') }}"
            />
        </div>
        <x-text.field
            label="{{ __('route.conference.add.form.field.name.label') }}"
            name="name"
            value="{{ old('name') }}"
        />
        <x-text.area.field
            label="{{ __('route.conference.add.form.field.description.label') }}"
            name="description"
            value="{{ old('description') }}"
            rows="7"
        />
    </x-form>
    <div class="flex justify-end gap-4 my-8">
        <x-action.button variant="secondary" route="conferences">{{ __('route.conference.add.form.button.cancel.label') }}</x-action.button>
        <x-action.button variant="primary" form="conference">{{ __('route.conference.add.form.button.add.label') }}</x-action.button>
    </div>
@endsection
