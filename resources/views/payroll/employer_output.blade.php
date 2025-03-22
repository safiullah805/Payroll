

@include('layout.header')

<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Employer Contributions</span></h4>
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
            <h5 class="card-title">Employer Contributions</h5>
            <div class="header-elements">
                <button type="button" class="btn btn-secondary">Reset</button>
                <button type="button" class="btn btn-success ml-2">Download Excel</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Gross Salary</th>
                            <th>Social Security</th>
                            <th>Medical Benefit</th>
                            <th>Total Employer Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>James</td>
                            <td>$500.00</td>
                            <td>$40.00</td>
                            <td>$25.00</td>
                            <td>$65.00</td>
                        </tr>
                        <tr>
                            <td><strong>Totals:</strong></td>
                            <td>$500.00</td>
                            <td>$40.00</td>
                            <td>$25.00</td>
                            <td>$65.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /content area -->

@include('layout.footer')





