<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InventoryController;


Route::get('/category/{categoryName}', [ProductController::class, 'index']);
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/single-product', [PageController::class, 'singleproducts'])->name('single-product');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/men', [CategoryController::class, 'men'])->name('categories.men');
Route::get('/women', [CategoryController::class, 'women'])->name('categories.women');
Route::get('/kids', [CategoryController::class, 'kids'])->name('categories.kids');
 Route::get('/welcome', function () {
     return view('welcome');
 });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('inventory', InventoryController::class);
Route::get('/inventory/{inventory}', [InventoryController::class, 'show'])->name('inventory.show');
Route::get('/inventory/{inventory}/edit', [InventoryController::class, 'edit'])->name('inventory.edit');
Route::post('/inventory', [InventoryController::class, 'store'])->name('inventory.store');
Route::put('/inventory/{id}', [InventoryController::class, 'update'])->name('inventory.update');
});

require __DIR__ . '/auth.php';



// Resource routes for InventoryController

