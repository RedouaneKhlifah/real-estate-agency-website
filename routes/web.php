<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dashbordController;
use App\Http\Controllers\AddPropertyController;
use App\Http\Controllers\propertiesController;
use App\Http\Controllers\propertyController;
use App\Http\Controllers\MypropertiesController;
use App\Http\Controllers\favpropertiesController;
use App\Http\Controllers\adminpropertiesController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::resource('/',homeController::class);
Route::resource('/signup',userController::class);

// Route::post('/logout',[userController::class,'logout']);
Route::get('/login',[userController::class,'login'])->name('login');
// Route::get('/edit',[userController::class,'edit']);

// Route::post('/update',[userController::class,'update']);



Route::post('/user/authenticate',[userController::class,'authenticate']);


// Route::resource('/dashboard', dashbordController::class);



// Route::resource('/addproperty',AddPropertyController::class);

Route::resource('/properties',propertiesController::class);
Route::resource('/property', PropertyController::class);


// Route::resource('/Myproperties',MypropertiesController::class);



// Route::resource('/Favourites',favpropertiesController::class);

// Route::resource('/Adminprop',adminpropertiesController::class)

Route::get('/moroccan-cities', [ApiController::class, 'getMoroccanCities']);


// Route::resource('/profile',profileController::class);

// Route::get('/profile',[userController::class,'profile']);


Route::middleware(['tenants'])->group(function () {
    Route::resource('/Favourites',favpropertiesController::class);
    Route::get('/profile',[userController::class,'profile']);
    Route::post('/logout',[userController::class,'logout']);
});

Route::middleware(['landlord'])->group(function () {
    Route::get('/edit',[userController::class,'edit']);
    Route::post('/update',[userController::class,'update']);
    Route::resource('/dashboard', dashbordController::class);
    Route::resource('/addproperty',AddPropertyController::class);
    Route::resource('/Myproperties',MypropertiesController::class);
});

Route::middleware(['admin'])->group(function () {
    Route::resource('/Adminprop',adminpropertiesController::class);
});
