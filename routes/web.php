<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PapersController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ContactUsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('main');
}); 
*/
Route::get('/' , [HomeController::class, 'Index'])->name('/');
Route::get('/پروژه-ها' , [HomeController::class, 'Projects'])->name('پروژه ها');

Route::get('/مقاله-ها', [PapersController::class, 'papers'])->name('مقاله ها');
Route::get('/پروژه-ها/{slug}' , [HomeController::class, 'detail'])->name('news.detail');
Route::get('/مقاله-ها/{slug}' , [PapersController::class, 'detail'])->name('papers.detail');
Route::get('/ارتباط-با-ما' , [ContactUsController::class,'index'], ['name' => 'Taylor']);
Route::get('/سوالات-متداول' , [QuestionController::class, 'index'])->name('سوالات متداول');
Route::get('/محصولات' , [ProductController::class, 'index'])->name('product.product');
Route::get('/محصولات/{slug}' , [ProductController::class, 'detail'])->name('products.detail');
Route::fallback(function(){
    return view('404');
});
Route::get('storage/images/ourwork', function ($path) {
    $filePath = storage_path('app/public/' . $path);

    if (!Storage::exists('public/' . $path)) {
        abort(404);
    }

    return response()->file($filePath);
})->where('path', '.*');