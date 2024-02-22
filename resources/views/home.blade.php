<x-layout.app>
    <main>

    <x-partials.features />

    <x-partials.categories :categories="$categories" />

    <x-partials.product-grid :title="'products of the week 🔥'" :products="$productsOfTheWeek" />

    </main>
</x-layout.app>
