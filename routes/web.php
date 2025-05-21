<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProductController;
Route::view('/', 'layout.layout')->name('layout');
Route::get('partners', [PartnerController::class, 'index'])->name('partner.index');

Route::get('partners/create', [PartnerController::class, 'create'])->name('partner.create');
Route::post('partners/create', [PartnerController::class, 'store'])->name('partner.store');

Route::get('partners/{partner}/update', [PartnerController::class, 'update'])->name('partner.update');
Route::post('partners/{partner}/update', [PartnerController::class, 'edit'])->name('partner.edit');

Route::get('partners/{partner}/history', [PartnerController::class, 'history'])->name('partner.history');

Route::get('products', [ProductController::class, 'index'])->name('product.index');

Route::get('products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('products/create', [ProductController::class, 'store'])->name('product.store');

Route::get('products/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::post('products/{product}/update', [ProductController::class, 'edit'])->name('product.edit');
Route::delete('products/{product}/delete', [ProductController::class, 'destroy'])->name('product.destroy');

