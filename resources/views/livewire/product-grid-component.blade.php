<div class="container pb-16 pt-8 mx-auto">
    <div class="flex justify-start items-center py-3 mb-6">
        <h2 class="text-2xl font-medium text-gray-800 uppercase items-center">
            {{ $title }}
        </h2>

        <div class="dropdown relative ml-10 z-10">
            <a class="bg-gray-700 text-white font-semibold p-2 rounded inline-flex items-center">
                <span>Sort by: Featured</span>
            </a>
            <ul class="dropdown-content absolute hidden bg-white p-2 min-w-48 rounded border border-gray-300 text-left">
                <li class="dropdown">
                    <a href="" class="hover:bg-gray-100 text-gray-700  py-2 px-4 block"
                        wire:click.prevent="sort('price', 'asc')">
                        Price: Low to High
                    </a>
                    <a href="" class="hover:bg-gray-100 text-gray-700  py-2 px-4 block"
                        wire:click.prevent="sort('price')">
                        Price: High to Low
                    </a>
                    <a href="" class="hover:bg-gray-100 text-gray-700  py-2 px-4 block"
                        wire:click.prevent="sort('name', 'asc')">
                        Name: Ascending
                    </a>
                    <a href="" class="hover:bg-gray-100 text-gray-700  py-2 px-4 block"
                        wire:click.prevent="sort('name')">
                        Name: Descending
                    </a>
                    <a href="" class="hover:bg-gray-100 text-gray-700  py-2 px-4 block"
                        wire:click.prevent="sort('likes')">
                        Most Liked
                    </a>
                </li>
            </ul>
        </div>
        <div class="flex flex-grow justify-end">
            {{ $this->products->links(data: ['scrollTo' => false]) }}
        </div>

    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        @foreach ($this->products as $product)
            <x-product.product-card :product="$product" />
        @endforeach
    </div>
</div>
