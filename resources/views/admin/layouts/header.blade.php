<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Synadmin - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->

	{{-- <link href="{{asset('assets/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/perfect-scrollbar.css')}}" rel="stylesheet" /> --}}
	<link href="{{asset('assets/css/metisMenu.min.css')}}" rel="stylesheet" />
	{{-- <link href="{{asset('assets/css/apexcharts.css')}}" rel="stylesheet" />>
    <link href="{{asset('assets/plugins/morris/morris.css"')}}"" rel="stylesheet" /> --}}
	<!-- loader-->
	{{-- <link href="{{asset('assets/css/pace.min.css')}}" rel="stylesheet" />
	<script src="{{asset('assets/css/pace.min.css')}}"></script> --}}

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <!-- Fontawesome CSS -->
	<!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}" />
    <!-- Themify Icons CSS -->
	<!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" />


    <link rel="stylesheet" href="{{ asset('assets/css/dark-style.css') }}" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--header-->
		<header class="top-header">
			<nav class="navbar navbar-expand">
				<div class="left-topbar d-flex align-items-center">
					<a href="javaScript:;" class="toggle-btn">	<i class="bx bx-menu"></i>
					</a>
					<div class="logo-white">
						<img src="assets/images/logo-white.png" class="logo-icon" alt="">
					</div>
					<div class="logo-dark">
						<img src="assets/images/logo-dark.png" class="logo-icon" alt="">
					</div>
				</div>
				<div class="flex-grow-1 search-bar">
					<div class="input-group">
						<div class="input-group-prepend search-arrow-back">
							<button class="btn btn-search-back" type="button"><i class="bx bx-arrow-back"></i>
							</button>
						</div>
						<input type="text" class="form-control" placeholder="search" />
						<div class="input-group-append">
							<button class="btn btn-search" type="button"><i class="lni lni-search-alt"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="right-topbar ml-auto">
					<ul class="navbar-nav">
						<li class="nav-item search-btn-mobile">
							<a class="nav-link position-relative" href="javaScript:;">	<i class="bx bx-search vertical-align-middle"></i>
							</a>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javaScript:;" data-toggle="dropdown">	<span class="msg-count">6</span>
								<i class="bx bx-comment-detail vertical-align-middle"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="javaScript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">6 New</h6>
										<p class="msg-header-subtitle">Application Messages</p>
									</div>
								</a>
								<div class="header-message-list">
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Daisy Anderson <span class="msg-time float-right">5 sec
													ago</span></h6>
												<p class="msg-info">The standard chunk of lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Althea Cabardo <span class="msg-time float-right">14
													sec ago</span></h6>
												<p class="msg-info">Many desktop publishing packages</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<a class="btn btn-danger" href="{{route('admin.logout')}}">Logout</a>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Oscar Garner <span class="msg-time float-right">8 min
													ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Katherine Pechon <span class="msg-time float-right">15
													min ago</span></h6>
												<p class="msg-info">Making this the first true generator</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Amelia Doe <span class="msg-time float-right">22 min
													ago</span></h6>
												<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Cristina Jhons <span class="msg-time float-right">2 hrs
													ago</span></h6>
												<p class="msg-info">The passage is attributed to an unknown</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">James Caviness <span class="msg-time float-right">4 hrs
													ago</span></h6>
												<p class="msg-info">The point of using Lorem</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Peter Costanzo <span class="msg-time float-right">6 hrs
													ago</span></h6>
												<p class="msg-info">It was popularised in the 1960s</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">David Buckley <span class="msg-time float-right">2 hrs
													ago</span></h6>
												<p class="msg-info">Various versions have evolved over</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-10.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-right">2 days
													ago</span></h6>
												<p class="msg-info">If you are going to use a passage</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="user-online">
												<img src="assets/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
											</div>
											<div class="media-body">
												<h6 class="msg-name">Johnny Seitz <span class="msg-time float-right">5 days
													ago</span></h6>
												<p class="msg-info">All the Lorem Ipsum generators</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javaScript:;">
									<div class="text-center msg-footer">View All Messages</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-lg">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="javaScript:;" data-toggle="dropdown">	<i class="bx bx-bell vertical-align-middle"></i>
								<span class="msg-count">8</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="javaScript:;">
									<div class="msg-header">
										<h6 class="msg-header-title">8 New</h6>
										<p class="msg-header-subtitle">Application Notifications</p>
									</div>
								</a>
								<div class="header-notifications-list">
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Customers<span class="msg-time float-right">14 Sec
													ago</span></h6>
												<p class="msg-info">5 new user registered</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Orders <span class="msg-time float-right">2 min
													ago</span></h6>
												<p class="msg-info">You have recived new orders</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-shineblue text-shineblue"><i class="bx bx-file"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">24 PDF File<span class="msg-time float-right">19 min
													ago</span></h6>
												<p class="msg-info">The pdf files generated</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-cyne text-cyne"><i class="bx bx-send"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Time Response <span class="msg-time float-right">28 min
													ago</span></h6>
												<p class="msg-info">5.1 min avarage time response</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-purple text-purple"><i class="bx bx-home-circle"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Product Approved <span
													class="msg-time float-right">2 hrs ago</span></h6>
												<p class="msg-info">Your new product has approved</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-warning text-warning"><i class="bx bx-message-detail"></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New Comments <span class="msg-time float-right">4 hrs
													ago</span></h6>
												<p class="msg-info">New customer comments recived</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Your item is shipped <span class="msg-time float-right">5 hrs
													ago</span></h6>
												<p class="msg-info">Successfully shipped your item</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-sinata text-sinata"><i class='bx bx-user-pin'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">New 24 authors<span class="msg-time float-right">1 day
													ago</span></h6>
												<p class="msg-info">24 new authors joined last week</p>
											</div>
										</div>
									</a>
									<a class="dropdown-item" href="javaScript:;">
										<div class="media align-items-center">
											<div class="notify bg-light-mehandi text-mehandi"><i class='bx bx-door-open'></i>
											</div>
											<div class="media-body">
												<h6 class="msg-name">Defense Alerts <span class="msg-time float-right">2 weeks
													ago</span></h6>
												<p class="msg-info">45% less alerts last 4 weeks</p>
											</div>
										</div>
									</a>
								</div>
								<a href="javaScript:;">
									<div class="text-center msg-footer">View All Notifications</div>
								</a>
							</div>
						</li>
						<li class="nav-item dropdown dropdown-user-profile"  >

                            <form action="{{ route('admin.logout') }}" method="POST"  style="display: inline;">
                                @csrf
                                <button class="btn btn-danger" type="submit">Logout</button>
                            </form>
							{{-- <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javaScript:;" data-toggle="dropdown">
								<div class="media user-box align-items-center">
									<div class="media-body user-info">
										<a class="btn btn-danger" href="{{route('admin.logout')}}">Logout</a>
									</div>

								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javaScript:;"><i
										class="bx bx-user"></i><span>Profile</span></a>
								<a class="dropdown-item" href="javaScript:;"><i
										class="bx bx-cog"></i><span>Settings</span></a>
								<a class="dropdown-item" href="javaScript:;"><i
										class="bx bx-tachometer"></i><span>Dashboard</span></a>
								<a class="dropdown-item" href="javaScript:;"><i
										class="bx bx-wallet"></i><span>Earnings</span></a>
								<a class="dropdown-item" href="javaScript:;"><i
										class="bx bx-cloud-download"></i><span>Downloads</span></a>
								<div class="dropdown-divider mb-0"></div>	<a class="dropdown-item" href="javaScript:;"><i
										class="bx bx-power-off"></i><span>Logout</span></a>
							</div> --}}
						</li>
						<li class="nav-item dropdown dropdown-language">
							<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javaScript:;" data-toggle="dropdown">
								<div class="lang d-flex">
									<div><i class="flag-icon flag-icon-um"></i>
									</div>
									<div><span>En</span>
									</div>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-right">	<a class="dropdown-item" href="javaScript:;"><i
										class="flag-icon flag-icon-de"></i><span>German</span></a>
								<a class="dropdown-item" href="javaScript:;"><i
										class="flag-icon flag-icon-fr"></i><span>French</span></a>
								<a class="dropdown-item" href="javaScript:;"><i
										class="flag-icon flag-icon-um"></i><span>English</span></a>
								<a class="dropdown-item" href="javaScript:;"><i
										class="flag-icon flag-icon-in"></i><span>Hindi</span></a>
								<a class="dropdown-item" href="javaScript:;"><i
										class="flag-icon flag-icon-cn"></i><span>Chinese</span></a>
								<a class="dropdown-item" href="javaScript:;"><i
										class="flag-icon flag-icon-ae"></i><span>Arabic</span></a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</header>

	<!-- end wrapper -->

