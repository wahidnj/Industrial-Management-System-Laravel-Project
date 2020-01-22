@extends ('layout.manager')

@section('index-content')
      <div class="main-content">
       </br>
       </br>
        <h1><div class="badge badge-warning" align="center">Welcome To Manager Home</div></h1>
        </br>
       </br>
       </br>
       </br>
       </br>
       </br>

        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                   <canvas id="sales-chart" height="80"></canvas>
               
                <div class="card-wrap">
                  <div class="card-header">
                    <h2>Total Orders</h2>
                  </div>

                   <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>

                  <div class="card-body">
                   <table>
                      <tr>
                          <td>
                           {{$count}}

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
                    <h3>Orders Completed</h3>
                  </div>
                  <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                 

                  <div class="card-body">
                   <table>
                      <tr>
                          <td>
                           {{$completed}}
                           
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
                    <h3>Total Profit</h3>
                  </div>

                  <div class="card-icon shadow-primary bg-primary">
                   <i class="fas fa-dollar-sign"></i>
                </div>
                  <div class="card-body">
                   <table>
                      <tr>
                          <td>
                             {{$profit}}


                          
                           </td>
                          </tr>
                        </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

         
          
     

@stop