@extends('dashboard.master')
@section('title', 'Edit User')
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
            <h5 class="card-title">Edit User</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('user.update', ['id' => $user->id]) }}">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Nama" value="{{ $user->name }}" name='name' id="name">
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" value="{{ $user->email }}" name="email" id="email">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" value="{{ $user->email }}" name="password" id="password">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Roles</label>
                    <select class="form-control" name="roles">
                      <option value="admin" {{ $user->roles === 'admin' ? 'selected' : '' }}>Admin</option>
                      <option value="owner" {{ $user->roles === 'owner' ? 'selected' : '' }}>Owner</option>
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
                  <button type="submit" class="btn btn-primary btn-round">Edit User</button>
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