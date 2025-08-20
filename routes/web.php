<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, "home"])->name("home");
Route::get("/contattaci", [PublicController::class, "contacts"])->name("contacts");

// funzione mail
Route::post("/contattaci/submit", [PublicController::class, "submit"])->name("submit");