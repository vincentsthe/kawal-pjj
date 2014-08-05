<?php

class ApiController extends BaseController {
	
	public function getMeanScore() {
		$meanScore = Score::meanScore();
		return Response::json($meanScore);
	}
	
	public function getContestantScore($id) {
		$contestant = Contestant::find($id);
		$contestantScore = $contestant->getScore();
		return Response::json($contestantScore);
	}
	
	public function getMeanSubmission() {
		$meanSubmission = Submission::meanSubmission();
		return Response::json($meanSubmission);
	}
	
	public function getContestantSubmission($id) {
		$contestant = Contestant::find($id);
		$contestantSubmission = $contestant->getSubmission();
		return Response::json($contestantSubmission);
	}
	
	public function getContestantList() {
		$returnArray = array();
		$contestants = Contestant::all();
		foreach($contestants as $contestant) {
			$object = array();
			$object['id'] = $contestant->id;
			$object['username'] = $contestant->contestant_name;
			$object['fullname'] = $contestant->fullname;
			$object['score'] = $contestant->getLastScore();
			$object['submission'] = $contestant->getLastSubmission();
			
			$returnArray[] = $object;
		}
		
		return Response::json($returnArray);
	}
	
	public function getContestantData($id) {
		$contestant = Contestant::find($id);
		
		$object = array();
		$object['id'] = $contestant->id;
		$object['username'] = $contestant->contestant_name;
		$object['fullname'] = $contestant->fullname;
		$object['score'] = $contestant->getLastScore();
		$object['submission'] = $contestant->getLastSubmission();
		
		return $object;
	}
	
}