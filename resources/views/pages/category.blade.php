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
        <x-partials.categories.picker :title="$category->name" :subcategories="$category->subcategories" />

        <x-partials.product-grid :title="$category->icon . $category->name" :products="$category->products"/>

        <div class="container pb-16 mx-auto">
            <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">You might also like</h2>
        </div>

        @foreach ($category->subcategories as $subcategory)
            <x-partials.product-grid :title="$subcategory->icon . $subcategory->name" :products="$subcategory->products"/>
        @endforeach
    </main>

    <x-partials.footer />

    <x-partials.copyright />

</body>

</html>
