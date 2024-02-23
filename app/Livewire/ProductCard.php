<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCard extends Component
{
    public $product;

    public function mount(Product $product)
    {
    }

    public function like()
    {
        info('like');
        $this->product->likes++;
        // $this->product->save();
    }

    public function render()
    {
        return view('livewire.product-card');
    }
}
