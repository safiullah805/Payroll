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

    <!-- Employees Table Card (First Table) -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Fixed Payroll Employees</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Payment Type</th>
                            <th>Rate</th>
                            <th>Frequency</th>
                            <th>Staff Loan Balance</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>James</td>
                            <td>65</td>
                            <td>Fixed</td>
                            <td>$500</td>
                            <td>Monthly</td>
                            <td>N/A</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                                <button class="btn btn-success btn-sm">Add to Payroll</button>
                                <a href="{{ route('user_pages_profile_tabbed') }}" class="btn btn-primary btn-sm">Edit Profile</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /Employees Table Card -->

    <!-- Per Hour Payroll Employees Table Card (Second Table) -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Per Hour Payroll Employees</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Payment Type</th>
                            <th>Rate</th>
                            <th>Frequency</th>
                            <th>Staff Loan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Smith</td>
                            <td>22</td>
                            <td>Hourly</td>
                            <td>$20/hr</td>
                            <td>Monthly</td>
                            <td>N/A</td>
                            <td>
                                <button class="btn btn-danger btn-sm">Delete</button>
                                <a href="{{ route('user_pages_profile_tabbed') }}" class="btn btn-primary btn-sm">Edit Profile</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /Per Hour Payroll Employees Table Card -->

</div>
<!-- /content area -->

@include('layout.footer')