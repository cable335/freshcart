<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\replyController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/',[FrontController::class, 'index'])->name('shopping-car');

Route::middleware(['auth'])->prefix('')->group(function () {
    Route::get('/cart',[ProductController::class, 'index'])->name('cart');
    Route::get('/create',[ProductController::class, 'create'])->name('create');
    Route::post('/store',[ProductController::class, 'store'])->name('store');
    Route::get('/edit/{id}',[ProductController::class, 'edit'])->name('edit');
    Route::put('/update/{id}',[ProductController::class, 'update'])->name('prod.update');
    Route::delete('/delete/{id}',[ProductController::class, 'destroy'])->name('delete');
});


Route::middleware(['auth'])->prefix('')->group(function () {
Route::resource('/type', TypeController::class);
});

Route::post('/replayStore/{id}', [messageController::class, 'replayStore'])->name('replayStore');
Route::get('/message',[messageController::class, 'index'])->name('message');
Route::post('/messae/store', [messageController::class, 'store'])->name('messageStore');
Route::post('/message/create',[messageController::class, 'create'])->name('message.create');
Route::get('/message/edit/{id}',[messageController::class, 'edit'])->name('message.edit');
Route::put('/message/update/{id}', [messageController::class, 'update'])->name('messageUpdate');
Route::delete('/message/destroy/{id}', [messageController::class, 'destroy'])->name('messageDestroy');

Route::middleware('auth')->prefix('/reply')->group(function () {
    Route::put('/update/{id}', [ReplyController::class, 'update'])->name('replyUpdate');
    // 刪除
    Route::delete('/destroy/{id}', [ReplyController::class, 'destroy'])->name('replyDestroy');
});
