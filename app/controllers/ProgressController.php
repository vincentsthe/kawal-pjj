<?php

use Illuminate\Support\Facades\Redirect;
class ProgressController extends BaseController {
	
	public function update() {
		$today = DateHelper::getTodayDate();
		$todayScore = DataService::getTotalScore();
		$todaySubmission = DataService::getTotalSubmission();
		Score::batchUpdate($today, $todayScore);
		Submission::batchUpdate($today, $todaySubmission);
		return Redirect::to('/');
	}
	
}