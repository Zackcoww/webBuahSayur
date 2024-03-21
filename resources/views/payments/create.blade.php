@extends('dashboard.master')
@section('title', 'Create Payments')
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
            <h5 class="card-title">Tambah Payments</h5>
          </div>
          <div class="card-body">
            <form>
              
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="form-group">
                        <label for="">Pmode</label>
                        <select name="" id="" class="form-control">
                                <option value="">Cash</option> 
                                <option value="">Not Paid</option> 
                                <option value="">Cheque</option> 
                        </select>
                    </div>
                  </div>
                </div>
              </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Chaque No</label>
                      <input type="text" class="form-control" placeholder="Chaque No" value="">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Chaque Date</label>
                      <input type="date" class="form-control" placeholder="Chaque Date" value="">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Bank</label>
                      <input type="text" class="form-control" placeholder="Bank" value="">
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
                  <button type="submit" class="btn btn-primary btn-round">Add Payments</button>
                  <a href="/payments"><span class="btn btn-round btn-danger ms-3">Cancel</span></a>
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