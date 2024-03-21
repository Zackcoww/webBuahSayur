@extends('dashboard.master')
@section('title', 'Users')
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
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Simple Table</h4>
          </div>
          <div class="card-header">
            <a href="{{ route('users.create') }}"><span class="btn btn-round btn-primary ms-3">Add Item</span></a>
          </div>
          <div class="card-body">
            <div>
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    No
                  </th>
                  <th>
                    Nama
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Role
                  </th>
                  <th class='text-center'>
                    Action
                  </th>
                </thead>
                <tbody>

                @foreach($users as $key => $user)
                  <tr>
                    <td>
                      {{ $key+1 }}
                    </td>
                    <td>
                      {{ $user->name }}
                    </td>
                    <td>
                      {{ $user->email }}
                    </td>
                    <td>
                      {{ $user->roles }}
                    </td>
                    <td class='text-center'>
                      <a href="{{ route('user.edit', $user->id) }}" class="btn btn-round btn-success">Edit</a>
                      <a href="{{ route('user.destroy', $user->id) }}" class="btn btn-round btn-danger" onclick="event.preventDefault(); document.getElementById('delete-user-{{ $user->id }}').submit();">Delete</a>
                      <form id="delete-user-{{ $user->id }}" action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: none;">
                          @csrf
                          @method('DELETE')
                      </form>
                  </td>
                  </tr>
                @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> 
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