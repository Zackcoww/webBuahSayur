@extends('dashboard.master')


{{-- <div class="w-50 border rounded px-3 py-3 mx-auto"> --}}
 
    
        
        <div class="w-50 rounded px-3 py-3 mx-auto">
            {{-- <div class="col-md-8"> --}}
                <div class="card card-user">
                  <div class="card-header">
                    <h5 class="card-title">Register</h5>
                  </div>
                  <div class="card-body">
                    <form action="/sesi/create" method="POST">
        
                      <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control" placeholder="Name" name='name' value="{{ Session::get('name') }}">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" class="form-control" placeholder="Email" name='email' value="{{ Session::get('email') }}">
                            </div>
                          </div>
                        </div>
          
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label>Password</label>
                              <input type="password" class="form-control" placeholder="Password" name="password">
                            </div>
                          </div>
                        </div>
          
                        <div class="row">
                          <div class="update ml-auto mr-auto">
                            <button type="submit" name="submit" class="btn btn-primary btn-round">Register</button>
                            <a href="{{ route('users.index') }}"><span class="btn btn-round btn-danger ms-3">Cancel</span></a>
                          </div>
                        </div>
                    </form>
                  </div>
                </div>
              {{-- </div> --}}
          </div>

</div>
