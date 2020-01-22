@extends ('layout.manager')

@section('index-content')
      <div class="main-content">
       </br>
       </br>
        <h1><div class="badge badge-warning" align="center">Profit Information</div></h1>
        </br>
       </br>
       </br>
       </br>
       </br>
       </br>

        <section class="section">
          <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
              <div class="card card-statistic-2"> 
                   <canvas id="sales-chart" height="80"></canvas>
               
                <div class="card-wrap">  <h3>Choose Date To See Profit</h3>
                  <div class="card-header"> 
                    <form method="post">
                    @csrf
                    From Date  :  <input type="date" name="fdate" /> &nbsp &nbsp

                    To Date : <input type="date" name="ldate" />  &nbsp &nbsp
                    <input type="submit">
 
                  </form>
                  </div>

                </br>

                   <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>

                  <div class="card-body">
                   <table>
                      <tr>
                          <td align="center">
                           {{$profit}}

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
                             {{$tprofit}}
 
                           </td>
                          </tr>
                        </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

         
          
     

@stop