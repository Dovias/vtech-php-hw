@extends('layouts.app')

@php
    use Illuminate\Support\Facades\Route;

    # Routes which navigation bar will render:
    $routes = collect([
        Route::getRoutes()->getByName('conferences')
    ]);
@endphp

@section('body')
    <x-navigation-bar :routes="$routes" />
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
