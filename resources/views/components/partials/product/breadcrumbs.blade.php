<div class="container mx-auto py-4 pt-5 flex items-center gap-3">
    <a href="{{ route('home') }}" class="text-primary text-base">
        <icon>🏠</icon>
    </a>
    <a href="{{ route('category', [
        'category' => $product->category,
        'category' => $product->category,
    ]) }}"
        class="text-primary text-base"> {{ $product->category->name }} </a>
    <p class="text-gray-600 font-medium"></p>
    <span class="text-sm text-gray-700">
        <icon>→</icon>
    </span>
    <a href="{{ route('subcategory', [
        'category' => $product->category,
        'subcategory' => $product->subcategory,
    ]) }}"
        class="text-primary text-base"> {{ $product->subcategory->name }} </a>
    <p class="text-gray-600 font-medium"></p>
    <span class="text-sm text-gray-700">
        <icon>→</icon>
    </span>
    <p class="text-gray-600 font-medium">{{ $product->name }}</p>
</div>
