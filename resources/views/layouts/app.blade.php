<!DOCTYPE html>
<html lang="{!! App::currentLocale() !!}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        @vite([
            'resources/js/app.js',
            'resources/css/app.css'
        ])

        <title>@yield('title')</title>
    </head>
    <body>
        @yield('body')
    </body>
</html>