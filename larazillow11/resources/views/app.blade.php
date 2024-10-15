<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- insert the link to the bundled compiled file that is being bundles by Vite --}}
    @vite('resources/js/app.js')
    {{-- add all link that Inertia require --}}
    @inertiaHead
</head>

<body>
    {{-- insert a div element that will hold the view application --}}
    @inertia
</body>

</html>
