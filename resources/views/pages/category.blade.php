<x-layout.app>
    <div class="py-24 bg-fixed bg-no-repeat bg-cover"
        style="background-image: url('{{ $category->image }}')"></div>

    <x-partials.navigation.breadcrumbs>
        <a href="{{ route('home') }}" class="text-primary text-base">
            <icon>🏠</icon>
        </a>

        <icon class="text-sm text-gray-700">→</icon>

        <p class="text-primary text-base"> {{ $category->name }} </p>
    </x-partials.navigation.breadcrumbs>
</x-layout.app>
