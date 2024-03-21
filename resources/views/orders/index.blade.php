@extends('dashboard.master')
@section('title', 'Orders')
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
            <h4 class="card-title">Ordres</h4>
          </div>
          <div class="card-header">
            <a href="{{ route('orders.create') }}"><span class="btn btn-round btn-primary ms-3">Add Item</span></a>
          </div>
          <div class="card-body">
            <div>
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    No
                  </th>
                  <th>
                    Customer
                  </th>
                  <th>
                    Order Date
                  </th>
                  <th>
                    Total Amount
                  </th>
                  <th>
                    Status
                  </th>
                  <th class='text-center'>
                    Action
                  </th>
                </thead>
                <tbody>
                  @foreach($orders as $key => $order)
                  <tr>
                    <td>
                      {{ $key+1 }}
                    </td>
                    <td>
                      {{ $order->customer->name }}
                    </td>
                    <td>
                      {{ $order->order_date }}
                    </td>
                    <td>
                      {{ $order->total_amount }}
                    </td>
                    <td>
                      {{ $order->status }}
                    </td>
                    
                    <td class='text-center'>
                        <a href="/orders/edit"><span class="btn btn-round btn-success">Edit</span></a>
                        <a href="#"><span class="btn btn-round btn-danger">Delete</span></a>
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