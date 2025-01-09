<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;  // Import the ProductController

// Define API route for fetching products
Route::get('products', [ProductController::class, 'index']);  // This will map to the index method in ProductController

// Additional routes (optional)
Route::get('products/{id}', [ProductController::class, 'show']);  // Get a single product by ID

// Create a product (POST request)
Route::post('products', [ProductController::class, 'store']);

// Update a product (PUT/PATCH request)
Route::put('products/{id}', [ProductController::class, 'update']);

// Delete a product (DELETE request)
Route::delete('products/{id}', [ProductController::class, 'destroy']);
