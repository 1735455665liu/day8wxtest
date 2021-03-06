<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info', function () {
    phpinfo();
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//购物车
Route::get('/cart', 'CarController@index');
Route::get('/cart/add/{goods_id?}', 'CarController@cartadd');//添加至购物车

//订单处理
Route::get('/index', 'Order\OrderController@index'); //提交订单
Route::get('/olist/{oid?}', 'Order\OrderController@olist'); //订单列表
Route::get('/scorce', 'Order\OrderController@scorce'); //订单列表
Route::get('/detail', 'Order\OrderController@detail'); //订单列表





Route::get('/orderstatus', 'Order\OrderController@orderstatus'); //状态



//微信支付
Route::get('/pay', 'weixin\WxPayController@pay');
Route::get('/weixin/pay/notify', 'weixin\WxPayController@notify'); //支付回调





//浏览缓存
Route::get('/redis/{goods_id?}', 'redis\RedisController@index'); //浏览量



Route::get('/curl', 'curlController@curl'); //计时任务


//Route::get('/redisAll/{goods_id?}', 'redis\RedisController@callAll'); //浏览排行
//Route::get('/Gstor', 'redis\RedisController@getstor'); //浏览排行
