<x-layout.app>
    <x-partials.product.breadcrumbs :product="$product" />

    <div class="container mx-auto grid grid-cols-2 gap-6">
        <div>
            <img src="{{ $product->image }}" alt="product" class="w-full">
        </div>

        <div>
            <h2 class="text-3xl font-medium uppercase mb-2">{{ $product->name }}</h2>
            <div class="flex items-center mb-4">
                <div class="text-xs text-gray-500 ml-3">({{ $product->likes }} Likes)</div>
            </div>
            <div class="space-y-2">
                <p class="text-gray-800 font-semibold space-x-2">
                    <span>Availability: </span>
                    <span class="text-green-600">In Stock</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Model: </span>
                    <span class="text-gray-600 capitalize">{{ $product->model }}</span>
                </p>
                <p class="space-x-2">
                    <span class="text-gray-800 font-semibold">Category: </span>
                    <span class="text-gray-600 capitalize">{{ $product->category->name }}</span>
                </p>
            </div>
            <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">
                <p class="text-xl text-primary font-semibold">{{ $product->readablePrice() }}</p>
                <p class="text-base text-gray-400 line-through">{{ $product->scratchedPrice() }}</p>
            </div>

            <p class="mt-4 text-gray-600">
                {{ $product->description }}
            </p>

            <div class="mt-6 flex gap-3 border-b border-gray-200 pb-5 pt-5">
                <a href="#"
                    class="bg-gray-600 border border-primary text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-gray-600 transition">
                    <i class="fa-solid fa-bag-shopping"></i> Add to cart
                </a>
                <a href="#"
                    class="border border-gray-300 text-gray-600 px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:text-primary transition">
                    <icon>❤️</icon> Like
                </a>
            </div>
        </div>
    </div>

    <div class="container mx-auto pb-16 pt-8">
        <h3 class="border-b border-gray-200 font-roboto text-gray-800 pb-3 font-medium text-xl">Product details</h3>
        <div class="w-3/5 pt-6">
            <div class="text-gray-600">
                {{ $product->description }}
            </div>
        </div>
    </div>
</x-layout.app>
