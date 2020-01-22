@extends ('layout.manager')

@section('index-content')


  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="../../img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Bonus Accept Confirmation</h4></div>

              <div class="card-body">
                <form method="POST">
                   {{csrf_field()}}

                   <div class="form-group">
                    <label>Serial No:</label>
                    <label> {{$bonus['serialno']}}</label>
                    </div>



                  <div class="row">
                    <div class="form-group col-4">
                    <label>Employee Name:</label>
                    <label> {{$bonus['ename']}}</label>
                    </div>
                     <div class="form-group col-4">
                    <label>Bonus Reason:</label>
                    <label> {{$bonus['reason']}}</label>
                    </div>

                    <div class="form-group col-4">
                      <label>Status:</label>
                      <label> {{$bonus['status']}}</label>
                      </div>
                    
                  </div>

                 

                  
                  
                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Bonus Percentage</label>
                      <input type="text" class="form-control" name="percentage" value="{{$bonus['percentage']}}">
                    </div>

                     
                  </div>

                 

                    <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="Accept">
                      
                    </input>
                  </div>
                  <div>
                   
                </form>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  @stop