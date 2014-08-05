<?php

class DataService {
	
	private static $contestId = array(336, 337, 338, 339, 340, 341);
	
	public static function getTotalScore() {
		$users = Contestant::all();
		$totalScore = array();
		foreach($users as $user) {
			$totalScore[$user->lx_id] = 0;
		}
		
		foreach(self::$contestId as $cId) {
			$contestScore = self::getContestScore($cId);
			foreach ($contestScore as $lx_id=>$score) {
				if(array_key_exists($lx_id, $totalScore)) {
					$totalScore[$lx_id] += $score;
				}
			}
		}
		
		return $totalScore;
	}
	
	public static function getTotalSubmission() {
		$users = Contestant::all();
		$totalSubmission = array();
		foreach($users as $user) {
			$totalSubmission[$user->lx_id] = 0;
		}
		
		foreach (self::$contestId as $cId) {
			$contestSubmission = self::getContestSubmission($cId);
			foreach($contestSubmission as $lx_id=>$count) {
				if(array_key_exists($lx_id, $totalSubmission)) {
					$totalSubmission[$lx_id] += $count;
				}
			}
		}
		
		return $totalSubmission;
	}
	
	private static function getContestScore($contestId) {
		$return = array();
		
		$json = file_get_contents('http://tokilearning.org/contest/' . $contestId . '/api/getScore');
		$result = json_decode($json);
		
		foreach($result as $record) {
			$return[$record->id] = $record->total;
		}
		
		return $return;
	}
	
	private static function getContestSubmission($contestId) {
		$return = array();
		
		$json = file_get_contents('http://tokilearning.org/contest/' . $contestId . '/api/getSubmissionCount');
		return json_decode($json);
	}
	
}