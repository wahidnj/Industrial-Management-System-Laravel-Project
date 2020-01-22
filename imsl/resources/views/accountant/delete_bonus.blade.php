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
              <div class="card-header"><h4>Delete Employee Bonus</h4></div>

              

              <div class="card-body">
                <form onsubmit="validate()" method="POST">
                    {{csrf_field()}}
                 <div class="form-group">
                    <label>Employee ID : </label>
                    <label> {{$emp['eid']}}</label>
                    </div>
               

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name"> Employee Name : </label>
                      <label> {{$emp['ename']}}</label>
                    </div>
                    
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Reason : </label>
                     <label> {{$emp['reason']}}</label>
                    </div>
                    
                  </div>
              
                    <div class="row">
                    <div class="form-group col-6">
                      <label>Date : </label>
                      <label> {{$emp['bdate']}}</label>
                    </div>
                    </div>

                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Status : </label>
                     <label> {{$emp['status']}}</label>
                    </div>
                    </div>

                    <div class="row">
                    <div class="form-group col-6">
                      <label>Percentage : </label>
                      <label> {{$emp['percentage']}}</label>
                    </div>
                    </div>
                  
                  
                  <h3>Are you sure?</h3>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="delete" value="Confirm">
                      
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