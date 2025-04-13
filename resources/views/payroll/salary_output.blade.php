@include('layout.header')
<!-- Ensure your layout.header contains: -->
<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

<!-- Page header -->
<div class="page-header page-header-light">
    <div class="container-fluid">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Salary Overview</span></h4>
                <a href="#" class="header-elements-toggle text-default d-md-none">
                    <i class="icon-more"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content container-fluid">
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Salary Overview</h5>
            <div class="header-elements d-flex flex-wrap">
                <button type="button" class="btn btn-success mb-2 mr-2">Download Excel</button>
                <button type="button" class="btn btn-primary mb-2 mr-2">Send Email</button>
                <!-- Trigger modal button -->
                <button type="button" class="btn btn-warning mb-2 mr-2" data-toggle="modal" data-target="#modal_form_horizontal">
                    Vacations Pay
                </button>
            </div>
        </div>
        <div class="card-body">
            <!-- Main Salary Overview Table -->
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

<!-- Modal Markup -->
<div id="modal_form_horizontal" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Salary Overview</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- Static Modal Table -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>O/TIME</th>
                                <th>D/Time</th>
                                <th>GROSS</th>
                                <th>SALARY</th>
                                <th>Vacation Hours</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>James</td>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>$500.00</td>
                                <td>$432.50</td>
                                <td>
                                    <div class="input-group">
                                        <input type="text" name="vacations_pay[]" class="form-control" placeholder="HH:MM" pattern="^([0-9]{1,2}):([0-5][0-9])$">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="button">Add</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4"><strong>Totals:</strong></td>
                                <td>$432.50</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->

@include('layout.footer')
