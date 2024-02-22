<x-layout.app>
    <x-partials.banner :category="$categories->random()" />

    <x-partials.features />

    <x-partials.categories :categories="$categories" />

    <x-partials.product-grid :title="'products of the week 🔥'" :products="$productsOfTheWeek" />

    <x-partials.product-grid :title="'recomended for you'" :products="$recommendedProducts" />
</x-layout.app>
