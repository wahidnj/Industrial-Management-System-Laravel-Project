@extends ('layout.manager')

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
              <div class="card-header"><h4>Employee Profiles</h4></div>

              

              <div class="card-body">
                <form s method="POST">
                    {{csrf_field()}}
                 <div class="form-group">
                    <label>Employee ID:</label>
                    <label> {{$user['eid']}}</label>
                    </div>
               
               <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Employee Name:</label>
                     <label> {{$user['ename']}}</label>
                    </div>
                    
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Email:</label>
                      <label> {{$user['email']}}</label>
                    </div>
                    
                  </div>

                  

                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Contact:</label>
                     <label> {{$user['contact']}}</label>
                    </div>
                    <div class="form-group col-6">
                      <label>Address:</label>
                      <label> {{$user['address']}}</label>
                    </div>
                  

                  
                    <div class="form-group col-6">
                      <label>Job Type:</label>
                      <label> {{$user['type']}}</label>
                    </div>
                    
                    </div>

                </form>
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>

 @stop