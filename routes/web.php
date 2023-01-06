<?php

use App\Models\Item;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/', 'SiteController@index');
    Route::get('/shop', 'SiteController@shop');
    Route::get('/about', 'SiteController@about');
    Route::get('/product_details', 'SiteController@product_details');
    Route::get('/blog', 'SiteController@blog');
    Route::get('/blog_details', 'SiteController@blog_details');
    Route::get('/login', 'SiteController@login');
    Route::get('/cart', 'SiteController@cart');
    Route::get('/elements','SiteController@elements');
    Route::get('/confirmation','SiteController@confirmation');
    Route::get('/checkout','SiteController@checkout');
    Route::get('/contact','SiteController@contact');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('picArray',function(){
    $item = Item::find(12);
    dd($item->picsArray);
});

//Jetstream驗證機制的登入介面/login
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// 取得lang語系值
Route::get('getlocale', function(){
    App::setLocale('zh_TW');
    return App::getLocale();
});


//呼叫__()
Route::get('getpwdphp', function(){
    App::setLocale('zh_TW');
    return __('passwords.reset'); 
});
//使用原語系翻譯字串
Route::get('getpwdjson', function(){
    App::setLocale('messages');
    return __('Your password has been reset!'); 
});

Route::get('testlang',function(){
    return view('lang.testlang');
});

// 購物車示範
Route::get('additem',function(){
    $item = Item::find(8);
    \Cart::session(Auth::user()->id)->add([
        'id' => 8,
        'name' => $item->title,
        'price' => $item->price_new,
        'quantity' => 1,
        'attributes' => [], 
        'associatedModel' => $item
    ]);
    return '已加入購物車中';
})->middleware('auth');

// 取得購物車內容
Route::get('getcart', function(){
    $items = \Cart::session(Auth::user()->id)->getContent();
    dd($items);
});

// 更新商品
Route::get('updateitem',function(){
    $item = Item::find(8);
    \Cart::session(Auth::user()->id)->update(8,[
        'quantity' => $_GET['num'],
        'attributes' => [], 
        'associatedModel' => $item
    ]);
    return '已更新購物車';
});

// 刪除商品
Route::get('removeitem', function(){
    $item = Item::find(8);
    \Cart::session(Auth::user()->id)->remove(8);
    return '已移除商品';
});