<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_39;


Route::get('controller39',[Controller_39::class,'index'])->name('controller39');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
