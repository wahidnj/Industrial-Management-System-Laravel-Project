@extends ('layout.mainAccountant')

@section('index-content')
      <div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                   <canvas id="sales-chart" height="80"></canvas>
              
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Labours</h4>
                  </div>
                  <div class="card-body">
                   <table>
                      <tr>
                          <td>
  
              <td>{{$totalLabour}}</td>
   

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
                
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Bonus Request</h4>
                  </div>
                  <div class="card-body">
                   <table>
                      <tr>
                          <td>
                           <td>{{$bonusRequest}}</td>
                           
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
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Bonus Reqeuest Accept</h4>
                  </div>
                  <div class="card-body">
                   <table>
                      <tr>
                         <td>
                           <td>{{$totalAccepted}}</td>
                           
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
                    <h4>Total Bonus Request Rejected</h4>
                  </div>
                  <div class="card-body">
                    <td>{{$totalRejected}}</td>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Bonus Request Pending</h4>
                  </div>
                  <div class="card-body">
                  <td>{{$totalPending}}</td>

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
                    <h4>Total Expenses</h4>
                  </div>
                  <div class="card-body">
                  <td>{{$totalExpense}}</td>
                    
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12" >
                         
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div align="center">
                   <form method="post">
                  @csrf
                  Start Date :<input type="date" name="fdate" />
                  Ending Date :<input type="date" name="ldate" />
                  <input type="submit">
 
                  </form>

                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Expenses</h4>
                  </div>
                  <div class="card-body">
                   <td>{{$Expense}}</td>

                    
                  </div>
                </div>
              </div>
            </div>

          </div>

          </div>

@stop