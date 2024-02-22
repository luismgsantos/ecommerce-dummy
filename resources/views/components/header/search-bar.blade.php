<div class="flex" x-data="initComponent()">
    <input type="text" class="border border-gray-200 rounded-l-lg outline-none px-4 py-2 w-96" placeholder="Search..."
        x-model.debounce="term"
        @keyup.enter.debounce.500ms="fetch('search?' + new URLSearchParams({search: term }))
                      .then(response => response.json())
                      .then(data => results = data)
                      .catch(error => console.log('Something went wrong while searching for products'))
                      .then(rs => console.log(rs))">
    <button class="bg-orange-300 text-white px-4 py-2 rounded-r-lg">🔍</button>
    <template x-if="results.length >= 0 && term !== ''">
        <div class="absolute mt-10 border border-gray-200 bg-white divide-y divide-gray-100 rounded-lg shadow min-w-96">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                <template x-for="product in results">
                    <li>
                        <a x-bind:href="'/products/' + product.slug"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                            x-text="product.name"></a>
                    </li>
                </template>

                <template x-if="results.length === 0">
                    <li>
                        <span class="block px-4 py-2">No results found</span>
                    </li>
                </template>
            </ul>
        </div>
    </template>
</div>

<script>
    function initComponent() {
        return {
            term: '',
            results: []
        }
    }
</script>
