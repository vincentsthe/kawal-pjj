<?php

class Submission extends Eloquent {
	
	protected $table = "submission";
	public $timestamps = false;
	
	public static function batchUpdate($date, $scoreData) {
		foreach($scoreData as $contestant_id=>$score) {
			self::upsert($date, Contestant::getContestantIdByLxId($contestant_id), $score);
		}
	}
	
	private static function upsert($day, $contestant_id, $submission) {
		$user = Submission::day($day)->id($contestant_id)->get();
		if(count($user) == 0) {
			$record = new Submission;
			$record->contestant_id = $contestant_id;
			$record->day = $day;
			$record->count = $submission;
		} else {
			$record = $user[0];
			$record->count = $submission;
		}
		$record->save();
	}
	
	public static function meanSubmission() {
		$allSubmission = Submission::all();
		$return = array();
		foreach ($allSubmission as $submission) {
			if(array_key_exists($submission->day, $return)) {
				$return[$submission->day] += $submission->count;
			} else {
				$return[$submission->day] = $submission->count;
			}
		}
	
		for($i=0 ; $i<count($return) ; $i++) {
			$return[$i] /= Contestant::getTotalContestant();
		}
		
		$hasil = array();
		for($i=1 ; $i<count($return) ; $i++) {
			$return[$i] -= $return[$i-1];
		}
		for($i=0 ; $i<count($return) ; $i++) {
			$hasil[] = $return[$i];
		}
	
		return $hasil;
	}
	
	public function scopeDay($query, $day) {
		return $query->where('day', '=', $day);
	}
	
	public function scopeId($query, $id) {
		return $query->where('contestant_id', '=', $id);
	}
	
}