<div>
    <nav class="bg-gray-800">
        <div class="container flex">
            <x-header.category-dropdown />
            <div class="flex items-center justify-between flex-grow md:pl-12 py-5">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="{{ route('home') }}" class="text-gray-200 hover:text-white transition">Home</a>
                    <a href="pages/shop.html" class="text-gray-200 hover:text-white transition">Shop</a>
                    <a href="#" class="text-gray-200 hover:text-white transition">About us</a>
                    <a href="#" class="text-gray-200 hover:text-white transition">Contact us</a>
                </div>

                <x-header.search-bar />

                <a href="pages/login.html" class="text-gray-200 hover:text-white transition">Login</a>
            </div>
        </div>
    </nav>
</div>
