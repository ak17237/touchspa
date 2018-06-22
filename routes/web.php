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
use Cornford\Googlmapper\Facades\MapperFacade;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

Route::get('/','WelcomeController@welcome');
Route::get('par-mums','PageController@parmums');
Route::get('akcija','PageController@akcija')->name('akcija');
Route::get('pakalpojumi','PageController@pakalpojumi');
Route::get('cenas','PageController@cenas');
Route::get('kontakti','PageController@kontakti');

Route::get('kontakti', function (){
    Mapper::map(
        56.963267,
        24.022074,
            [
                'zoom' => 16,
                'draggable' => true,
                'marker' => true,
                'eventAfterLoad' =>
                'circleListener(maps[0].shapes[0].circle_0);'
            ]
            );
    return view('Pages.kontakti');
});

Route::get('akcija/izveidot','AkcijasController@izveidot')->name('akcija.izveidot');
Route::post('akcija/ierakstīt','AkcijasController@ierakstīt')->name('akcija.ierakstīt');
Route::get('akcija/{id}/izmainīt','AkcijasController@izmainīt')->name('akcija.izmainīt');
Route::post('akcija/{id}/atjaunot','AkcijasController@atjaunot')->name('akcija.atjaunot');
Route::get('akcija/{id}/skats','AkcijasController@skats')->name('akcija.skats');
Route::delete('akcija/{id}/izdzēst','AkcijasController@dzēst')->name('akcija.dzēst');

Route::get('send','MailController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
