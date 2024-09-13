<?php

use App\Http\Controllers\InformationAskController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// Rotta per la homepage
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

// Rotta per la pagina "Chi Siamo"
Route::get("/chiSiamo", [PublicController::class, 'chisiamo'])->name('chiSiamo');

// Rotta per la pagina "Contattaci"
Route::get('/contattaci', [PublicController::class, 'contattaci'])->name('contattaci');

// Rotta POST per l'invio del form
Route::post('/contattaci/sendMessage', [InformationAskController::class, 'store'])->name('sendMessage');
