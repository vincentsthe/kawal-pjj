<!DOCTYPE HTML>

<html ng-app="pjjApp">
	<head>
		<title>Kawal PJJ</title>
		{{ HTML::style('css/bootstrap.min.css'); }}
		{{ HTML::style('css/main.css'); }}
		{{ HTML::style('css/layout.css'); }}
		{{ HTML::style('css/font-awesome.min.css') }}
		{{ HTML::style('css/app.css') }}
	</head>
	<body>
		<div class="main-container">
			<header>
				<div class="container">
					<div class="col-md-12">
						<div class="clearfix">
							<div class="pull-left">
								<img class="logo" src={{ asset('images/logo.png') }} alt="Logo Tokilearning"/>
							</div>
							<div class="title pull-left">
								<h1>Kawal PJJ</h1>
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
				                        <a href="#/" class="main-link"><i class="fa fa-dashboard"></i> Overview<div class="arrow"></a>
				                    </li>
				                    <li id="user-contest" class='list-group-item'>
				                        <a href="#/contestant/list" class="main-link"><i class="fa fa-group"></i> Kontestan<div class="arrow"></div></a>
				                    </li>
				                </ul>
				            </nav>
				        </div>
				        <div class="col-md-9 main-content clearfix">
				            <div ng-view class=""></div>
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
							&#169; 2014 Made By vincentsthe
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		{{ HTML::script('js/libs/jquery.min.js') }}
		{{ HTML::script('js/libs/d3.min.js') }}
		{{ HTML::script('js/libs/angular.min.js') }}
		{{ HTML::script('js/libs/angular-route.min.js') }}
		{{ HTML::script('js/libs/angular-animate.min.js') }}
		{{ HTML::script('js/app.js') }}
		{{ HTML::script('js/service/urlProvider.js') }}
		{{ HTML::script('js/service/chartDrawer.js') }}
		{{ HTML::script('js/controller/HomeController.js') }}
		{{ HTML::script('js/controller/ListContestantController.js') }}
		{{ HTML::script('js/controller/DetailController.js') }}
		{{ HTML::script('js/route/route.js') }}
	</body>
</html>