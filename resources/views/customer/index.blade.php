@extends('dashboard.master')
@section('title', 'Customer')
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
            <h4 class="card-title"> Customers Table</h4>
          </div>
          <div class="card-header">
            <a href="{{ route('customer.create') }}"><span class="btn btn-round btn-primary ms-3">Add Item</span></a>
          </div>
          <div class="card-body">
            <div>
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    No
                  </th>
                  <th>
                    Name
                  </th>
                  <th>
                    Email
                  </th>
                  <th>
                    Contact
                  </th>
                  <th>
                    Address 1
                  </th>
                  <th>
                    Address 2
                  </th>
                  <th class='text-center'>
                    Action
                  </th>
                </thead>
                <tbody>
                  @foreach($customers as $key => $customer)
                  <tr>
                    <td>
                      {{ $key+1 }}
                    </td>
                    <td>
                      {{ $customer->name }}
                    </td>
                    <td>
                      {{ $customer->email }}
                    </td>
                    <td>
                      {{ $customer->phone }}
                    </td>
                    <td>
                      {{ $customer->address }}
                    </td>
                    <td>
                      {{ $customer->address2 }}
                    </td>
                    <td class='text-center'>
                      <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-round btn-success">Edit</a>
                      <a href="{{ route('customer.destroy', $customer->id) }}" class="btn btn-round btn-danger" onclick="event.preventDefault(); document.getElementById('delete-customer-{{ $customer->id }}').submit();">Delete</a>
                      <form id="delete-customer-{{ $customer->id }}" action="{{ route('customer.destroy', $customer->id) }}" method="POST" style="display: none;">
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