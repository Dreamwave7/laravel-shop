<?php

use App\Http\Controllers\ItemController;
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
