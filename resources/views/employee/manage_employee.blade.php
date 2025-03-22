@include('layout.header')

<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Add New Employee</span></h4>
            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">

    <!-- Add New Employee Card -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add New Employee</h5>
        </div>

        <div class="card-body">
            <form action="#" method="post">
                @csrf
                <!-- Name Field -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Name:</label>
                    <div class="col-lg-9">
                        <input type="text" name="name" class="form-control" placeholder="Enter employee name">
                    </div>
                </div>
                
                <!-- Email Field -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Email:</label>
                    <div class="col-lg-9">
                        <input type="email" name="email" class="form-control" placeholder="Enter employee email">
                    </div>
                </div>

                <!-- Age Field -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Age:</label>
                    <div class="col-lg-9">
                        <input type="number" name="age" class="form-control" placeholder="Enter employee age">
                    </div>
                </div>

                <!-- Payment Type Dropdown -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Salary Type</label>
                    <div class="col-lg-9">
                        <select class="form-control select" name="salary_type">
                            <option value="fixed_salary">Fixed Salary</option>
                            <option value="per_hour">Per Hour</option>
                        </select>
                    </div>
                </div>


                <!-- Per Hour Rate Field -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Rate ($):</label>
                    <div class="col-lg-9">
                        <input type="number" name="rate" step="0.01" class="form-control" placeholder="Enter rate">
                    </div>
                </div>


                <!-- Payment Frequency Dropdown -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Payment Frequency:</label>
                    <div class="col-lg-9">
                        <select class="form-control select" name="payment_frequency">
                            <option value="weekly">Weekly</option>
                            <option value="bi_weekly">Bi Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="semi_monthly">Semi-Monthly</option>
                        </select>
                    </div>
                </div>

                <!-- Staff Loan Amount Field (Optional) -->
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label">Staff Loan Amount (Optional):</label>
                    <div class="col-lg-9">
                        <input type="number" name="staff_loan_amount" step="0.01" class="form-control" placeholder="Enter deduction amount">
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">
                        Save Employee <i class="icon-paperplane ml-2"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- /Add New Employee Card -->

</div>
<!-- /content area -->

@include('layout.footer')
