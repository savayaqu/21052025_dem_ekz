<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartnerController;
Route::view('/', 'layout.layout')->name('layout');
Route::get('partners', [PartnerController::class, 'index'])->name('partner.index');

Route::get('partners/create', [PartnerController::class, 'create'])->name('partner.create');
Route::post('partners/create', [PartnerController::class, 'store'])->name('partner.store');

Route::get('partners/{partner}/update', [PartnerController::class, 'update'])->name('partner.update');
Route::post('partners/{partner}/update', [PartnerController::class, 'edit'])->name('partner.edit');

Route::get('partners/{partner}/history', [PartnerController::class, 'history'])->name('partner.history');
