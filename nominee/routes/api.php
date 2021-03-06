<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\assignment;


route::get('/', [assignment::class, 'palindrome'])->name("palindrome");
route::get('time', [assignment::class, 'time'])->name("time");
route::get('text', [assignment::class, 'text'])->name("text");
route::get('beer', [assignment::class, 'beer'])->name("beer");
route::get('beer', [assignment::class, 'beer'])->name("beer");
route::get('students', [assignment::class, 'students'])->name("students");
route::get('nominee', [assignment::class, 'nominee'])->name("nominee");





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
