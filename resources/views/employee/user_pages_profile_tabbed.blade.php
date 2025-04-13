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

                        

                        <h6 class="font-weight-semibold mb-0">Michael Wallas</h6>
                        <span class="d-block opacity-75">MISOL</span>
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
                        <form action="#">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Age</label>
                                        <input type="number" class="form-control" placeholder="Enter age">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Enter email" value="default@example.com">
                                    </div>
                                </div>
                            </div>
                
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Payment Type</label>
                                        <select class="form-control form-control-select2" data-fouc data-minimum-results-for-search="Infinity">
                                            <option value="per_hour">Per Hour</option>
                                            <option value="fixed_rate">Fixed Rate</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Rate</label>
                                        <input type="text" class="form-control" placeholder="Enter rate">
                                    </div>
                                </div>
                            </div>
                
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Frequency</label>
                                        <select class="form-control form-control-select2" data-fouc data-minimum-results-for-search="Infinity">
                                            <option value="weekly">Weekly</option>
                                            <option value="bi_weekly">Bi-Weekly</option>
                                            <option value="semi_monthly">Semi-Monthly</option>
                                            <option value="monthly">Monthly</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Staff Loan</label>
                                        <input type="text" class="form-control" placeholder="Enter staff loan">
                                    </div>
                                </div>
                            </div>
                
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Save changes</button>
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