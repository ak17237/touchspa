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
Route::get('pakalpojumi/{page}','PageController@pakalpojumi');
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

Route::get('akcija/izveidot',[
    'uses' => 'AkcijasController@izveidot',
    'as' => 'akcija.izveidot',
    'middleware' =>  'roles',
    'roles' => ['Admin']
        ]);
Route::post('akcija/ierakstīt','AkcijasController@ierakstīt')->name('akcija.ierakstīt');
Route::get('akcija/{id}/izmainīt',[
    'uses' => 'AkcijasController@izmainīt',
    'as' => 'akcija.izmainīt',
    'middleware' =>  'roles',
    'roles' => ['Admin']
]);
Route::post('akcija/{id}/atjaunot','AkcijasController@atjaunot')->name('akcija.atjaunot');
Route::get('akcija/{id}/skats','AkcijasController@skats')->name('akcija.skats');
Route::delete('akcija/{id}/izdzēst',[
    'uses' => 'AkcijasController@dzēst',
    'as' => 'akcija.dzēst',
    'middleware' =>  'roles',
    'roles' => ['Admin']
]);

Route::get('/home/adminpanel',[
    'uses' => 'AdminController@index',
    'as' => 'admin.panel',
    'middleware' => 'roles',
    'roles' => ['Admin']
    ]);
Route::post('/home/adminpanel/assign-roles', [
    'uses' => 'AdminController@assignroles',
    'as' => 'admin.assign',
    'middleware' => 'roles',
    'roles' => ['Admin']
    ]);
Route::post('/home/adminpanel/calculate', [
        'uses' => 'AdminController@calculate',
        'as' => 'admin.calculate',
        'middleware' => 'roles',
        'roles' => ['Admin']
        ]);
Route::get('lang/{locale}','LenguageController');

Route::post('send',[
    'uses' => 'MailController@send',
    'as' => 'send.email',
    'middleware' => 'mails'
    ]);
Route::post('unsend',[
    'uses' => 'MailController@unsend',
    'as' => 'unsend.email',
    'middleware' => 'unmails'
    ]);

Route::get('/upload',[
    'uses' => 'UploadController@index',
    'as' => 'upload.main',
    'middleware' =>  'roles'
]);
Route::post('/upload/store','UploadController@store')->name('upload.store');
Route::get('upload/show/{filename}','UploadController@getfile')->name('upload.file');
Route::post('upload/delete','UploadController@deletefile')->name('upload.delete');

Route::get('/users',[
    'uses' => 'UserController@index',
    'as' => 'user.main',
    'middleware' =>  'roles'
]);
Auth::routes();

Route::get('/home','HomeController@index')->name('home');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
