<!DOCTYPE HTML>

<html>
	<head>
		<title>Kawal PJJ</title>
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::style('css/main.css'); }}
		{{ HTML::style('css/layout.css'); }}
		{{ HTML::style('css/font-awesome.min.css') }}
	</head>
	<body>
		<div class="main-container">
			<header>
				<div class="container">
					<div class="col-md-12">
						<div class="clearfix">
							<div class="pull-left">
								<img class="logo" src='{{ asset('images/logo.png') }}' alt="Logo Tokilearning"/>
							</div>
							<div class="title pull-left">
								<h1>TOKI Learning Center<br /><small>Sealtiel System</small></h1>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="clearfix"></div>
			<div class="content">
				<div class="container">
					<div class="inner-container clearfix">
				        <div class="col-md-3 sidebar">
				            <nav class="menu menu-user">
				                <ul class="list-group">
				                    <li id="user-announcement" class='list-group-item'>
				                        <a href={{ url("contestant/index"); }} class="main-link"><i class="fa fa-list"></i> Daftar<div class="arrow"></a>
				                    </li>
				                    <li id="user-contest" class='list-group-item'>
				                        <a href={{ url("contestant/create"); }} class="main-link"><i class="fa fa-plus"></i> Tambah<div class="arrow"></div></a>
				                    </li>
				                </ul>
				            </nav>
				        </div>
				        <div class="col-md-9 main-content clearfix">
				            @yield('content')
				        </div>
				    </div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<footer>
			<div class="container">
				<div class="pull-left first">
					<div class="col-md-12">
						<div class="copyright">
							&#169; 2014 TOKI Learning Center Sealtiel System
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>