@extends('layouts.dashboard')

@section('content')
    <ul class="grid auto-rows-[1fr] gap-4">
        @auth
            <li class="grid mb-4">
                <x-button
                    route="login"
                    variant="secondary"
                    class="flex items-center justify-center text-6xl"
                >
                    <x-plus.icon class="max-w-6"/>
                </x-button>
            </li>
        @endauth
        @foreach(App\Models\Conference::All() as $conference)
            <li>
                <article class="grid grid-rows-[1fr-min-content] grid-cols-[1fr_min-content] gap-x-12 gap-y-6 p-3 rounded-lg shadow-md border">
                    <div>
                        <p class="text-xl font-semibold">{{ $loop->iteration.'. '.$conference->name }}</p>
                        <p class="text-sm">{{ $conference->description }}</p>
                    </div>
                    <div>
                        <x-action.button route="login" variant="primary" class="block">Koreguoti</x-action.button>
                        <x-action.button route="login" variant="dangerous" class="mt-1.5 block">Ištrinti</x-action.button>
                    </div>
                    <p class="text-xs text-nowrap"><x-location.icon class="inline h-[1em] mb-0.5 mr-1.5 align-middle"/>{{ $conference->address }}</p>
                    <p class="text-xs text-nowrap"><x-calendar.icon class="inline h-[1em] mb-0.5 mr-1.5 align-middle"/>{{ $conference->date }}</p>
                </article>
            </li>
        @endforeach
    </ul>
@endsection
