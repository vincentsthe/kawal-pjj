require.config({
	paths: {
		'jquery': 'libs/jquery.min',
		'angular': 'libs/angular.min',
		'angularRoute': 'libs/angular-route.min',
		'app': 'app',
		'controllers': 'controller/index',
		'controllerModule': 'controller/module',
		'HomeController': 'controller/HomeController',
		'route': 'route/route',
	},
	shim: {
		'angular': {
			exports: 'angular',
		},
		'jquery': {
			exports: '$',
		},
		'angular-route': ['angular'],
	},
});

require(['angular', 'app', 'route', 'angularRoute'], function(angular) {
	angular.bootstrap(document, ['app']);
});