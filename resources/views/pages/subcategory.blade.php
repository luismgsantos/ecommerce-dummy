<x-layout.app>
    <div class="py-24 bg-fixed bg-blend-lighten bg-no-repeat bg-cover"
        style="background-image: url('{{ $subcategory->image }}')"></div>

    <x-partials.navigation.breadcrumbs>
        <a href="{{ route('home') }}" class="text-primary text-base">
            <icon>🏠</icon>
        </a>
        <icon class="text-sm text-gray-700">→</icon>
        <a href="{{ route('category', ['category' => $subcategory->category]) }}" class="text-primary text-base">
            {{ $subcategory->category->name }}
        </a>
        <icon class="text-sm text-gray-700">→</icon>
        <p class="text-primary text-base">
            {{ $subcategory->name }}
        </p>
    </x-partials.navigation.breadcrumbs>
</x-layout.app>
