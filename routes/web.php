<?php

use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::post('/addMember', [MemberController::class, 'addMember']);