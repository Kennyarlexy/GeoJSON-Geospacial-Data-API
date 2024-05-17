<?php

use App\Http\Controllers\Api\GeojsonController;
use Illuminate\Support\Facades\Route;


Route::get('/geojsons', [GeojsonController::class, 'getAllGeojson']);
Route::get('/geojsons/{geojson}', [GeojsonController::class, 'getSingleGeojson']);  