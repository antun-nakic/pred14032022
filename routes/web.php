<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/home', function (Request $request) {
    return "Dobrodošao na homepage! $request->ovoKorisnikNijePoslao";
})->middleware('MojPrvi:Šime');

Route::redirect('/', '/home');

Route::view('/pogled', 'welcome', ['imePogleda' => 'Najbolji pogled'])->name('najPogled');

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    $linkDoRuteNajPogled = route('najPogled', ['id' => 1]);
    return "Ime posta je: $postId, a ID komentara je $commentId. <a href=\"$linkDoRuteNajPogled\">Link na rutu najPOgled</a>";
})->where('post', '[A-Za-z]+');

Route::controller(OrderController::class)->group(function () {
    Route::get('/orders/{id}', 'show');
    Route::post('/orders', 'store')->withoutMiddleware('web');
});
