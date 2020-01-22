@extends ('layout.admin')

@section('index-content')
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                   <canvas id="sales-chart" height="80"></canvas>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Projects</h4>
                  </div>
                  <div class="card-body">
                   <table>
                      <tr>
                          <td>
                           <!-- <%= projectList[0].total%> -->
                           {{ $user }}
                           </td>
                          </tr>
                        </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total_Cost</h4>
                  </div>
                  <div class="card-body">
                   <table>
                      <tr>
                          <td>
                            {{ $tcost }}
                           <!-- <%= projectList[0].total_price%> -->
                           </td>
                          </tr>
                        </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                   <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Paid</h4>
                  </div>
                  <div class="card-body">
                   <table>
                      <tr>
                          <td>
                           {{ $paid }}
                           
                           </td>
                          </tr>
                        </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Supplies-->
          
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                   <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Employees</h4>
                  </div>
                  <div class="card-body">
                    {{ $t_emp }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Expenses</h4>
                  </div>
                  <div class="card-body">
                    ${{ $t_expense }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Supplier</h4>
                  </div>
                  <div class="card-body">
                    {{ $t_sup }}
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Profit-->

           <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <canvas id="sales-chart" height="80"></canvas>
                   <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Client</h4>
                  </div>
                  <div class="card-body">
                    {{ $t_client }}
                  </div>
                </div>
              </div>               
                </div>
              </div>
            </div>

              <!--Expense-->

            <div class="col-lg-6 col-md-4 col-sm-12">
             <div class="card card-statistic-2">
                <div class="card-stats">
                <canvas id="sales-chart" height="80"></canvas>
                   <div class="card card-statistic-2">
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Labours</h4>
                  </div>
                  <div class="card-body">
                    {{ $t_labour }}
                  </div>
                </div>
              </div>               
                </div>
              </div>
            </div>
          </div>

@stop