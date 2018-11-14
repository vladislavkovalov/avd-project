<?php

use App\Param;
use App\Article;
use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('data/get', 'ApiController@index')->name('index');
Route::post('/params', 'ApiController@store')->name('admin.store');

Route::get('params', function() {
    
    $param = Param::first();
    return [
        'is_available' => $param->is_available,
        'is_lazy' => $param->is_lazy,
    ];        
    
});

Route::get('text/get', function() {
    
    $article = Article::first();
    return [
        $article->text
    ];        
    
});


    
    
