<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Models\brands;
use App\Models\categories;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/items",[ItemController::class, "items"]);

Route::get("/items/create",[ItemController::class, "create_item"]);

Route::post("/items",[ItemController::class, "create"])->name("post.items");

Route::get("/items/{item_id}",[ItemController::class, "show_item"]);

Route::get("/items/{item_id}/edit",[ItemController::class, "edit"]);

Route::patch("/items/{item_id}",[ItemController::class, "update"])->name("update.items");

Route::delete("/items/{item_id}",[ItemController::class, "delete"])->name("destroy.items");








Route::get("/categories",[CategoryController::class,"categories"]);

Route::get("/categories/{category_id}",[CategoryController::class,"one_category"]);

Route::post("/categories/create",[CategoryController::class,"create_category"])->name("post.category");

Route::get("/categories/create",[CategoryController::class,"create"]);

Route::get("/categories/{category_id}/edit",[CategoryController::class,"edit"]);

Route::patch("/categories/{category_id}/edit",[CategoryController::class,"update"])->name("update.categories");

Route::delete("/category/{category_id}",[CategoryController::class,"delete"])->name("destroy.category");






Route::get("/brands",[BrandController::class,"brands"]);

Route::get("/brands/{brand_id}",[BrandController::class,"one_brand"]);

Route::get("/brands/{brand_id}/edit",[BrandController::class,"edit"]);

Route::patch("/brands/{brand_id}/edit",[BrandController::class,"update"])->name("update.brands");

Route::delete("/brands/{brand_id}",[BrandController::class,"delete"])->name("destroy.brands");

Route::get("/brands/create",[BrandController::class, "create_brand"]);

Route::post("/brands/create",[BrandController::class, "create"])->name("post.brand");