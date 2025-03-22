@include('layout.header')

<!-- Page header -->
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Upload Timesheet</span></h4>
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
            <h5 class="card-title">Upload Timesheet</h5>
        </div>
        <div class="card-body">
            <p>Upload timesheet Excel file with employee hours</p>
            <p><strong>Format:</strong> Name, Hours, Overtime</p>
            <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <div class="custom-file" style="max-width: 500px;">
                        <input type="file" class="custom-file-input" id="timesheetFile" name="timesheet">
                        <label class="custom-file-label" for="timesheetFile">Choose File - No file chosen</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Process Timesheet</button>
            </form>
        </div>
    </div>
</div>
<!-- /content area -->

@include('layout.footer')
