<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;


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

Route::get('vipFemaleCustomer', function () {
    return view('customer.vipCustomer.female.list');
});



Route::get('/home/page', function () {
    return view('home',["name"=>"<h2>CODE LAB</h2>" , "lecture"=>'Programming']);
})->name('myHome');

// Route::get('about', function () {
//     return view('aboutPage',["meassage" => "This is testing message from server side"]);
// });

// Route::view('URI', 'viewName','Parameter');

Route::view('about', 'aboutPage',["num1" =>10,"num2"=>20 , "fruits" => ['apple','mango','banana','orange']]);

Route::get('contact', function () {
    return view('contact');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/contact', function () {
    return "user contact page";
});

// Route::get('/customer/{name}/register/{age}', function ($name,$age) {

//     return "customer name is" . $name . " and his age is " . $age;
// });

// Route::get('/customer/{name?}/register/{age?}', function ($name = null ,$age = null ) {

//     return "customer name is" . $name . " and his age is " . $age;
// });


Route::get('resultPage/{num1}/{num2}', function ($num1,$num2) {
    $myResult = $num1 + $num2;
    return view('result',['result'=>$myResult]);

})->name('myCalculation');

Route::get('paraPass/{name?}', function ($myName = "your name is empty") {
    return $myName;
})->name("passWithRoute");

Route::get('sum/{num1}/{num2}', function ($num1,$num2) {
    return $num1+$num2;
});

Route::get('add/{num1}/{num2}', fn ($num1,$num2) => $num1 * $num2 );


// https://fakestoreapi.com/products

//pure php code

Route::get('getData', function () {
    $data = file_get_contents("https://fakestoreapi.com/products");
    $jsonData = json_decode($data);

    $result = array_filter($jsonData,fn($j) => $j->price < 10);

   dd($result);

});

Route::get('laraGetData', function () {

    $data = Http::get("https://fakestoreapi.com/products")->object();
    $data = collect($data)->whereIn("price",[109,168])->toArray();
    dd($data);




});

 //POST method

 Route::post('postTest',[AdminController::class,'adminPostTest'])->name('customerPostTest');

 Route::view('customer/register', 'customerRegister');

//  Route::get('helloTest', function () {
//      return "hello";
//  });

Route::get('helloTest', [CustomerController::class,'outputHello']);


Route::get('compact/list', [CustomerController::class,'compactList']);

