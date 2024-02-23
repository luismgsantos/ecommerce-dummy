<div class="container pb-16 pt-8 mx-auto">
    <div class="flex justify-between items-center py-3 mb-6">
        <h2 class="text-2xl font-medium text-gray-800 uppercase items-center">{{ $title }}</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        @foreach ($products as $product)
            <x-product.product-card :product="$product" />
            {{-- <livewire:product-card :product="$product" /> --}}
        @endforeach
    </div>
</div>
