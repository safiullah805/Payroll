<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will be
| assigned to the "web" middleware group. Make something great!
|
*/

/* Dashboard Routes */
Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

/* Employee Routes */
Route::get('manage_employee', function () {
    return view('employee.manage_employee');
})->name('manage_employee');

Route::get('employee_profile', function () {
    return view('employee.employee_profile');
})->name('employee_profile');

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
