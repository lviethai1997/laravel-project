<!doctype html>
<html class="no-js" lang="">

<!-- Tieu Long Lanh -->
<head>
		<!-- Basic page needs
		============================================ -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home page 3</title>
        <meta name="description" content="">

		<!-- Mobile specific metas
		============================================ -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Font
		============================================ -->
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/client/img/favicon.ico">

		<!-- CSS  -->

		<!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="assets/client/css/bootstrap.min.css">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="assets/client/css/owl.carousel.css">

		<!-- owl.theme CSS
		============================================ -->
        <link rel="stylesheet" href="assets/client/css/owl.theme.css">


		<!-- owl.transitions CSS
		============================================ -->
        <link rel="stylesheet" href="assets/client/css/owl.transitions.css">

		<!-- font-awesome CSS
		============================================ -->
        <link rel="stylesheet" href="assets/client/css/font-awesome.min.css">

		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="assets/client/css/animate.css">

		<!-- slicknav CSS
		============================================ -->
        <link rel="stylesheet" href="assets/client/css/slicknav.css">

		<!-- rs-plugin CSS
		============================================ -->
		<link href="assets/client/lib/rs-plugin/css/settings.css" rel="stylesheet" />

		<!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="assets/client/css/normalize.css">

		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="assets/client/css/main.css">

		<!-- home-3-color CSS
		============================================ -->
        <link rel="stylesheet" href="assets/client/css/home-3-color.css">

		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="assets/client/css/style.css">

		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="assets/client/css/responsive.css">

		<!-- modernizr js
		============================================ -->
        <script src="assets/client/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body class="home-3">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

   <!-- header start -->
	<header>
	<!-- header-top-area start -->
	@include('client.layouts.headertop')
	<!-- header-top-area end -->
	<!-- mainmenu-area start -->
    @include('client.layouts.header')

	<!-- mainmenu-area end -->
	</header>
	<!-- header end -->

	<!-- HOME SLIDER -->
    @yield('slide')
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <form action="{{ route('register')}}" method="POST">
    @csrf
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h3 class="modal-title w-100 font-weight-bold"><b>REGISTER</b></h3>
        {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> --}}
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
        <label data-error="wrong" data-success="right" for="form34">Your name</label>
        <input type="text" id="form34" class="form-control validate" name="name">
        @if($errors->has('name'))
			<div class="alert alert-danger">
				{{ $errors->first('name') }}
			</div>
		@endif
        </div><br>
        <div class="md-form mb-5">
            <label data-error="wrong" data-success="right" for="form29">Your email</label>
          <input type="email" name="email" id="form29" class="form-control validate">
          @if($errors->has('email'))
            <div class="alert alert-danger">
                {{$errors->first('email')}}
            </div>
          @endif
        </div><br>

        <div class="md-form mb-5">
                <label data-error="wrong" data-success="right" for="form29">Your password</label>
              <input type="password" id="form29" name="password" class="form-control validate">
              @if($errors->has('password'))
              <div class="alert alert-danger">
                  {{$errors->first('password')}}
              </div>
            @endif
        </div><br>
        <div class="md-form mb-5">
                <label data-error="wrong" data-success="right" for="form29">Your repassword</label>
              <input type="password" id="form29" name="re_password" class="form-control validate">
              @if($errors->has('re_password'))
              <div class="alert alert-danger">
                  {{$errors->first('re_password')}}
              </div>
            @endif
        </div><br>
        <div class="md-form mb-5">
                <label data-error="wrong" data-success="right" for="form29">Your adress</label>
              <textarea class="form-control" name="address" id="" cols="5" rows="5"></textarea>
              @if($errors->has('address'))
                <div class="alert alert-danger">
                    {{$errors->first('address')}}
                </div>
              @endif
            </div><br>
      </div>

      <div class="modal-footer d-flex justify-content-center">
        <input type="submit" class="btn btn-success pull-left" value="Comfirm">
        <input type="button" class="btn btn-dafault" data-dismiss="modal" aria-label="Close" value="Cancel">
      </div>
    </div>
  </div>
</form>
</div>



	<!-- HOME SLIDER END -->
	<!-- promotion-area start -->
	@yield('content')
	<!-- corporate-about-area end -->

	<!-- footer start -->
	@include('client.layouts.footer')

    </body>

<!-- Tieu Long Lanh -->
</html>
