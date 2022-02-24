<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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
    echo "<h1>EducaStudio<br></h1>";
    echo "Halaman Awal";
});

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo "<h1>Marbel-Edu-Games</h1>";
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        echo "<h1>marbel-and-friends-kids-games</h1>";
    });
    Route::get('/riri-story-books', function () {
        echo "<h1>riri-story-books</h1>";
    });
    Route::get('/kolak-kids-songs', function () {
        echo "<h1>kolak-kids-songs</h1>";
    });
});

Route::get('/news/{id}', function ($id) {
    return 'Ini berita news dengan nomor ' . $id;
});

Route::get('/news/{post}/comments/{comment}', function ($postId, $commentId) {
    return "Ini route parameter" . $postId . $commentId;
});

Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo "Desainer<br>";
        echo "Gamer";
    });
    Route::get('/magang', function () {
        echo "Selamat Datang di menu magang";
    });
    Route::get('/kunjungan-industri', function () {
        echo "Ini halaman kunjungan industri";
    });
});

Route::get('/about-us', function () {
    echo 'halaman about us<br>';
    echo "Hello Semua";
});


Route::resources([
    'contact' => ContactController::class,
    'contact/create' => ContactController::class
]);
