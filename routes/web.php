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
Route::get('akcija','PageController@akcija');
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
Route::get('send','MailController@send');