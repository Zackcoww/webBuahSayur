@extends('dashboard.master')
@section('title', 'Create Products')
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
            <h5 class="card-title">Tambah Products</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" class="form-control" placeholder="Product Name" value="" name="name" id="name">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="form-group">
                        <label for="">Product Category</label>
                        <select name="category" id="category" class="form-control">
                                <option value="buah">Buah</option> 
                                <option value="sayur">Sayur</option> 
                        </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" placeholder="Price Each" value="" name="price" id="price">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Stok</label>
                    <input type="number" class="form-control" placeholder="Stok" value="" name="stok" id="stok">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="input-group">
                    <input type="file" class="form-control" id="img1" name="img1">
                    <label class="input-group-text" for="img1">Upload Image 1</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="input-group">
                    <input type="file" class="form-control" id="img2" name="img2">
                    <label class="input-group-text" for="img2">Upload Image 2</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="input-group">
                    <input type="file" class="form-control" id="img3" name="img3">
                    <label class="input-group-text" for="img3">Upload Image 3</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="Description" value="" name="desc" id="desc">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="update ml-auto mr-auto">
                  <button type="submit" class="btn btn-primary btn-round">Add Products</button>
                  <a href="{{ route("products.index") }}"><span class="btn btn-round btn-danger ms-3">Cancel</span></a>
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