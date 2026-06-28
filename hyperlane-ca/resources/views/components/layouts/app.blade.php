<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Hyperlane Solutions' }}</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">

    @vite('resources/js/app.js')

@livewireStyles

</head>

<body>

<x-header />

{{ $slot }}

<x-footer />

@livewireScripts

</body>

</html>