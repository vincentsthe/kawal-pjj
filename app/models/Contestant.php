<?php

class Contestant extends Eloquent {
	
	protected $table = "contestant";
	public $timestamps = false;
	protected $fillable = array('contestant_name', 'fullname', 'lx_id');
	
	public static function getTotalContestant() {
		$users = Contestant::all();
		return count($users);
	}
	
	public static function getContestantIdByLxId($lx_id) {
		$contestant = Contestant::id($lx_id)->get();
		return $contestant[0]->id;
	}
	
	public function getScore() {
		$scores = Score::id($this->id)->get();
		
		$return = array();
		foreach($scores as $score) {
			$return[$score->day] = $score->score;
		}
		
		$hasil = array();
		for($i=0 ; $i<count($return) ; $i++) {
			$hasil[] = $return[$i];
		}
		
		return $hasil;
	}
	
	public function getSubmission() {
		$submissions = Submission::id($this->id)->get();
		
		$return = array();
		foreach($submissions as $submission) {
			$return[$submission->day] = $submission->count;
		}
		
		for($i=count($return)-1 ; $i>0 ; $i--) {
			$return[$i] -= $return[$i-1];
		}
		
		$hasil = array();
		for($i=0 ; $i<count($return) ; $i++) {
			$hasil[] = $return[$i];
		}
		
		return $hasil;
	}
	
	public function getLastScore() {
		$scores = Score::id($this->id)->get();
		
		$maxDay = -1;
		$lastScore = 0;
		foreach($scores as $score) {
			if($score->day > $maxDay) {
				$maxDay = $score->day;
				$lastScore = $score->score;
			}
		}
		
		return $lastScore;
	}
	
	public function getLastSubmission() {
		$submissions = Submission::id($this->id)->get();
		
		$maxDay = -1;
		$lastSubmission = 0;
		foreach($submissions as $submission) {
			if($submission->day > $maxDay) {
				$maxDay = $submission->day;
				$lastSubmission = $submission->count;
			}
		}
		
		return $lastSubmission;
	}
	
	public function scopeId($query, $id) {
		return $query->where('lx_id', '=', $id);
	}
	
}