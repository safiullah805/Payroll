@include('layout.header')

<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Employees List</span></h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">

    <!-- Per Hour Payroll Employees Table Card -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Per Hour Payroll Employees</h5>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <ul class="nav nav-tabs nav-justified">
                <li class="nav-item"><a href="#fixed_payroll" class="nav-link active" data-toggle="tab">Fixed Payroll Employees</a></li>
                <li class="nav-item"><a href="#per_hour_payroll" class="nav-link" data-toggle="tab">Per Hour Payroll Employees</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="fixed_payroll">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>email</th>
                                    <th>Age</th>
                                    <th>Salary Type</th>
                                    <th>Rate</th>
                                    <th>Payment Frequency</th>
                                    <th>Staff Loan Balance</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fixedSalaryEmp as $employee)
                                    <tr>
                                        <td>{{ $employee->first_name }}</td>
                                        <td>{{ $employee->last_name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->age }}</td>
                                        <td>{{ $employee->salaryType->type ?? 'N/A'}}</td>
                                        <td>{{ '$'.$employee->rate }}</td>
                                        <td>{{ $employee->paymentFrequency->frequency ?? 'N/A' }}</td>
                                        <td>{{ $employee->staff_loan_amount != "" ? '$'.$employee->staff_loan_amount : "-" }}</td>
                                        <td>
                                            <a href="{{route('employee.edit', ['employee' => $employee->id])}}" ><i class="fa fa-pencil-square-o" title="Edit Profile"></i></a>
                                            <a href="javascript:void(0)"
                                                data-employee='@json(["userId" => $employee->id])'
                                                onclick="deleteSwal('{{ route('employee.delete', ['employee' => $employee->id]) }}', JSON.parse(this.dataset.employee))">
                                                <i class="fa fa-trash-o" title="Mark as inactive"></i>
                                            </a>                                            
                                        </td>
                                    </tr>                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $fixedSalaryEmp->links() }}
                    </div>
                </div>

                <div class="tab-pane fade" id="per_hour_payroll">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>email</th>
                                    <th>Age</th>
                                    <th>Salary Type</th>
                                    <th>Rate</th>
                                    <th>Payment Frequency</th>
                                    <th>Staff Loan Balance</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perHourEmp as $employee)
                                    <tr>
                                        <td>{{ $employee->first_name }}</td>
                                        <td>{{ $employee->last_name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->age }}</td>
                                        <td>{{ $employee->salaryType->type ?? 'N/A'}}</td>
                                        <td>{{ '$'.$employee->rate }}</td>
                                        <td>{{ $employee->paymentFrequency->frequency ?? 'N/A' }}</td>
                                        <td>{{ $employee->staff_loan_amount != "" ? '$'.$employee->staff_loan_amount : "-" }}</td>
                                        <td>
                                            <a href="{{route('employee.edit', ['employee' => $employee->id])}}" ><i class="fa fa-pencil-square-o" title="Edit Profile"></i></a>
                                            <a href="javascript:void(0)"
                                                data-employee='@json(["userId" => $employee->id])'
                                                onclick="deleteSwal('{{ route('employee.delete', ['employee' => $employee->id]) }}', JSON.parse(this.dataset.employee))">
                                                    <i class="fa fa-trash-o" title="Mark as inactive"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $fixedSalaryEmp->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Employees Table Card -->

</div>
<!-- /content area -->

@include('layout.footer')