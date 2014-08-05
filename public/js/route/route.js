
pjjApp.config(['$routeProvider', function($routeProvider) {
	$routeProvider.when('/', {
		templateUrl: 'partials/home.html',
		controller: 'HomeController',
	});
	
	$routeProvider.when('/contestant/list', {
		templateUrl: 'partials/listContestant.html',
		controller: 'ListContestantController',
	});
	
	$routeProvider.when('/contestant/view/:id', {
		templateUrl: 'partials/detail.html',
		controller: 'DetailController',
	});
	
	$routeProvider.otherwise({
		redirectTo: '/contestant/list',
	});
}]);