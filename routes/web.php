<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\FormateurController;




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

Route::get('', function () {
    return view('welcome');
});


//Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
  //     Route::get('/profile/admin/editprofile' , 'EditprofiladminController@edit')->name('editprofileadmin');
//});




//Admin Users Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/profil/admin', [ProfileController::class, 'adminprf'])->name('admin.profil');
    Route::get('/profil/admin/Apprenants', [ApprenantController::class, 'edit'])->name('adminapprenants.profil');
    Route::get('/profil/admin/Formateurs', [FormateurController::class, 'edit'])->name('formateurs.profil');

});


//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('/profil', [ProfileController::class, 'userprf'])->name('user.profil');
    Route::get('/profil/editprofil', [ProfileController::class, 'editprof'])->name('edit.profil');
    Route::get('/profil/billing', [ProfileController::class, 'billing'])->name('billing');
});
//Formateur Routes List
Route::middleware(['auth', 'user-access:formateur'])->group(function () {
   
    Route::get('/profil/formateur', [ProfileController::class, 'Formateurprf'])->name('formateur.profil');
});

Route::get('/profilpage',[ProfileController::class,'accestoprofil'])->name('bibi');

Route::get('/search','searchController@search');


Auth::routes()
  ;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');