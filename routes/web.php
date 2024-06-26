<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'homepage']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', [HomeController::class, 'index']) ->middleware('auth')->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\PlaceController;

Route::get('/search', [PlaceController::class, 'search'])->name('search');

Route::get('/places', [PlaceController::class, 'index']);

Route::get('/search-places', [PlaceController::class, 'apiSearch'])->name('api.search.places');

Route::delete('/remove-history', [PlaceController::class, 'removeHistory'])->name('remove.history');

Route::get('/output', function () {
    $searchResult = session('search_result', []);
    return view('output', compact('searchResult'));
})->name('output');

require __DIR__.'/auth.php';
<<<<<<< HEAD

Route::get('/wisata_list_inf_lengkuas', function () {
    return view('trip_information.wisata_list_inf_lengkuas');
});

Route::get('/wisata_list_inf_purabesakih', function () {
    return view('trip_information.wisata_list_inf_purabesakih');
});

Route::get('/wisata_list_inf_situpattenggang', function () {
    return view('trip_information.wisata_list_inf_situpattenggang');
});

##Routing create travel journey
Route::get('/create_traveljourney', [HomeController::class, 'create_traveljourney']);
=======
>>>>>>> 938c2da411919d0d133a770f072b255a271235bd
