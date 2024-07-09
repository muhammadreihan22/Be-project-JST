<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'mesasge' => 'server started'
    ]);
});
