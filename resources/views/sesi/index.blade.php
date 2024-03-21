@extends('dashboard.master')


{{-- <div class="w-50 border rounded px-3 py-3 mx-auto"> --}}
 
    <form action="/sesi/login" method="POST">
        
        <div class="w-50 rounded px-3 py-3 mx-auto">
            {{-- <div class="col-md-8"> --}}
                <div class="card card-user">
                  <div class="card-header">
                    <h5 class="card-title">Login</h5>
                  </div>
                  <div class="card-body">
                    <form action="/siswa/login" method="POST">
        
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
                          <button type="submit" name="submit" class="btn btn-primary btn-round">Login</button>
                          <a href="/"><span class="btn btn-round btn-danger ms-3">Cancel</span></a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <a href="/sesi/register">Dont' Have an Account? Register!</a>
              {{-- </div> --}}
          </div>
    </form>
</div>
