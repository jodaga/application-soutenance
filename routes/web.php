<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReclammationController;
use App\Http\Controllers\Request;




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

Route::get('/', function () {
    return view('enter');
});

Route::get('/auth/login', function () {
    return view('/auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get('/', function () {
//     return view('index');
// });

Route::get('/pages/forms/general', function () {
    return view('/pages/forms/general');
});

Route::get('/pages/forms/advanced', function () {
    return view('/pages/forms/advanced');
});

Route::get('/pages/forms/validation', function () {
    return view('/pages/forms/validation');
});

Route::get('/pages/examples/contact-us', function () {
    return view('/pages/examples/contact-us');
});

// Route::get('/pages/examples/forgot-password', function () {
//     return view('/pages/examples/forgot-password');
// });

Route::get('/pages/examples/invoice-print', function () {
    return view('/pages/examples/invoice-print');
});

// Route::get('/pages/examples/invoice', function () {
//     return view('/pages/examples/invoice');
// });

// Route::get('/pages/examples/profile', function () {
//     return view('/pages/examples/profile');
// });


// // routes mailbox
Route::get('/pages/mailbox/compose', function () {
    return view('/pages/mailbox/compose');
});

Route::get('/pages/mailbox/mailbox', function () {
    return view('/pages/mailbox/mailbox');
});

Route::get('/ok', function () {
    return view('ok');
});

Route::get('/pages/search/enhanced', function () {
    return view('/pages/search/enhanced');
});

Route::get('/pages/search/simple', function () {
    return view('/pages/search/simple');
});

Route::get('/pages/tables/data', function () {
    return view('/pages/tables/data');
});

Route::get('/pages/tables/simple', function () {
    return view('/pages/tables/simple');
});

Route::get('/pages/calendar', function () {
    return view('/pages/calendar');
});

Route::get('/pages/tables/rechercher_bulletins', function(){
    return view('/pages/tables/rechercher_bulletins');
});


Route::post('/contact-us', [ReclammationController::class, 'store'])->name('contact.submit');

// Route::get('/pages/examples/data' , [BulletinController::class, 'show']);
// // Route pour le chargement des données du bulletin
// Route::get('/pages/tables/data{annee}', 'BulletinController@chargerBulletin');

// // Route pour la recherche de bulletin
// Route::get('/pages/tables/rechercher_bulletins', 'BulletinController@rechercherBulletin');

