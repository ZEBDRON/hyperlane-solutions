<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Hyperlane Solutions' }}</title>

    @vite([
        'resources/scss/app.scss',
        'resources/js/app.js'
    ])
</head>

<body>

<x-header />

{{ $slot }}

<x-footer />

</body>

</html>