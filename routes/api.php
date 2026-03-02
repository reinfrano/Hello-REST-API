<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route /api/status
Route::get('/status', function () {
    return response()->json([
        "app" => "Todo API",
        "status" => "running"
    ]);
});

// Route /api/greet/{name}
Route::get('/greet/{name}', function ($name) {
    return response()->json([
        "message" => "Hello, " . $name . "!"
    ]);
});