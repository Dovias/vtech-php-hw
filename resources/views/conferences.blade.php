@extends('layouts.dashboard')

@section('content')
    <ul class="grid auto-rows-[10rem] gap-4">
        @auth
            <li class="grid mb-4">
                <x-button
                    route="conference.add"
                    variant="secondary"
                    class="flex items-center justify-center text-6xl"
                >
                    <x-plus.icon class="max-w-6"/>
                </x-button>
            </li>
        @endauth
        @foreach(App\Models\Conference::All() as $conference)
            <li>
                <article class="grid grid-rows-[1fr-min-content] grid-cols-[1fr_min-content] gap-x-12 gap-y-6 h-full p-3 rounded-lg shadow-md border">
                    <div>
                        <p class="text-xl font-semibold">{{ $loop->iteration.'. '.$conference->name }}</p>
                        <p class="text-sm">{{ $conference->description }}</p>
                    </div>
                    <div>
                        @auth
                            <x-action.button route="login" variant="primary" class="block w-full">
                                {{ __('route.conferences.list.entry.edit.button.label') }}
                            </x-action.button>
                            <x-form id="delete" :route="['conference.delete', $conference->id]" method="delete"></x-form>
                            <x-action.button form="delete" variant="dangerous" class="mt-1.5 block w-full">
                                {{ __('route.conferences.list.entry.delete.button.label') }}
                            </x-action.button>
                        @endauth
                        @guest
                            <x-action.button route="login" variant="primary" class="block">
                               {{ __('route.conferences.list.entry.preview.button.label') }}
                            </x-action.button>
                        @endguest
                    </div>
                    <p class="mt-auto text-xs text-nowrap"><x-location.icon class="inline h-[1em] mb-0.5 mr-1.5 align-middle"/>{{ $conference->address }}</p>
                    <p class="mt-auto text-xs text-nowrap"><x-calendar.icon class="inline h-[1em] mb-0.5 mr-1.5 align-middle"/>{{ $conference->date }}</p>
                </article>
            </li>
        @endforeach
    </ul>
@endsection
