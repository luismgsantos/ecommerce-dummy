<x-layout.app>
    <main>
        <x-partials.banner :category="$categories->random()" />


        <x-partials.categories :categories="$categories" />

        <x-partials.product-grid :title="'Most liked products ❤️'" :products="$productsMostLiked" />

        <livewire:product-grid-component />

        <x-partials.features />
    </main>
</x-layout.app>
