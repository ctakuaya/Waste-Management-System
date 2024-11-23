<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\StaffDashboardController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\BinController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Catch-All Dashboard Route
Route::get('/dashboard', function () {
    $role = Auth::user()->role;
    switch ($role) {
        case 'Admin':
            return redirect()->route('admin.dashboard');
        case 'Customer':
            return redirect()->route('customer.dashboard');
        case 'Staff':
            return redirect()->route('staff.dashboard');
        default:
            return redirect()->route('welcome');
            // Default fallback route 
    }
})->middleware(['auth', 'verified'])->name('dashboard');







// Admin Dashboard Route
Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->middleware('role')->name('admin.dashboard');
    // Add more admin routes here 
});

// Customer Dashboard Route
Route::middleware(['auth', 'role:Customer'])->group(function () {
    Route::get('/customer/dashboard', [CustomerDashboardController::class, 'index'])->middleware('role')->name('customer.dashboard');
    // Add more customer routes here 
});

// Staff Dashboard Route
Route::middleware(['auth', 'role:Staff'])->group(function () {

    Route::get('/staff/dashboard', [StaffDashboardController::class, 'index'])->middleware('role')->name('staff.dashboard');

    // Add more staff routes here 
});

Route::middleware(['auth', 'role:customer,admin'])->group(function () {
     Route::resource('bins', BinController::class); 
    });

    Route::middleware(['auth', 'role:customer,admin'])->group(function () {
        Route::get('/bins/create', [BinController::class, 'create'])->name('bins.create');
        Route::post('/bins/store', [BinController::class, 'store'])->name('bins.store');
    });
// GetStaff table
    Route::middleware(['auth', 'role:admin'])->group(function () { 
        Route::get('/admin/dashboard', [AdminDashboardController::class, 'getStaff'
        ])->name('admin.dashboard'); });

//route for viewing individual staff members
Route::middleware(['auth', 'role:customer,admin'])->group(function () { 
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'getStaff'])->name('admin.dashboard');
     Route::get('/staff/{id}', [StaffDashboardController::class, 'viewStaffByID'])->name('staff.view'); });


//routes for viewing the customer list and individual customer details
    Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'getStaff'])->name('admin.dashboard');
    Route::get('/customers', [CustomerDashboardController::class, 'getcustomers'])->name('customers.index');
    Route::get('/customers/{id}', [CustomerDashboardController::class, 'viewCustomerByID'])->name('customers.view'); 
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
