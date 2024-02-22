<x-layout.app>
    <main>
        <x-partials.navigation.breadcrumbs>
            <a href="{{ route('home') }}" class="text-primary text-base">
                <icon>🏠</icon>
            </a>
            <icon class="text-sm text-gray-700">→</icon>
            <a href="{{ route('category', ['category' => $product->subcategory->category]) }}" class="text-primary text-base">
                {{ $product->subcategory->category->name }}
            </a>
            <icon class="text-sm text-gray-700">→</icon>
            <a href="{{ route('subcategory', ['category' => $product->subcategory->category, 'subcategory' => $product->subcategory]) }}"class="text-primary text-base">
                {{ $product->subcategory->name }}
            </a>
            <icon class="text-sm text-gray-700">→</icon>
            <p class="text-gray-600 font-medium">{{ $product->name }}</p>
        </x-partials.navigation.breadcrumbs>

        <div class="container mx-auto grid grid-cols-2 gap-6">
            <div>
                <img src="{{ $product->image }}" alt="product" class="w-full">
            </div>

            <div>
                <h2 class="text-3xl font-medium uppercase mb-2">{{ $product->name }}</h2>
                <div class="flex items-center mb-4">
                    <div class="text-md text-gray-500 ml-3">( {{ $product->likes }} ❤️ )</div>
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
                        x-data
                        class="bg-gray-600 border border-primary text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:bg-transparent hover:text-gray-600 transition"
                        @click.prevent="alert('We are going to send your fictitious product ASAP!');">
                        Add to cart
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
    </main>
</x-layout.app>
