<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SessionController;
use App\Http\Middleware\LoggerMiddleware;
use App\Models\brands;
use App\Models\categories;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/items",[ItemController::class, "items"])->middleware(LoggerMiddleware::class);
Route::get("/items/create",[ItemController::class, "create_item"])->middleware(LoggerMiddleware::class);
Route::post("/items",[ItemController::class, "create"])->name("post.items")->middleware(LoggerMiddleware::class);
Route::get("/items/{item_id}",[ItemController::class, "show_item"])->middleware(LoggerMiddleware::class);
Route::get("/items/{item_id}/edit",[ItemController::class, "edit"])->middleware(LoggerMiddleware::class);
Route::patch("/items/{item_id}",[ItemController::class, "update"])->name("update.items")->middleware(LoggerMiddleware::class);
Route::delete("/items/{item_id}",[ItemController::class, "delete"])->name("destroy.items")->middleware(LoggerMiddleware::class);

Route::get("/categories",[CategoryController::class,"categories"])->middleware(LoggerMiddleware::class);
Route::post("/categories/create",[CategoryController::class,"create_category"])->name("post.category")->middleware(LoggerMiddleware::class);
Route::get("/categories/create",[CategoryController::class,"create"])->middleware(LoggerMiddleware::class);
Route::get("/categories/{category_id}",[CategoryController::class,"one_category"])->middleware(LoggerMiddleware::class);
Route::get("/categories/{category_id}/edit",[CategoryController::class,"edit"])->middleware(LoggerMiddleware::class);
Route::patch("/categories/{category_id}/edit",[CategoryController::class,"update"])->name("update.categories")->middleware(LoggerMiddleware::class);
Route::delete("/category/{category_id}",[CategoryController::class,"delete"])->name("destroy.category")->middleware(LoggerMiddleware::class);


Route::get("/brands/create",[BrandController::class, "create_brand"])->middleware(LoggerMiddleware::class);
Route::get("/brands",[BrandController::class,"brands"])->middleware(LoggerMiddleware::class);
Route::get("/brands/{brand_id}",[BrandController::class,"one_brand"])->middleware(LoggerMiddleware::class);
Route::get("/brands/{brand_id}/edit",[BrandController::class,"edit"])->middleware(LoggerMiddleware::class);
Route::patch("/brands/{brand_id}/edit",[BrandController::class,"update"])->name("update.brands")->middleware(LoggerMiddleware::class);
Route::delete("/brands/{brand_id}",[BrandController::class,"delete"])->name("destroy.brands")->middleware(LoggerMiddleware::class);
Route::post("/brands/create",[BrandController::class, "create"])->name("post.brand")->middleware(LoggerMiddleware::class);


Route::get("/session/reset",[SessionController::class, "reset"])->middleware(LoggerMiddleware::class);
Route::get("/session/second",[SessionController::class, "show_second"])->middleware(LoggerMiddleware::class);
Route::post("/cart",[CartController::class,"add"])->name("post.cart")->middleware(LoggerMiddleware::class);
Route::get("/cart",[CartController::class,"cart"])->middleware(LoggerMiddleware::class);




Route::get("/order",[OrderController::class,"order_page"])->middleware(LoggerMiddleware::class);
Route::get("/success-order",[OrderController::class,"success"])->middleware(LoggerMiddleware::class);
Route::post("/order",[OrderController::class,"order"])->name("post.order")->middleware(LoggerMiddleware::class);

Route::post("/submit-order",[OrderController::class,"submit_order"])->name("submit.order")->middleware(LoggerMiddleware::class);



