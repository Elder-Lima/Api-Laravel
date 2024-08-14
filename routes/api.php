<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DogController;

Route::apiResource('dogs', DogController::class); 

