<div class="container pb-16 mx-auto">
    <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">{{ $title }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        @foreach ($products as $product)
            <x-product.product-card :product="$product" />
        @endforeach
    </div>
</div>
