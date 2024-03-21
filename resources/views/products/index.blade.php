@extends('dashboard.master')
@section('title', 'Products')
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
            <h4 class="card-title">Products</h4>
          </div>
          <div class="card-header">
            <a href="{{ route('products.create') }}"><span class="btn btn-round btn-primary ms-3">Add Products</span></a>
          </div>
          <div class="card-body">
            <div>
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    No
                  </th>
                  <th>
                    Product Name
                  </th>
                  <th>
                    Category
                  </th>
                  <th>
                    Price
                  </th>
                  <th>
                    Stok
                  </th>
                  <th>
                    Img 1
                  </th>
                  <th>
                    Img 2
                  </th>
                  <th>
                    Img 3
                   </th>
                   <th>
                    Deskripsi
                   </th>
                  <th class='text-center'>
                    Action
                  </th>
                </thead>
                <tbody>

                @foreach($products as $key => $product)
                  <tr>
                    <td>
                      {{ $key+1 }}
                    </td>
                    <td>
                      {{ $product->product_name }}
                    </td>
                    <td>
                      {{ $product->category }}
                    </td>
                    <td>
                      {{ $product->price }}
                    </td>
                    <td>
                      {{ $product->stok }}
                    </td>
                    <td>
                      <img src="{{ asset('storage/product_images/' . $product->foto1) }}" alt="Foto 1" style="max-width: 100px; max-height: 100px;">
                    </td>
                    <td>
                      <img src="{{ asset('storage/product_images/' . $product->foto2) }}" alt="Foto 2">
                    </td>
                    <td>
                      <img src="{{ asset('storage/product_images/' . $product->foto3) }}" alt="Foto 3">
                    </td>
                    <td>
                      {{ $product->deskripsi }}
                    </td>
                    <td class='text-center'>
                      <a href="{{ route('products.edit', $product->id) }}"><span class="btn btn-round btn-success">Edit</span></a>
                      <form method="POST" action="{{ route('products.destroy', $product->id) }}" onsubmit="return confirm('Are you sure you want to delete this product?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-round btn-danger">Delete</button>
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