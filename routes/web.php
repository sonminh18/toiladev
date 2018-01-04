
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/admin','\Modules\Login\Http\Controllers\LoginController@index');
Route::get('/','\Modules\Home\Http\Controllers\HomeController@index');
//Route::get('/setup',function (){
//    \Illuminate\Support\Facades\Artisan::call('clear-compiled');
//    \Illuminate\Support\Facades\Artisan::call('config:clear');
//    \Illuminate\Support\Facades\Artisan::call('cache:clear');
//    \Illuminate\Support\Facades\Artisan::call('dump-autoload');
//    dd(\Illuminate\Support\Facades\Artisan::output());
//});
//Route::get('/test',function (){
//    if(\Illuminate\Support\Facades\Auth::check()){
//        dd(\Illuminate\Support\Facades\Auth::user());
//    }
//    else{
//        echo "null";
//    }
//});