<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example\FirstController;
use App\Http\Controllers\Example\SecondController;

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
    //dd(app());
    return view('welcome');
});
//Route::view('/about','about')->name('about.us');
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/about', [FirstController::class, 'aboutIndex'])->name('about.us');
Route::get('/contact', [FirstController::class, 'index'])->name('contact.us');
Route::post('/student/store', [FirstController::class, 'store'])->name('student.store');
Route::get('/testone', [SecondController::class, 'test']);

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact.us');

Route::get('/country', function () {
    return view('country');
})->middleware('country');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
