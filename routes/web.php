<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\NewsUpdateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Appointment;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'redirect']);
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'admin')->name('admin.')->prefix('admin')->group(function () {
    // admin routes
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/doctors', DoctorController::class);
    Route::resource('/appointments', AppointmentController::class);
    Route::resource('/news-updates', NewsUpdateController::class);

    Route::get('/approve-appointment/{id}', [AppointmentController::class, 'approveAppointment'])->name('approve-appointment');
    Route::get('/cancel-appointment/{id}', [AppointmentController::class, 'cancelAppointment'])->name('cancel-appointment');
});

//appointment routes
Route::post('/appointments', [HomeController::class, 'makeAppointment'])->name('appointments');
Route::get('/my-appointments', [HomeController::class, 'myAppointmentsView'])->name('my-appointments');
Route::delete('/cancel-appointment/{id}', [HomeController::class, 'cancelAppointment'])->name('cancel-appointment');



require __DIR__ . '/auth.php';
