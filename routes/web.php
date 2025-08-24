<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfiloController;

Route::get('/', [PublicController::class, "home"])->name("home");
Route::get("/contattaci", [PublicController::class, "contacts"])->name("contacts");

// funzione profilo personale
Route::get("/profilo/{username}", [ProfiloController::class, "profilo"])->name("profile.show");

// funzione mail
Route::post("/contattaci/submit", [PublicController::class, "submit"])->name("submit");
