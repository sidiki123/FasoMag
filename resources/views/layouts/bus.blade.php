<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> {{ $title }} </title>
        @include('layouts/partials/_links')
    </head>
    <body>
        
        @include('layouts/partials/_menu')
        @yield('test')

        @include('layouts/partials/_scripts')
    </body>
</html>