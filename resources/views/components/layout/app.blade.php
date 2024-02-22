<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body>
    <x-partials.header />

    <main>
        {{ $slot }}
    </main>

    <x-partials.footer />

    <x-partials.copyright />

</body>

</html>
