@extends('dashboard.master')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                </div>
                <div class="col-7 col-md-8">
                    <div class="numbers">
                    <p class="card-category">Capacity</p>
                    <p class="card-title">150GB<p>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                <i class="fa fa-refresh"></i>
                Update Now
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                </div>
                <div class="col-7 col-md-8">
                    <div class="numbers">
                    <p class="card-category">Revenue</p>
                    <p class="card-title">$ 1,345<p>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                <i class="fa fa-calendar-o"></i>
                Last day
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                </div>
                <div class="col-7 col-md-8">
                    <div class="numbers">
                    <p class="card-category">Errors</p>
                    <p class="card-title">23<p>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                <i class="fa fa-clock-o"></i>
                In the last hour
                </div>
            </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                </div>
                <div class="col-7 col-md-8">
                    <div class="numbers">
                    <p class="card-category">Followers</p>
                    <p class="card-title">+45K<p>
                    </div>
                </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                <i class="fa fa-refresh"></i>
                Update now
                </div>
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