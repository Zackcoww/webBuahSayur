@extends('dashboard.master')
@section('title', 'Create Users')
@section('wrapper')
    @include('dashboard.wrapper')
@endsection
@section('nav')
    @include('dashboard.nav')
@endsection
@section('mainatas')
    @include('dashboard.mainatas')
@endsection


@section('content')
    
<div class="content">
    {{-- <div class="col-md-8"> --}}
        <div class="card card-user">
          <div class="card-header">
            <h5 class="card-title">Create User</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('users.store') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Nama" value="" name="name" id="name">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" value="" name="email" id="email">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" value="" name="password" id="password">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Roles</label>
                    <select class="form-control" name="roles" id="roles">
                      <option value="admin">Admin</option>
                      <option value="owner">Owner</option>
                    </select>
                  </div>
                </div>
              </div>

              {{-- <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>About Me</label>
                    <textarea class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
                  </div>
                </div>
              </div> --}}

              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">Add User</button>
                  <a href="{{ route('users.index') }}"><span class="btn btn-round btn-danger ms-3">Cancel</span></a>
                </div>
              </div>
            </form>
          </div>
        </div>
      {{-- </div> --}}
  </div>
  <footer class="footer footer-black  footer-white ">
    <div class="container-fluid">
      <div class="row">
        <nav class="footer-nav">
          <ul>
            <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
            <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
            <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
          </ul>
        </nav>
        <div class="credits ml-auto">
          <span class="copyright">
            © <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
          </span>
        </div>
      </div>
    </div>
  </footer>
@endsection