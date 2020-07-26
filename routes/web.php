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
/*Route::get('/', function(){
    $agent = new Agent();
    return $agent->browser(); //device  //platform
});*/




Route::get('/logout', function(){
    auth()->logout();
    return back();

});

Route::post('login', 'Auth\LoginController@login');
Route::post('register', 'Auth\RegisterController@register');
Route::get('register/confirm/resend', 'Auth\RegisterController@resendConfirmation')->name('auth.resend_confirmation');
Route::get('register/confirm/{confirmation_code}', 'Auth\RegisterController@confirm');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('logout', 'HomeController@logout');
Route::post('save/signal', 'SignalController@store');
Route::get('/time', function(){
    return \Carbon\Carbon::now()->timezone('America/Mexico_City');
});
Route::post('save/support', 'HomeController@Support');
Route::get('fetch/signal/free', 'SignalController@SignalFree');
Route::get('fetch/signal/silver', 'SignalController@SignalSilver');
Route::get('fetch/signal/gold', 'SignalController@SignalGold');
Route::get('fetch/signal/diamond', 'SignalController@SignalDiamond');
Route::get('fetch/signal/{id}', 'SignalController@View');
Route::get('fetch/date', 'HomeController@Date');
Route::get('fetch/rate/user', 'HomeController@Rate');
Route::get('filter/signal', 'SignalController@Filter');
Route::get('fetch/user/data', 'HomeController@Auth');
Route::post('change/password', 'HomeController@ChangePass');
Route::post('change/name/email', 'HomeController@Change');
Route::get('signal', 'HomeController@chart');
Route::get('fetch/user/id', 'HomeController@UserID');
Route::post('login/auto', 'HomeController@Auto');
Route::get('fetch/support', 'HomeController@getSupport');
Route::post('send/answer', 'HomeController@SendAnswer');
Route::get('upgrade/plan', 'HomeController@Upgrade');
Route::get('fetch/http/guzzle', 'HomeController@TestHttp');
Route::get('/{any}', 'HomeController@welcome')->where('any', '.*');
Auth::routes();
## Helal
## Homa
## KoodakBold
## MehrBold
## Yekan
