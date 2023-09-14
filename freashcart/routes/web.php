<?php

use App\Http\Controllers\BackendController;
use App\Http\Controllers\CheckoutController;
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

Route::get('/product',[FrontController::class,'fontProduct'])->name('front.product');


Route::middleware(['auth','userRole:1'])->group(function (){
    Route::get('/admin.index',[BackendController::class, 'index'])->name('backend.index');
});



// crud 主頁產品  （後台）
Route::middleware(['auth','userRole:1'])->prefix('')->group(function () {
    Route::get('/cart',[ProductController::class, 'index'])->name('cart');
    Route::get('/create',[ProductController::class, 'create'])->name('create');
    Route::post('/store',[ProductController::class, 'store'])->name('store');
    Route::get('/edit/{id}',[ProductController::class, 'edit'])->name('edit');
    Route::put('/update/{id}',[ProductController::class, 'update'])->name('update');
    Route::delete('/delete/{id}',[ProductController::class, 'destroy'])->name('delete');
});

// crud （後台）
Route::middleware(['auth'])->prefix('')->group(function () {
Route::resource('/type', TypeController::class);
});


// message 留言區部分
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



// 使用者資訊部分
Route::middleware('auth','userRole:2')->get('/user/infomation',[FrontController::class, 'user_info'])->name('infomation');
Route::middleware('auth')->post('/user/infomation/upadte',[FrontController::class, 'user_info_update'])->name('user.info.update');

// 這裡是checkout部分
Route::middleware('auth')->get('/user/chekout',[CheckoutController::class,'checkout'])->name('chekout');
Route::middleware('auth')->post('/user/chekout.store',[CheckoutController::class,'checkout_store'])->name('chekout.store');
Route::middleware('auth')->get('/user/chekout/information',[CheckoutController::class,'checkout_information'])->name('chekout.information');
Route::middleware('auth')->post('/user/chekout/information.store',[CheckoutController::class,'checkout_information_store'])->name('chekout.information.store');
Route::middleware('auth')->get('/user/chekout/information/pay',[CheckoutController::class,'checkout_pay'])->name('chekout.pay');
Route::middleware('auth')->post('/user/chekout/information/pay.store',[CheckoutController::class,'checkout_pay_store'])->name('chekout.pay.store');
Route::middleware('auth')->get('/user/chekout/information/pay/ok',[CheckoutController::class,'checkout_ok'])->name('chekout.ok');

Route::middleware('auth')->post('/products/add.carts',[FrontController::class,'add_cart'])->name('front.addcart');


// 這裡是other checkout部分
Route::middleware('auth','userRole:2')->group(function (){
    Route::get('user/otherCheckout',[CheckoutController::class,'other_checkout'])->name('other.checkout');
    Route::put('/user/otherCheckout/update',[CheckoutController::class,'other_checkout_updateQty'])->name('other.checkout.updateQty');
    Route::delete('/user/otherCheckout/delete',[CheckoutController::class,'other_checkout_delete'])->name('other.checkout.delete');
    Route::post('/user/otherCheckout.store',[CheckoutController::class,'other_checkout_store'])->name('other.checkout.store');
    Route::get('/user/otherCheckout/delivery',[CheckoutController::class,'other_checkout_delivery'])->name('other.checkout.delivery');
    Route::post('/user/otherCheckout/delivery.store',[CheckoutController::class,'other_checkout_delivery_store'])->name('other.checkout.delivery.store');
    Route::get('/user/otherCheckout/pay',[CheckoutController::class,'other_checkout_pay'])->name('other.checkout.pay');
    Route::post('/user/otherCheckout/pay.store',[CheckoutController::class,'other_checkout_pay_store'])->name('other.checkout.pay.store');
    Route::get('/user/otherCheckout/complete',[CheckoutController::class,'other_checkout_complete'])->name('other.checkout.complete');
});

