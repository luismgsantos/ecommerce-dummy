<div class="bg-white shadow rounded overflow-hidden group flex flex-col">
    <div class="relative h-56 mb-auto">
        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="object-none h-56 w-96">
        <div
            class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">
            <a href="{{ route('product', $product) }}"
                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition"
                title="view product">
                🔍
            </a>
            <button
                class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition focus:ring-4 active:scale-75"
                title="like this product" wire.click="increment">
                ❤️
            </button>
        </div>
    </div>

    <div class="pt-4 pb-3 px-4 mt-auto">
        <a href="#">
            <a href="{{ route('product', $product) }}"
                class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition">
                {{ $product->name }}
            </a>
        </a>
        <div class="flex items-baseline mb-1 space-x-2">
            <p class="text-xl text-primary font-semibold">{{ $product->readablePrice() }}</p>
            <p class="text-sm text-gray-400 line-through">{{ $product->scratchedPrice() }}</p>
        </div>
        <div class="flex items-center">
            <div class="flex gap-1 text-sm text-yellow-400">
                <span>❤️</span>
            </div>
            <div class="text-xs text-gray-500 ml-3">{{ $product->likes }}</div>
        </div>
    </div>
    <a x-data href=""
        class="block w-full py-1 text-center text-white bg-gray-800 border border-primary rounded-b hover:bg-white hover:text-gray-800 transition"
        @click.prevent="alert('We are going to send your fictitious product ASAP!');">
        Add to cart
    </a>
</div>
