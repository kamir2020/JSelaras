<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    // Pengurusan Tender
    Route::get('/tenders', function () {
        return view('tenders.index');
    })->name('tenders.index');

    Route::get('/tenders/{id}', function ($id) {
        return view('tenders.show', ['id' => $id]);
    })->name('tenders.show');

    // Pengguna
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');

    // Laporan
    Route::get('/laporan', function () {
        return view('laporan.index');
    })->name('laporan.index');

    // Tetapan
    Route::get('/tetapan', function () {
        return view('tetapan.index');
    })->name('tetapan.index');

    // Vendor
    Route::get('/vendors', function () {
        return view('vendors.index');
    })->name('vendors.index');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin
    Route::get('/admin/users', [AdminController::class, 'index']);
    Route::get('/admin/users/create', [AdminController::class, 'create']);
    Route::post('/admin/users/store', [AdminController::class, 'store']);
});

require __DIR__.'/auth.php';
