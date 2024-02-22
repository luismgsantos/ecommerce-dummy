<x-layout.app>
    <x-partials.categories.picker :title="$category->name" :subcategories="$category->subcategories" />

    <x-partials.product-grid :title="$category->icon . $category->name" :products="$category->products" />

    <div class="container pb-16 mx-auto">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">You might also like</h2>
    </div>

    @foreach ($category->subcategories as $subcategory)
        <x-partials.product-grid :title="$subcategory->icon . $subcategory->name" :products="$subcategory->products" />
    @endforeach
</x-layout.app>
