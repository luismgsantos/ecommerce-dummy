<div class="px-8 py-4 bg-primary md:flex items-center cursor-pointer relative group hidden">
    <span class="text-white">
        🍔
    </span>
    <span class="capitalize ml-2 text-white hidden">All Categories</span>
    <!-- dropdown -->
    <div
        class="absolute w-100 left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-dashed opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible">
        @foreach (App\Models\Category::all() as $category)
            <a href="{{ route('category', $category) }}" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                <i>{{ $category->icon }}</i>
                <span class="ml-6 text-gray-600 text-sm">{{ $category->name }}</span>
            </a>
        @endforeach

    </div>
</div>
