<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Synadmin - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="{{asset('assets/images/favicon-32x32.png')}}" type="image/png" />
	<!-- loader-->
	<link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/icons.css')}}" />
	<!-- App CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/dark-style.css')}}" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<nav class="navbar navbar-expand-lg navbar-light bg-body fixed-top border-bottom">
			<a class="navbar-brand" href="javaScript:;">
				<img src="assets/images/logo-img.png" width="160" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">	<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">	<a class="nav-link" href="javaScript:;">Home</a>
					</li>
					<li class="nav-item">	<a class="nav-link" href="javaScript:;">About</a>
					</li>
					<li class="nav-item">	<a class="nav-link" href="javaScript:;">Portfolio</a>
					</li>
					<li class="nav-item">	<a class="nav-link" href="javaScript:;">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="error-404 d-flex align-items-center justify-content-center">
			<div class="container">
				<div class="card shadow-none bg-transparent">
					<div class="row no-gutters">
						<div class="col-lg-6">
							<div class="card-body">
								<h1 class="display-1">404</h1>
								<h2 class="font-weight-bold display-4">404 Not Found</h2>
								<p>You have reached the edge of the universe.
									<br>The page you requested could not be found.
									<br>Dont'worry and return to the previous page.</p>
								<div class="mt-5">	<a href="{{route('admin.dashboard')}}" class="btn btn-lg btn-primary px-md-5 radius-30">Go Home</a>
									<a href="javaScript:;" class="btn btn-lg btn-outline-dark ml-3 px-md-5 radius-30">Back</a>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<img src="assets/images/errors-images/spaceman_illustration-2.png" class="card-img" alt="">
						</div>
					</div>
					<!--end row-->
				</div>
			</div>
		</div>
		<div class="bg-body p-4 fixed-bottom border-top">
			<div class="d-flex align-items-center justify-content-between flex-wrap">
				<ul class="list-inline mb-0">
					<li class="list-inline-item">Follow Us :</li>
					<li class="list-inline-item"><a href="javaScript:;"><i class='bx bxl-facebook mr-1'></i>Facebook</a>
					</li>
					<li class="list-inline-item"><a href="javaScript:;"><i class='bx bxl-twitter mr-1'></i>Twitter</a>
					</li>
					<li class="list-inline-item"><a href="javaScript:;"><i class='bx bxl-google mr-1'></i>Google</a>
					</li>
				</ul>
				<p class="mb-0">Synadmin @2020 | Developed By : <a href="https://themeforest.net/user/codervent" target="_blank">Codervent</a>
				</p>
			</div>
		</div>
	</div>
	<!-- end wrapper -->

	<!--start switcher-->
	   <div class="switcher-wrapper">
	       <div class="switcher-btn">
		       <i class='bx bx-cog bx-spin'></i>
		   </div>
		   <div class="switcher-body">
		      <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			  <hr/>
			  <h6 class="mb-0">Theme Styles</h6>
			  <hr/>
			  <div class="custom-control custom-radio">
				  <input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
				  <label class="custom-control-label" for="darkmode">Dark Mode</label>
			  </div>
			  <hr/>
			  <div class="custom-control custom-radio">
			    <input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
			    <label class="custom-control-label" for="lightmode">Light Mode</label>
			  </div>
		   </div>
	   </div>
	 <!--end switcher-->

	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script>
	  /*switcher*/

		$(".switcher-btn").on("click", function () {
			$(".switcher-wrapper").toggleClass("switcher-toggled");
		});

		$("#darkmode").on("click", function () {
			$("html").addClass("dark-theme");
		});

		$("#lightmode").on("click", function () {
			$("html").removeClass("dark-theme");
		});
	</script>
</body>

</html>
