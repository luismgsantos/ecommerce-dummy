<div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url('{{ $category->image }}');">
    <div class="container mx-auto">
        <h1 class="text-6xl text-gray-800 font-medium mb-4 capitalize">
            {{ $category->name }}
        </h1>
        <p>{{ $category->description }}</p>
        <div class="mt-12">
            <a href="{{ route('category', $category) }}"
                class="border border-primary text-white bg-gray-800 px-8 py-3 font-medium
                    rounded-md hover:bg-white hover:text-gray-800">
                Shop Now
            </a>
        </div>
    </div>
</div>
