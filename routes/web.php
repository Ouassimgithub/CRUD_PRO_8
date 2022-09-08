<?php
use App\Models\Article;
use App\Models\TypeArticle;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/articles', function () {
//     return Article::with("typeArticle")->paginate(5); ;
// });

// Route::get('/types', function () {
//     return TypeArticle::with("articles")->paginate(1) ;
// });


Auth::routes(); //generer ses propres pages de route (de cnx , d'enregistrement..)

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/encrypt', [App\Http\Controllers\EncryptionController::class, 'encrypt'])->name('encr');
// Route::get('/decrypt', [App\Http\Controllers\EncryptionController::class, 'decrypt'])->name('decr');
