<x-layout.app>
    <x-partials.categories.picker :title="'Other subcategories you might like'" :subcategories="$subcategory->category->subcategories" />
    <x-partials.product-grid :title="$subcategory->icon . $subcategory->name" :products="$subcategory->products" />
</x-layout.app>
