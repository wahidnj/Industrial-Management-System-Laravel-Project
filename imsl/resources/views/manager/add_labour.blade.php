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
              <div class="card-header"><h4>Labor Registration</h4></div>

              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Labor Name</label>
                      <input id="name" type="text" class="form-control" name="laborName" autofocus>
                    </div>
                     <div class="form-group col-6">
                      <label>Labor Address</label>
                      <input type="text" class="form-control" name="laborAddress">
                    </div>
                    
                  </div>

                 

                  
                  
                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Labor Contact</label>
                      <input type="text" class="form-control" name="laborContact">
                    </div>
                   

                   <div class="form-group col-6">
                      <label>Manager</label>
                      <select class="form-control selectric" name="job">
                        <option value="Manager">Manager</option>
                        <option value="Manager1">Manager1</option>
                        <option value="Manager2">Manager2</option>
                        
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Labor Experties</label>
                      <input type="text" class="form-control" name="laborExperties">
                    </div>
                    <div class="form-group col-6">
                      <label>Labor Salary</label>
                      <input type="text" class="form-control" name="laborSalary">
                    </div>
                    </div>

                 

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                      Add to list
                    </button>
                  </div>
                  <div>
                    <button type="button" class="btn btn-secondary btn-lg btn-block" name="cancel">
                      Cancel
                    </button>
                  </div>
                </form>
                @foreach ($errors->all() as $error)
                   {{ $error }} <br>
                  @endforeachs
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>
@stop