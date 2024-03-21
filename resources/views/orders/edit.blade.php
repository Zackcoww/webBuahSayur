@extends('dashboard.master')
@section('title', 'Order Edit')
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
            <h5 class="card-title">Edit Order</h5>
          </div>
          
          <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Order Date</label>
                        <input type="date" class="form-control" placeholder="Nama" value="">
                      </div>
                    </div>
                  </div>
    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Pay Date</label>
                          <input type="date" class="form-control" placeholder="Address" value="">
                        </div>
                      </div>
                    </div>
    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                              <label for="">Customer</label>
                              <select name="" id="" class="form-control">
                                      <option value="cash">Kurto</option> 
                                      <option value="cheque">Zaky</option> 
                              </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                              <label for="">User</label>
                              <select name="" id="" class="form-control">
                                      <option value="cash">Kurto</option> 
                                      <option value="cheque">Zaky</option> 
                              </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Payment Mode</label>
                          <input type="number" class="form-control" placeholder="Payment Mode" value="">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Amount Paid</label>
                          <input type="number" class="form-control" placeholder="Amount Paid" value="">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Discount</label>
                          <input type="number" class="form-control" placeholder="Discount" value="">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <div class="form-group">
                              <label for="">Status</label>
                              <select name="" id="" class="form-control">
                                      <option value="">Paid</option> 
                                      <option value="">Not Paid</option> 
                                      <option value="">Balance</option> 
                              </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Comment</label>
                          <textarea class="form-control textarea"></textarea>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Invoiceno</label>
                          <input type="text" class="form-control" placeholder="Invoiceno" value="">
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
                  <a href="{{ route('customer.index') }}"><span class="btn btn-round btn-danger ms-3">Cancel</span></a>
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