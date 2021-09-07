<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\KelebihanController;
use App\Http\Controllers\FiturController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\MapsController; 
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\UserController; 

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
Route::get('/', [AppController::class,'index']);


Route::post('/app/add_contactform', [AppController::class, 'add_contactform']);

Route::get('/admin', function () {
    return view('/pages/login');
});

Route::get('/paket/view/', [AppController::class, 'paketreadmore']);

Route::post('/login', [AuthController::class,'login']);

Route::group(['middleware' => 'checksession'],function() {
    Route::get('/logout', [AuthController::class,'logout']);
    Route::get('/dashboard', [DashboardController::class,'index']);

    Route::get('/profil', [AuthController::class, 'showprofil']);
    Route::get('/profil/editprofil', [AuthController::class, 'editprofil']);
    Route::post('/profil/update/{id}', [AuthController::class, 'update']);
    

    Route::get('/user', [UserController::class,'index']);
    Route::get('/user/cari', [UserController::class, 'cari']);
    Route::get('/user/add', [UserController::class, 'add']);
    Route::post('/user/add_user', [UserController::class, 'add_user']);
    Route::post('/user/edit_user/{id}', [UserController::class, 'edit_user']);
    Route::get('/user/edit/{id}', [UserController::class, 'edit']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete']);


    Route::get('/client', [ClientController::class,'index']);
    Route::get('/client/cari', [ClientController::class, 'cari']);
    Route::get('/client/add', [ClientController::class, 'add']);
    Route::post('/client/add_client', [ClientController::class, 'add_client']);
    Route::post('/client/edit_client/{id}', [ClientController::class, 'edit_client']);
    Route::get('/client/edit/{id}', [ClientController::class, 'edit']);
    Route::get('/client/delete/{id}', [ClientController::class, 'delete']);

    Route::get('/gallery', [GalleryController::class,'index']);
    Route::get('/gallery/cari', [GalleryController::class, 'gallery']);
    Route::get('/gallery/add', [GalleryController::class, 'add']);
    Route::post('/gallery/add_gallery', [GalleryController::class, 'add_gallery']);
    Route::post('/gallery/edit_gallery/{id}', [GalleryController::class, 'edit_gallery']);
    Route::get('/gallery/edit/{id}', [GalleryController::class, 'edit']);
    Route::get('/gallery/delete/{id}', [GalleryController::class, 'delete']);

    Route::get('/kelebihan', [KelebihanController::class,'index']);
    Route::get('/kelebihan/cari', [KelebihanController::class, 'kelebihan']);
    Route::get('/kelebihan/add', [KelebihanController::class, 'add']);
    Route::post('/kelebihan/add_kelebihan', [KelebihanController::class, 'add_kelebihan']);
    Route::post('/kelebihan/edit_kelebihan/{id}', [KelebihanController::class, 'edit_kelebihan']);
    Route::get('/kelebihan/edit/{id}', [KelebihanController::class, 'edit']);
    Route::get('/kelebihan/delete/{id}', [KelebihanController::class, 'delete']);

    Route::get('/navbar', [NavbarController::class,'index']);
    Route::get('/navbar/cari', [NavbarController::class, 'gallery']);
    Route::get('/navbar/add', [NavbarController::class, 'add']);
    Route::post('/navbar/add_navbar', [NavbarController::class, 'add_navbar']);
    Route::post('/navbar/edit_navbar/{id}', [NavbarController::class, 'edit_navbar']);
    Route::get('/navbar/edit/{id}', [NavbarController::class, 'edit']);
    Route::get('/navbar/delete/{id}', [NavbarController::class, 'delete']);

    Route::get('/home', [HomeController::class,'index']);
    Route::get('/home/cari', [HomeController::class, 'home']);
    Route::get('/home/add', [HomeController::class, 'add']);
    Route::post('/home/add_home', [HomeController::class, 'add_home']);
    Route::post('/home/edit_home/{id}', [HomeController::class, 'edit_home']);
    Route::get('/home/edit/{id}', [HomeController::class, 'edit']);
    Route::get('/home/delete/{id}', [HomeController::class, 'delete']);

    
    Route::get('/maps', [MapsController::class,'index']);
    Route::get('/maps/cari', [MapsController::class, 'gallery']);
    Route::get('/maps/add', [MapsController::class, 'add']);
    Route::post('/maps/add_maps', [MapsController::class, 'add_maps']);
    Route::post('/maps/edit_maps/{id}', [MapsController::class, 'edit_maps']);
    Route::get('/maps/edit/{id}', [MapsController::class, 'edit']);
    Route::get('/maps/delete/{id}', [MapsController::class, 'delete']);

    Route::get('/contactus', [ContactUsController::class,'index']);
    Route::get('/contactus/cari', [ContactUsController::class, 'contactus']);
    Route::get('/contactus/add', [ContactUsController::class, 'add']);
    Route::post('/contactus/add_contactus', [ContactUsController::class, 'add_contactus']);
    Route::post('/contactus/edit_contactus/{id}', [ContactUsController::class, 'edit_contactus']);
    Route::get('/contactus/edit/{id}', [ContactUsController::class, 'edit']);
    Route::get('/contactus/delete/{id}', [ContactUsController::class, 'delete']);

    Route::get('/promo', [PromoController::class,'index']);
    Route::get('/promo/cari', [PromoController::class, 'promo']);
    Route::get('/promo/add', [PromoController::class, 'add']);
    Route::post('/promo/add_promo', [PromoController::class, 'add_promo']);
    Route::post('/promo/edit_promo/{id}', [PromoController::class, 'edit_promo']);
    Route::get('/promo/edit/{id}', [PromoController::class, 'edit']);
    Route::get('/promo/delete/{id}', [PromoController::class, 'delete']);

    Route::get('/team', [TeamController::class,'index']);
    Route::get('/team/cari', [TeamController::class, 'team']);
    Route::get('/team/add', [TeamController::class, 'add']);
    Route::post('/team/add_team', [TeamController::class, 'add_team']);
    Route::post('/team/edit_team/{id}', [TeamController::class, 'edit_team']);
    Route::get('/team/edit/{id}', [TeamController::class, 'edit']);
    Route::get('/team/delete/{id}', [TeamController::class, 'delete']);


    Route::get('/fitur', [FiturController::class,'index']);
    Route::get('/fitur/cari', [FiturController::class, 'Fitur']);
    Route::get('/fitur/add', [FiturController::class, 'add']);
    Route::post('/fitur/add_fitur', [FiturController::class, 'add_fitur']);
    Route::post('/fitur/edit_fitur/{id}', [FiturController::class, 'edit_fitur']);
    Route::get('/fitur/edit/{id}', [FiturController::class, 'edit']);
    Route::get('/fitur/delete/{id}', [FiturController::class, 'delete']);

    Route::get('/paket', [PaketController::class,'index']);
    Route::get('/paket/cari', [PaketController::class, 'paket']);
    Route::get('/paket/add', [PaketController::class, 'add']);
    Route::post('/paket/add_paket', [PaketController::class, 'add_paket']);
    Route::post('/paket/edit_paket/{id}', [PaketController::class, 'edit_paket']);
    Route::get('/paket/edit/{id}', [PaketController::class, 'edit']);
    Route::get('/paket/delete/{id}', [PaketController::class, 'delete']);

    
    Route::get('/contactform', [ContactFormController::class,'index']);
    Route::get('/contactform/cari', [ContactFormController::class, 'gallery']);
    Route::get('/contactform/delete/{id}', [ContactFormNavbarController::class, 'delete']);

});