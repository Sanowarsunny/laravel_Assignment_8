<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/profile/{id}', [ProfileController::class,"code"]);

route::get("/persons", [ProfileController::class,"personForm"]);
route::post("/persons", [ProfileController::class,"createPerson"]);



