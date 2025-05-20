<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Artisan;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/check-db', function () {
    return [
        'host' => env('DB_HOST'),
        'username' => env('DB_USERNAME'),
        'password' => env('DB_PASSWORD') ? 'SET' : 'NOT SET',
        'database' => env('DB_DATABASE'),
    ];
});
Route::get('/clear-config', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    return 'Config cache cleared!';
});


Route::get('/run-migrations', function () {
    Artisan::call('migrate', ['--force' => true]);
    return '✅ Migrations executed successfully!';
});




Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/homes', [PageController::class, 'homes'])->name('homes');
Route::get('/apartments', [PageController::class, 'apartments'])->name('apartments');
Route::get('/plots', [PageController::class, 'plots'])->name('plots');
Route::get('/farm-houses', [PageController::class, 'farmHouses'])->name('farmHouses');
Route::get('/new-projects', [PageController::class, 'newProjects'])->name('newProjects');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

 


require __DIR__.'/auth.php';
