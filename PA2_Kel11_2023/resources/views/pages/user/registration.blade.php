@extends('layouts.user.master')
@section('title', 'Registration')
@section('content')
    <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white" data-image-src="{{asset('assets/img/photos/bg18.png')}}">
      <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h1 class="display-1 mb-3">Sign Up</h1>
            <nav class="d-inline-block" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
              </ol>
            </nav>
            <!-- /nav -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-dark">
      <div class="container pb-14 pb-md-16">
        <div class="row">
          <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto mt-n20">
            <div class="card">
              <div class="card-body p-11 text-center">
                <h2 class="mb-3 text-start">Sign up to Sandbox</h2>
                <p class="lead mb-6 text-start">Registration takes less than a minute.</p>
                <form class="text-start mb-3">
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control" placeholder="Name" id="loginName">
                    <label for="loginName">Name</label>
                  </div>
                  <div class="form-floating password-field mb-4">
                    <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                    <span class="password-toggle"><i class="uil uil-eye"></i></span>
                    <label for="loginPassword">Password</label>
                  </div>
                  <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign Up</a>
                </form>
                <!-- /form -->
                
                <!--/.social -->
              </div>
              <!--/.card-body -->
            </div>
            <!--/.card -->
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
@include('layouts.user.footer')
@endsection