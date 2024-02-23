<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scaffold shop</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <x-partials.header />

    {{ $slot }}

    <x-partials.footer />

    <x-partials.copyright />

    @livewireScripts
</body>

</html>
