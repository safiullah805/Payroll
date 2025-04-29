<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
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


Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    /* Employee Routes */
    Route::get('employees/listing', [EmployeeController::class, 'index'])->name('employees.listing');

    Route::get('employees/add', [EmployeeController::class, 'create'])->name('employee.add');
    Route::post('employees/create', [EmployeeController::class, 'store'])->name('employee.store');

    Route::get('employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('employees/{employee}/update', [EmployeeController::class, 'update'])->name('employee.update');

    Route::delete('employees/{employee}', [EmployeeController::class, 'destroy'])->name('employee.delete');

    /* Payroll Routes */
    Route::get('calculate_payroll', function () {
        return view('payroll.calculate_payroll');
    })->name('calculate_payroll');

    Route::get('employer_output', function () {
        return view('payroll.employer_output');
    })->name('employer_output');

    Route::get('salary_output', function () {
        return view('payroll.salary_output');
    })->name('salary_output');

    /* Settings Routes */
    Route::get('employee_deduction_settings', function () {
        return view('settings.employee_deduction_settings');
    })->name('employee_deduction_settings');

    Route::get('employer_contribution_settings', function () {
        return view('settings.employer_contribution_settings');
    })->name('employer_contribution_settings');


    Route::get('user_pages_profile_tabbed', function () {
        return view('employee.user_pages_profile_tabbed');
    })->name('user_pages_profile_tabbed');

    Route::get('components_modals', function () {
        return view('payroll.components_modals');
    })->name('components_modals');
    
});

require __DIR__.'/auth.php';
