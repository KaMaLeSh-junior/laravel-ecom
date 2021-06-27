<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;
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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Auth::routes();
Route::get('/test/', function () {

$setting =100;

$index=0;

$letter =['a','b','c','d','e','f','g','h','i','j'];
$price =rand(4,8);
$order_amount ='10';
$subtotal = $price +$order_amount;
return $subtotal;
// function happen($index,$letter){
//     return $letter[$index];
//         }
// if($id<$setting){
//     echo "if ";
// return    happen($index,$letter);
// }
// else{
//     $index++;
//     $setting+=100;
//     echo "else ";
//     return  happen($index,$letter);
// }

return $letter[rand(0,9)];
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
