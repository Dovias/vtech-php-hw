@extends('layouts.app')

@php
    use Illuminate\Support\Facades\Route;

    # Routes which navigation bar will render:
    $routes = collect([
        Route::getRoutes()->getByName('conferences')
    ]);
@endphp

@section('body')
    <nav class="flex justify-center px-12 bg-white shadow-lg shadow-black[50%]">
        <div class="flex items-center">
            <a href="{{route('home')}}" class="min-w-28 pl-4 pt-4 pr-6 pb-4 text-blue-700 transition hover:bg-gray-100 active:bg-gray-200">
                <x-branding />
            </a>
        </div>
        <ul class="flex flex-1">
            @foreach ($routes as $route)
                <li class="h-full border-b-4 {{request()->routeIs($route->getName()) ? 'border-blue-600' : 'border-transparent transition hover:border-gray-100'}}">
                    <a href="{{route($route->getName())}}"
                       class="flex items-center h-full px-4 transition hover:bg-gray-100 active:bg-gray-200">
                        {{__('route.'.$route->getName().'.title')}}
                    </a>
                </li>
            @endforeach
        </ul>
        <div class="flex items-center gap-2">
            @guest
                <x-navigation.button
                    route="login"
                    dimensions="content"
                >
                    {{ __('navigation.login.button.label') }}
                </x-navigation.button>
            @endguest
            @auth
                <p class="text-sm leading-4">{{ __('navigation.logged.in.user') }}<strong class="block font-bold">{{ Auth::user()->username }}</strong></p>
                <x-form id="logout" name="logout" route="logout" method="post" />
                <x-submit.button
                    form="logout"
                    dimensions="content"
                >
                    {{ __('navigation.logout.button.label') }}
                </x-submit.button>
            @endauth
        </div>
    </nav>
    <div class="m-12">
        <header class="my-8">
            <h1 class="font-medium text-4xl">{{__('route.'.Route::getCurrentRoute()->getName().'.title')}}</h1>
            <p>{{__('route.'.Route::getCurrentRoute()->getName().'.description')}}</p>
            @yield('header')
        </header>
        <main>
            @yield('content')
        </main>
    </div>
@endsection
