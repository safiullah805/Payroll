<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\PaymentFrequency;
use App\Models\SalaryType;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fixedSalaryEmp = Employee::whereHas('salaryType', function ($query) {
            return $query->where('type', '=', 'Fixed Salary');
        })->with(['salaryType', 'paymentFrequency'])->paginate(10);

        $perHourEmp = Employee::whereHas('salaryType', function ($query) {
            return $query->where('type', '=', 'Per Hour');
        })->with(['salaryType', 'paymentFrequency'])->paginate(10);

        // dd($fixedSalaryEmp);

        return view('employee.employee_listing', compact('fixedSalaryEmp', 'perHourEmp'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $salaryTypes = SalaryType::get();
        $paymentFrequency = PaymentFrequency::get();

        return view('employee.create_employee', compact('salaryTypes', 'paymentFrequency'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'age' => 'required|numeric',
            'salary_type' => 'required',
            'rate' => 'required',
            'payment_frequency' => 'required',
        ]);
        
        Employee::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'age' => $request->age,
            'salary_type_id' => $request->salary_type,
            'rate' => $request->rate,
            'payment_frequency_id' => $request->payment_frequency,
            'staff_loan_amount' => $request->staff_loan_amount,
        ]);
        
        return redirect()->route('employees.listing')->with('success', 'Employee created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        $salaryTypes = SalaryType::get();
        $paymentFrequency = PaymentFrequency::get();

        return view('employee.edit_employee', compact('employee', 'salaryTypes', 'paymentFrequency'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'age' => 'required|numeric',
            'salary_type' => 'required',
            'rate' => 'required',
            'payment_frequency' => 'required',
        ]);
        
        $employee->update([
            'age' => $request->age,
            'salary_type_id' => $request->salary_type,
            'rate' => $request->rate,
            'payment_frequency_id' => $request->payment_frequency,
            'staff_loan_amount' => is_int($request->staff_loan_amount) ?? "",
        ]);

        return redirect()->route('employees.listing')->with('success', 'Employee updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        session()->flash('success', 'Employee deleted successfully.');

        return response()->json([
            'redirect' => route('employees.listing')
        ]);
    }
}
