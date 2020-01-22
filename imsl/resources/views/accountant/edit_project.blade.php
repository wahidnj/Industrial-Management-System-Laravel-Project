@extends ('layout.mainAccountant')

@section('index-content')


  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="../img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Edit Project Information</h4></div>

              <div class="card-body">
                <form method="POST" id="project_add">
                   {{csrf_field()}}

                   <div class="form-group">
                    <label>Project ID : </label>
                    <label> {{$project['pid']}}</label>
                    </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Project Name : </label>
                      <label>{{$project['pname']}}</label>
                    </div>
                     <div class="form-group col-6">
                      <label>Client Name : </label>
                      <label>{{$project['client']}}</label>
                    </div>
                    
                  </div>

                  
                  
                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Total Cost : </label>
                     <label>{{$project['tcost']}}</label>

                    </div>

                    <div class="form-group col-6">
                      <label>Amount Paid : </label>
                      <label>{{$project['paid']}}</label>
                    </div>

                       

                    <div class="form-group col-6">
                      <label>Project Status : </label>
                       <label>{{$project['status']}} </label>
                    </div>

                    <div class="form-group col-6">
                      <label>Amount Due : </label>
                      <label>{{$project['tcost']-$project['paid']}}</label>
                    </div>

                      </div>
                   
                   <div class="form-group col-6">
                      <label>Pay : </label>
                   <input type="text" name="pay">
                    </div>
                 

                 

                  <div class="form-group col-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="Update Project">
                      
                    </input>
                  </div>
                  <div>
                  </div>
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