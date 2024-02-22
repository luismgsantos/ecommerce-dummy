<style>
    .dropdown:hover>.dropdown-content {
        display: block;
    }
</style>
<div class="dropdown inline-block relative my-auto ml-7 z-10">
    <a class="bg-gray-700 text-white font-semibold p-4 rounded inline-flex items-center"
        href="{{ route('home') }}">
        <span>All Categories</span>
    </a>
    <ul class="dropdown-content absolute hidden bg-white pt-1 min-w-48 rounded">

        @foreach ($categories as $category)
            <li class="dropdown">
                <a class="hover:bg-gray-100 text-gray-700  py-2 px-4 block whitespace-no-wrap"
                    href="{{ route('category', $category) }}">
                    {{ $category->name }}
                </a>

                @if ($category->subcategories->count() > 0)
                    @foreach ($category->subcategories as $subcategory)
                        <ul class="dropdown-content absolute hidden pl-5 ml-40 -mt-10 min-w-48">
                            <li>
                                <a class="bg-white hover:bg-gray-100 text-gray-700  py-2 px-4 block whitespace-no-wrap rounded"
                                    href="{{ route('subcategory', [$category, $subcategory]) }}">
                                    {{ $subcategory->name }}
                                </a>
                            </li>
                        </ul>
                    @endforeach
                @endif
            </li>
        @endforeach
    </ul>
</div>
