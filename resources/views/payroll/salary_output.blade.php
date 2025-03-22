@include('layout.header')

<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Salary Overview</span></h4>
            <a href="#" class="header-elements-toggle text-default d-md-none">
                <i class="icon-more"></i>
            </a>
        </div>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Salary Overview</h5>
            <div class="header-elements d-flex flex-wrap">
                <button type="button" class="btn btn-secondary mb-2 mr-2">Reset</button>
                <button type="button" class="btn btn-success mb-2 mr-2">Download Excel</button>
                <button type="button" class="btn btn-primary mb-2">Send Email</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>O/TIME</th>
                            <th>D/Time</th>
                            <th>GROSS</th>
                            <th>Social Security</th>
                            <th>Medical Benefits</th>
                            <th>Education</th>
                            <th>Misc.</th>
                            <th>Staff</th>
                            <th>SALARY</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>James</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>$500.00</td>
                            <td>$40.00</td>
                            <td>$15.00</td>
                            <td>$12.50</td>
                            <td>$0.00</td>
                            <td>$0.00</td>
                            <td>$432.50</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Totals:</strong></td>
                            <td>$500.00</td>
                            <td>$40.00</td>
                            <td>$15.00</td>
                            <td>$12.50</td>
                            <td>$0.00</td>
                            <td>$0.00</td>
                            <td>$432.50</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /content area -->

@include('layout.footer')
