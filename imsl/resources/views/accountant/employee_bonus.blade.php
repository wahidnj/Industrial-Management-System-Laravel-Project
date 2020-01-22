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
              <div class="card-header"><h4>Bonus Request for Employee</h4></div>

              

              <div class="card-body">
                 <form method="POST" id="project_add">
                   {{csrf_field()}}

                   <div class="form-group">
                    <label>Employee ID : </label>
                    <label> {{$emp['eid']}}</label>
                    </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label>Employee Name : </label>
                      <label>{{$emp['ename']}}</label>
                    </div>
                     <div class="form-group col-6">
                      <label>Employee Email : </label>
                      <label>{{$emp['email']}}</label>
                    </div>
                    
                  </div>

                  
                  
                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Address : </label>
                     <label>{{$emp['address']}}</label>

                    </div>

                    <div class="form-group col-6">
                      <label>Contact : </label>
                      <label>{{$emp['contact']}}</label>
                    </div>

                    <div class="form-group col-6">
                      <label>Job Type : </label>
                       <label>{{$emp['type']}} </label>
                    </div>   

                    <div class="form-group col-6">
                      <label>Salary : </label>
                       <label>{{$emp['esalary']}} </label>
                    </div>

                    <div class="form-group col-6">
                      <label>Reason : </label>
                       <input type="text" name="reason">

                    </div>

                   
                <br>
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

 @stop
  