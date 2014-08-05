
pjjApp.controller('DetailController', ['$scope', '$http', '$routeParams', 'urlProvider', 'chartDrawer',
                                       function($scope, $http, $routeParams, urlProvider, chartDrawer) {
	$scope.loadSuccess = false;
	var contestantId = $routeParams.id;
	$http({method: "GET", url: urlProvider.getContestantData(contestantId)})
		.success(function(userData) {
			$scope.username = userData.username;
			$scope.fullname = userData.fullname;
			$http({method: "GET", url: urlProvider.getContestantScore(contestantId)})
				.success(function(scoreData) {
					chartDrawer.drawLineChart("score", scoreData, "Skor", "Hari");
					$http({method: "GET", url: urlProvider.getContestantSubmission(contestantId)})
						.success(function(submissionData) {
							chartDrawer.drawLineChart("submission", submissionData, "Submission", "Hari");
							$scope.loadSuccess = true;
						});
				});
		});
}]);