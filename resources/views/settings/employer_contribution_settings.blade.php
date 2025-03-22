@include('layout.header')

<!-- Page header -->
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><span class="font-weight-semibold">System Settings - Employer Contribution Settings</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none">
        <i class="icon-more"></i>
      </a>
    </div>
  </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">
  <!-- Social Security (Private Sector) Contribution Settings Card -->
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title">Social Security (Private Sector) Contribution Settings</h5>
    </div>
    <div class="card-body">
      <form action="#" method="post">
        @csrf
        <!-- Social Security (Private Sector) Contribution Rate -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Social Security (Private Sector) Rate (%):</label>
          <div class="col-lg-8">
            <input type="number" name="employer_ss_rate" class="form-control" value="8" step="0.01">
          </div>
        </div>
        <!-- Annual Earnings Cap -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Annual Earnings Cap:</label>
          <div class="col-lg-8">
            <input type="number" name="employer_ss_annual" class="form-control" value="78000" step="0.01">
            <small class="form-text text-muted">Default: $78,000 per year</small>
          </div>
        </div>
        <!-- Monthly Earnings Cap -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Monthly Earnings Cap:</label>
          <div class="col-lg-8">
            <input type="number" name="employer_ss_monthly" class="form-control" value="6500" step="0.01">
            <small class="form-text text-muted">Default: $6,500 per month</small>
          </div>
        </div>
        <!-- Fortnightly Earnings Cap -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Fortnightly Earnings Cap:</label>
          <div class="col-lg-8">
            <input type="number" name="employer_ss_fortnightly" class="form-control" value="3000" step="0.01">
            <small class="form-text text-muted">Default: $3,000 per fortnight</small>
          </div>
        </div>
        <!-- Weekly Earnings Cap -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Weekly Earnings Cap:</label>
          <div class="col-lg-8">
            <input type="number" name="employer_ss_weekly" class="form-control" value="1500" step="0.01">
            <small class="form-text text-muted">Default: $1,500 per week</small>
          </div>
        </div>
        <!-- Save Button for Social Security -->
        <div class="text-right">
          <button type="submit" class="btn btn-primary">Save Social Security Settings</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Social Security (Private Sector) Contribution Settings Card -->

  <!-- Medical Benefits Contribution Settings Card -->
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title">Medical Benefits Contribution Settings</h5>
    </div>
    <div class="card-body">
      <form action="#" method="post">
        @csrf
        <!-- Employer Contribution for Employed Employees Aged Over 16 to Under 60 -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Aged 16 to Under 60 (% of wages):</label>
          <div class="col-lg-8">
            <input type="number" name="employer_medical_16_60" class="form-control" value="3.5" step="0.01">
          </div>
        </div>
        <!-- Employer Contribution for Employed Employees Aged 60 to Under 70 -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Aged 60 to Under 70 (% of wages):</label>
          <div class="col-lg-8">
            <input type="number" name="employer_medical_60_70" class="form-control" value="0" step="0.01">
          </div>
        </div>
        <!-- Employer Contribution for Employed Employees Aged 70 and Over -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Aged 70 and Over (% of wages):</label>
          <div class="col-lg-8">
            <input type="number" name="employer_medical_70_over" class="form-control" value="0" step="0.01">
          </div>
        </div>
        <!-- Low Earnings Exception -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Low Earnings Exception (%):</label>
          <div class="col-lg-8">
            <input type="number" name="employer_medical_low" class="form-control" value="7" step="0.01">
            <small class="form-text text-muted">For employees earning less than $400 monthly or $100 weekly, employer pays 7% of wages</small>
          </div>
        </div>
        <!-- Save Button for Medical Benefits -->
        <div class="text-right">
          <button type="submit" class="btn btn-primary">Save Medical Benefits Settings</button>
        </div>
      </form>
    </div>
  </div>
  <!-- /Medical Benefits Contribution Settings Card -->

  <!-- Education Levy Settings Card -->
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title">Education Levy Settings</h5>
    </div>
    <div class="card-body">
      <div class="alert alert-info">
        <strong>Note:</strong> This levy is deducted from employees’ wages only; no separate employer contribution applies.
      </div>
    </div>
  </div>
  <!-- /Education Levy Settings Card -->

  <!-- Reset Settings Card -->
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title">Reset Settings</h5>
    </div>
    <div class="card-body">
      <p>Reset all settings to their default values.</p>
      <button type="button" class="btn btn-warning">Reset to Default Values</button>
    </div>
  </div>
  <!-- /Reset Settings Card -->
</div>
<!-- /content area -->

@include('layout.footer')
