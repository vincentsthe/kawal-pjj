pjjApp.controller('HomeController', ['$scope', '$http', 'urlProvider', 'chartDrawer',
                                     function ($scope, $http, urlProvider, chartDrawer) {
	$scope.loadSuccess = false;
	$http({method: 'GET', url: urlProvider.getMeanScore()}).
		success(function(data) {
			chartDrawer.drawLineChart("score", data, "Skor", "Hari");
			$http({method: 'GET', url: urlProvider.getMeanSubmission()}).
				success(function(data) {
					chartDrawer.drawLineChart("submission", data, "Submission", "Hari");
					$scope.loadSuccess = true;
				});
		});
}]);