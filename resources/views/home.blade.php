<x-layout.app>
    <main>
        <x-partials.banner :category="$categories->random()" />

        <x-partials.features />

        <x-partials.categories :categories="$categories" />

        <x-partials.product-grid :title="'Most liked products ❤️'" :products="$productsMostLiked" />

        <div class="flex flex-col justify-items-center">
            <div class="container mx-auto">
                <div class="dropdown relative ml-auto text-right z-10">
                    <a class="bg-gray-700 text-white font-semibold p-2 rounded inline-flex items-center">
                        <span>Sort by: Featured</span>
                    </a>
                    <ul class="dropdown-content absolute hidden bg-white pt-1 px-2 min-w-48 rounded right-0">
                        <li class="dropdown">
                            <a class="hover:bg-gray-100 text-gray-700  py-2 px-4 block"
                                href="{{ route('home', ['sort' => 'price', 'dir' => 'asc']) }}">
                                Price: Low to High
                            </a>
                            <a class="hover:bg-gray-100 text-gray-700  py-2 px-4 block"
                                href="{{ route('home', ['sort' => 'price']) }}">
                                Price: High to Low
                            </a>
                            <a class="hover:bg-gray-100 text-gray-700  py-2 px-4 block"
                                href="{{ route('home', ['sort' => 'name', 'dir' => 'asc']) }}">
                                Name: Ascending
                            </a>
                            <a class="hover:bg-gray-100 text-gray-700  py-2 px-4 block"
                                href="{{ route('home', ['sort' => 'name']) }}">
                                Name: Descending
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <x-partials.product-grid :title="'All products'" :products="$products" />
        </div>
    </main>
</x-layout.app>
