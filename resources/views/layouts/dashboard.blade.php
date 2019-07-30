<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="{{ asset('dashboard_assets/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('dashboard_assets/css/font-awesome.min.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{ asset('dashboard_assets/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('dashboard_assets/css/styles.css') }}" rel="stylesheet">
	<!--Custom Font-->
	<link href="{{ asset('dashboard_assets/css/font.css') }}" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Madaripur</span>Zillaporishad</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="@yield('dashboard-page')"><a href="{{ url('/home') }}"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="@yield('add-header-page')"><a href="{{ url('add/header') }}"><em class="fa fa-calendar">&nbsp;</em>Add Header</a></li>
			<li class="@yield('add-banner-page')"><a href="{{ url('add/banner') }}"><em class="fa fa-plus">&nbsp;</em>Add Banner</a></li>
			<li class="@yield('add-logo-page')"><a href="{{ url('add/logo') }}"><em class="fa fa-plus">&nbsp;</em>Add Logo</a></li>
			<li class="@yield('add-menu-page')"><a href="{{ url('add/menu') }}"><em class="fa fa-plus">&nbsp;</em>Add Menu</a></li>
			<li class="@yield('add-page-page')"><a href="{{ url('add/page') }}"><em class="fa fa-plus">&nbsp;</em>Page</a></li>
			<li class="@yield('add-marquee-page')"><a href="{{ url('add/marquee') }}"><em class="fa fa-plus">&nbsp;</em>Add Marquee</a></li>
			<li class="@yield('add-notice-page')"><a data-toggle="collapse" href="#sub-item-5">
				<em class="fa fa-navicon">&nbsp;</em> Notice <span data-toggle="collapse" href="#sub-item-5" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-5">
					<li class="@yield('add-notice-page')"><a href="{{ url('add/notice') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Notice
					</a></li>
					<li class="@yield('add-noticedetail-page')"><a href="{{ url('add/noticedetail') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Notice Detail
					</a></li>
				</ul>
			</li>
			<li class="@yield('add-service-page')"><a href="{{ url('add/service') }}"><em class="fa fa-plus">&nbsp;</em>Add Service</a></li>
			<li class="@yield('add-news-page')"><a href="{{ url('add/news') }}"><em class="fa fa-plus">&nbsp;</em>Add News</a></li>
			<li class="@yield('add-video-page')"><a href="{{ url('add/video') }}"><em class="fa fa-plus">&nbsp;</em>Add Video</a></li>
			<li class="@yield('add-chief-page')"><a href="{{ url('add/chief') }}"><em class="fa fa-plus">&nbsp;</em>Add Chief</a></li>
			<li class="@yield('add-form-page')"><a href="{{ url('add/form') }}"><em class="fa fa-plus">&nbsp;</em>Add Form</a></li>
			<li class="@yield('add-eseba-page')"><a href="{{ url('add/eseba') }}"><em class="fa fa-plus">&nbsp;</em>Add Eseba</a></li>
			<li class="@yield('add-ilink-page')"><a href="{{ url('add/ilink') }}"><em class="fa fa-plus">&nbsp;</em>Add Ilink</a></li>
			<li class="@yield('add-about-page')"><a href="{{ url('add/about') }}"><em class="fa fa-plus">&nbsp;</em>Add About</a></li>

			<li class="@yield('add-committee-page')"><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Committee <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li class="@yield('add-committee-page')"><a href="{{ url('add/committee') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Committee
					</a></li>
					<li class="@yield('add-clink-page')"><a href="{{ url('add/clink') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Committee Link
					</a></li>
				</ul>
			</li>

			<li class="@yield('add-budget-page')"><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-navicon">&nbsp;</em> Budget <span data-toggle="collapse" href="#sub-item-2" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li class="@yield('add-budget-page')"><a href="{{ url('add/budget') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Budget
					</a></li>
					<li class="@yield('add-budgetlink-page')"><a href="{{ url('add/budgetlink') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Budget Link
					</a></li>
				</ul>
			</li>


			<li class="@yield('add-project-page')"><a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-navicon">&nbsp;</em> Project <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li class="@yield('add-project-page')"><a href="{{ url('add/project') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Project
					</a></li>
					<li class="@yield('add-plink-page')"><a href="{{ url('add/plink') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Project Link
					</a></li>
				</ul>
			</li>


			<li class="@yield('add-footerone-page')"><a data-toggle="collapse" href="#sub-item-4">
				<em class="fa fa-navicon">&nbsp;</em> Footer <span data-toggle="collapse" href="#sub-item-4" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-4">
					<li class="@yield('add-footerone-page')"><a href="{{ url('add/footerone') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Footerone
					</a></li>
					<li class="@yield('add-footersocial-page')"><a href="{{ url('add/footersocial') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Footersocial
					</a></li>
					<li class="@yield('add-footerbottom-page')"><a href="{{ url('add/footerbottom') }}">
						<span class="fa fa-arrow-right">&nbsp;</span> Add Footerbottom
					</a></li>

				</ul>
			</li>
      	<li><a href="{{ url('/') }}" target="_blank"><em class="fa fa-calendar">&nbsp;</em>Visit Website</a></li>
			<li><a href="{{ route('logout') }}"
         onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           @csrf
                       </form>
		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	@yield('content')
	</div>	<!--/.main-->

	<script src="{{ asset('dashboard_assets/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/chart.min.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/chart-data.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/easypiechart.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/easypiechart-data.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('dashboard_assets/js/custom.js') }}"></script>
	<script>
	window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.2)",
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleFontColor: "#c5c7cc"
		});
	};
	</script>

</body>
</html>
