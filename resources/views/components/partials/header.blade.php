<div>
    <nav class="bg-gray-800">
        <div class="container flex">
            <x-header.category-dropdown />
            <div class="flex items-center justify-between flex-grow md:pl-12 py-5">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="{{ route('home') }}" class="text-gray-200 hover:text-white transition">Home</a>
                </div>

                <x-header.search-bar />
            </div>
        </div>
    </nav>
</div>
