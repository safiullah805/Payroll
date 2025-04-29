@include('layout.header')

<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">User Profile</span></h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">

    <!-- Inner container -->
    <div class="d-md-flex align-items-md-start">

        <!-- Left sidebar component -->
        <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left wmin-300 border-0 shadow-0 sidebar-expand-md">
            <div class="sidebar-content">
                <!-- Navigation -->
                <div class="card">
			    	<div class="card-body text-center card-img-top" style="background-image: url('{{ asset('assets/global_assets/images/backgrounds/panel_bg.png') }}'); background-size: contain;">
                        <h6 class="font-weight-semibold mb-0">{{ $employee->first_name." ". $employee->last_name }}</h6>
                    </div>

                    <div class="card-body p-0">
                        <ul class="nav nav-sidebar mb-2">
                            <li class="nav-item-header">Navigation</li>
                            <li class="nav-item">
                                <a href="#profile" class="nav-link active" data-toggle="tab">
                                    <i class="icon-user"></i>
                                    My profile
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /navigation -->
            </div>
        </div>
        <!-- /left sidebar component -->

        <!-- Right content -->
        <div class="tab-content w-100 overflow-auto">
            <!-- Profile Tab -->
            <div class="tab-pane fade active show" id="profile">

             <!-- Profile info -->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Profile information</h5>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('employee.update', ['employee' => $employee->id]) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Age</label>
                                        <input type="number" name="age" class="form-control" value="{{ $employee->age }}">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $employee->email }}" disabled>
                                    </div>
                                </div>
                            </div>
                
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Salary Type</label>
                                        <select class="form-control form-control-select2" name="salary_type">
                                            @foreach ($salaryTypes as $salaryType)
                                                <option value="{{ $salaryType->id }}" {{ $salaryType->id == $employee->salary_type_id ? 'selected' : '' }} > {{ $salaryType->type }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Rate</label>
                                        <input type="text" name="rate" class="form-control" value="{{ $employee->rate }}">
                                    </div>
                                </div>
                            </div>
                
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Frequency</label>
                                        <select class="form-control form-control-select2" name="payment_frequency">
                                            @foreach ($paymentFrequency as $frequency)
                                                <option value="{{ $frequency->id }}" {{ $frequency->id == $employee->payment_frequency_id ? 'selected' : '' }} > {{ $frequency->frequency }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Staff Loan</label>
                                        <input type="text" name="staff_loan_amount" class="form-control" value="{{ $employee->staff_loan_amount ?? "-"}}">
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex bd-highlight mb-3">
                                <div class="p-2 bd-highlight">
                                    <a href="{{ route('employees.listing') }}" class="btn btn-danger">Cancel</a>
                                </div>

                                <div class="ml-auto p-2 bd-highlight">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                        </form>
                    </div>
                </div>
                <!-- /profile info -->
                <!-- Sales stats -->
                <div class="card">
                    <div class="card-header header-elements-sm-inline">
                        <h6 class="card-title">Weekly statistics</h6>
                        <div class="header-elements">
                            <span><i class="icon-history mr-2 text-success"></i> Updated 3 hours ago</span>
                            <div class="list-icons ml-3">
                                <a class="list-icons-item" data-action="reload"></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-container">
                            <div class="chart has-fixed-height" id="weekly_statistics"></div>
                        </div>
                    </div>
                </div>
                <!-- /sales stats -->
            </div>
            <!-- /profile tab -->
        </div>
        <!-- /right content -->
    </div>
    <!-- /inner container -->
</div>
<!-- /content area -->

@include('layout.footer')