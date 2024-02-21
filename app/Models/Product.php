<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Number;

class Product extends Model
{
    use HasFactory;

    public function subcategory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Subcategory::class, 'subcategory_id');
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'product_category');
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Get the product's price with the currency symbol.
     */
    public function readablePrice(): string
    {
        return Number::currency($this->price, in: 'EUR');
    }

    /**
     * Get the product's price with added 20€ and rounded for displaying reasons.
     */
    public function scratchedPrice(): string
    {
        return Number::currency(round($this->price + 20), in: 'EUR');
    }
}
