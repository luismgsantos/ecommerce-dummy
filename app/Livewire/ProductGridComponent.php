<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductGridComponent extends Component
{
    public $products;

    public function mount()
    {
        $this->products = Product::all();
    }

    public function sort(string $field, string $direction = 'desc')
    {
        $this->products = $this->products->sortBy($field, SORT_REGULAR, $direction === 'desc');
    }

    public function render()
    {
        return view('livewire.product-grid-component');
    }
}
