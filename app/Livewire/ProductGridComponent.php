<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;
use Livewire\Attributes\Computed;

class ProductGridComponent extends Component
{
    use WithPagination, WithoutUrlPagination;

    public string $title = 'All Products';

    public $category;
    public $subcategory;

    public function mount()
    {
    }

    #[Computed()]
    public function products()
    {
        return Product::when($this->category, fn ($query, $category) => $query->where('category_id', $category))
            ->when($this->subcategory, fn ($query, $subcategory) => $query->where('subcategory_id', $subcategory))
            ->simplePaginate(5);
    }

    public function sort(string $field, string $direction = 'desc')
    {
        $this->products = Product::when($this->category, fn ($query, $category) => $query->where('category_id', $category))
            ->when($this->subcategory, fn ($query, $subcategory) => $query->where('subcategory_id', $subcategory))
            ->orderBy($field, $direction)
            ->simplePaginate(5);
    }

    public function render()
    {
        return view('livewire.product-grid-component', [
            'products' => Product::simplePaginate(5),
        ]);
    }
}
