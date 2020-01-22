@extends ('layout.admin')

@section('index-content')


  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <img src="{{ url('/stisla/img/stisla-fill.svg') }}" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Edit Project Details</h4></div>

              <div class="card-body">
                <form method="POST" id="project_add">
                   {{csrf_field()}}
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Project Name</label>
                      <input id="name" type="text" class="form-control" name="pname" value="{{$user['pname']}}" autofocus>
                    </div>
                     <div class="form-group col-6">
                      <label>Client Name</label>
                      <input type="text" class="form-control" name="client" value="{{$user['client']}}">
                    </div>
                    
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Total Cost</label>
                      <input id="tcost" type="text" class="form-control" name="tcost" value="{{$user['tcost']}}" autofocus>
                    </div>
                     <div class="form-group col-6">
                      <label>Paid</label>
                      <input type="text" class="form-control" name="paid" value="{{$user['paid']}}">
                    </div>
                    
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="name">Estimated Cost</label>
                      <input id="ecost" type="text" class="form-control" name="ecost" value="{{$user['ecost']}}" autofocus>
                    </div>
                     <div class="form-group col-6">
                      <label>Details</label>
                      <input type="text" class="form-control" name="details" value="{{$user['details']}}">
                    </div>
                    
                  </div>

                  
                  
                 
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Status</label>
                      <input type="text" class="form-control" name="status" value="{{$user['status']}}">
                    </div>
                   

                 

                 

                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit">
                      Update Project
                    </input>
                  </div>
                  <div>
                    <button type="cancle" class="btn btn-secondary btn-lg btn-block" name="cancel">
                      Cancel
                    </button>
                  </div>
                </form>
                @foreach ($errors->all() as $error)
                   {{ $error }} <br>
                  @endforeach
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
@stop