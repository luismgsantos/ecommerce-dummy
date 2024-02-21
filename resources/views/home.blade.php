<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-partials.header />

    <main>
        <x-partials.banner :category="$categories->random()" />

        <x-partials.features />

        <x-partials.categories :categories="$categories"/>

        <x-partials.product-grid :title="'products of the week 🔥'" :products="$productsOfTheWeek"/>

        <x-partials.ads />

        <x-partials.product-grid :title="'recomended for you'" :products="$recommendedProducts"/>
    </main>

    <x-partials.footer />

    <x-partials.copyright />

</body>

</html>
