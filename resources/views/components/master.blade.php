<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CarsLivewireApp</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <livewire:styles />
    </head>
    <body>
        <nav class="navbar navbar-light bg-dark text-white justify-content-between">
            <a class="navbar-brand text-white" href="{{ route('home') }}">CarsLivewireApp</a>
            <a class="navbar-brand text-white" href="{{ route('contact') }}">ContactUs</a>
        </nav>
        {{$slot}}
        <livewire:scripts />
    </body>
</html>