<?php

/*
 |--------------------------------------------------------------------------
 | Internal WEB API Routes
 |--------------------------------------------------------------------------
 | These routes are used by frontend calls
 |
 */


use App\Photographer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/photographer/{id}', function (Request $request, $id) {;
    return Photographer::with("album")->find($id);
});