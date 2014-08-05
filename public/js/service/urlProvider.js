pjjApp.factory('urlProvider', function() {
	var baseUrl = 'http://localhost:8000';
	
	var factory = {
		getMeanScore: function() {
			return baseUrl + '/api/score/mean';
		},
		getMeanSubmission: function() {
			return baseUrl + '/api/submission/mean';
		},
		getContestantList: function() {
			return baseUrl + '/api/contestant/list';
		},
		getContestantData: function(id) {
			return baseUrl + '/api/contestant/data/' + id;
		},
		getContestantScore: function(id) {
			return baseUrl + '/api/score/contestant/' + id;
		},
		getContestantSubmission: function(id) {
			return baseUrl + '/api/submission/contestant/' + id;
		},
	};
	
	return factory;
});