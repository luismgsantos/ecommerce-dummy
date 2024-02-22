<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('home')
        ->with('categories', Category::orderByDesc('id')->take(6)->get())
        ->with('productsOfTheWeek', Product::inRandomOrder()->take(4)->get())
        ->with('recommendedProducts', Product::inRandomOrder()->take(8)->get());
})->name('home');

Route::group(['prefix' => 'products'], function () {
    Route::get('/search', function (Request $request) {
        return Product::search($request->search)->take(5)->get();
    });

    Route::get('/{product}', function (Product $product) {
        return view('pages.product')->with('product', $product);
    })->name('product');
});

Route::get('/{category}', function (Category $category) {
    return view('pages.category')->with('category', $category);
})->name('category');

Route::get('/{category}/{subcategory}', function (Category $category, Subcategory $subcategory) {
    return view('pages.subcategory')->with('subcategory', $subcategory);
})->name('subcategory');


