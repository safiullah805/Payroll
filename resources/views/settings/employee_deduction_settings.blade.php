@include('layout.header')

<!-- Page header -->
<div class="page-header page-header-light">
  <div class="page-header-content header-elements-md-inline">
    <div class="page-title d-flex">
      <h4><span class="font-weight-semibold">System Settings - Employee Contribution Rules</span></h4>
      <a href="#" class="header-elements-toggle text-default d-md-none">
        <i class="icon-more"></i>
      </a>
    </div>
  </div>
</div>
<!-- /page header -->

<!-- Content area -->
<div class="content">
  <!-- Social Security Contribution Settings Card -->
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title">Social Security Contributions Settings</h5>
    </div>
    <div class="card-body">
      <form action="#" method="post">
        @csrf
        <!-- Social Security (Private Sector) Contribution Rate -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Social Security (Private Sector) Rate (%):</label>
          <div class="col-lg-8">
            <input type="number" name="employee_ss_rate" class="form-control" value="6" step="0.01">
          </div>
        </div>
        <!-- Annual Earnings Cap -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Annual Earnings Cap:</label>
          <div class="col-lg-8">
            <input type="number" name="employee_ss_annual" class="form-control" value="78000" step="0.01">
            <small class="form-text text-muted">Default: $78,000 per year</small>
          </div>
        </div>
        <!-- Monthly Earnings Cap -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Monthly Earnings Cap:</label>
          <div class="col-lg-8">
            <input type="number" name="employee_ss_monthly" class="form-control" value="6500" step="0.01">
            <small class="form-text text-muted">Default: $6,500 per month</small>
          </div>
        </div>
        <!-- Fortnightly Earnings Cap -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Fortnightly Earnings Cap:</label>
          <div class="col-lg-8">
            <input type="number" name="employee_ss_fortnightly" class="form-control" value="3000" step="0.01">
            <small class="form-text text-muted">Default: $3,000 per fortnight</small>
          </div>
        </div>
        <!-- Weekly Earnings Cap -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Weekly Earnings Cap:</label>
          <div class="col-lg-8">
            <input type="number" name="employee_ss_weekly" class="form-control" value="1500" step="0.01">
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
  <!-- /Social Security Contribution Settings Card -->

  <!-- Medical Benefits Contribution Settings Card -->
  <div class="card">
    <div class="card-header header-elements-inline">
      <h5 class="card-title">Medical Benefits Contribution Settings</h5>
    </div>
    <div class="card-body">
      <form action="#" method="post">
        @csrf
        <!-- For Employed Employees Aged Over 16 to Under 60 -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Aged 16 to Under 60 (% of wages):</label>
          <div class="col-lg-8">
            <input type="number" name="employee_medical_16_60" class="form-control" value="3.5" step="0.01">
          </div>
        </div>
        <!-- For Employed Employees Aged 60 to Under 70 -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Aged 60 to Under 70 (% of wages):</label>
          <div class="col-lg-8">
            <input type="number" name="employee_medical_60_70" class="form-control" value="2.5" step="0.01">
          </div>
        </div>
        <!-- For Employed Employees Aged 70 and Over -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Aged 70 and Over (% of wages):</label>
          <div class="col-lg-8">
            <input type="number" name="employee_medical_70_over" class="form-control" value="0" step="0.01">
          </div>
        </div>
        <!-- Low Earnings Exception Note -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Low Earnings Exception:</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" readonly value="For earnings less than $400 monthly or $100 weekly, employee pays 0%">
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
      <form action="#" method="post">
        @csrf
        <!-- Adjustable Percentage Rates -->
        <h6 class="font-weight-semibold">Adjustable Percentage Rates</h6>
        <!-- Base Rate -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Base Rate (%):</label>
          <div class="col-lg-8">
            <input type="number" name="education_levy_base_rate" class="form-control" value="2.5" step="0.01">
            <small class="form-text text-muted">Default: 2.5% applied to taxable earnings up to the threshold</small>
          </div>
        </div>
        <!-- Additional Rate -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Additional Rate (%):</label>
          <div class="col-lg-8">
            <input type="number" name="education_levy_additional_rate" class="form-control" value="5" step="0.01">
            <small class="form-text text-muted">Default: 5% applied to earnings exceeding the threshold</small>
          </div>
        </div>
        <hr>
        <!-- Exemption & Threshold Values -->
        <h6 class="font-weight-semibold">Exemption &amp; Threshold Values</h6>
        <!-- Weekly Calculations -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Weekly Exemption ($):</label>
          <div class="col-lg-8">
            <input type="number" name="education_levy_weekly_exemption" class="form-control" value="125" step="0.01">
            <small class="form-text text-muted">Taxable Amount = Weekly Gross Income – $125</small>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Weekly Threshold ($):</label>
          <div class="col-lg-8">
            <input type="number" name="education_levy_weekly_threshold" class="form-control" value="1154" step="0.01">
            <small class="form-text text-muted">For earnings above $1,154 apply additional rate</small>
          </div>
        </div>
        <!-- Bi-Weekly Calculations -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Bi-Weekly Combined Exemption ($):</label>
          <div class="col-lg-8">
            <input type="number" name="education_levy_biweekly_exemption" class="form-control" value="250" step="0.01">
            <small class="form-text text-muted">Combined Exemption = 2 × $125</small>
          </div>
        </div>
        <!-- Monthly Calculations -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Monthly Exemption ($):</label>
          <div class="col-lg-8">
            <input type="number" name="education_levy_monthly_exemption" class="form-control" value="541.67" step="0.01">
            <small class="form-text text-muted">Taxable Amount = Monthly Gross Income – $541.67</small>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Monthly Threshold ($):</label>
          <div class="col-lg-8">
            <input type="number" name="education_levy_monthly_threshold" class="form-control" value="5000" step="0.01">
            <small class="form-text text-muted">For earnings above $5,000 apply additional rate</small>
          </div>
        </div>
        <!-- Bi-Monthly Calculations -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Bi-Monthly Exemption ($):</label>
          <div class="col-lg-8">
            <input type="number" name="education_levy_bimonthly_exemption" class="form-control" value="270.84" step="0.01">
            <small class="form-text text-muted">Half of $541.67</small>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Bi-Monthly Threshold ($):</label>
          <div class="col-lg-8">
            <input type="number" name="education_levy_bimonthly_threshold" class="form-control" value="2500" step="0.01">
            <small class="form-text text-muted">Half of $5,000</small>
          </div>
        </div>
        <!-- Daily Calculations -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Daily Exemption ($):</label>
          <div class="col-lg-8">
            <input type="number" name="education_levy_daily_exemption" class="form-control" value="25" step="0.01">
            <small class="form-text text-muted">Derived from $125/5</small>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Daily Threshold ($):</label>
          <div class="col-lg-8">
            <input type="number" name="education_levy_daily_threshold" class="form-control" value="230.8" step="0.01">
            <small class="form-text text-muted">Derived from $1154/5</small>
          </div>
        </div>
        <!-- Additional Consideration for Sick Leave -->
        <div class="form-group row">
          <label class="col-lg-4 col-form-label">Sick Leave Note:</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" readonly value="If on sick leave (40% wage) and exceeds exemption, same calculation applies">
          </div>
        </div>
        <!-- Save Button for Education Levy -->
        <div class="text-right">
          <button type="submit" class="btn btn-primary">Save Education Levy Settings</button>
        </div>
      </form>
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
