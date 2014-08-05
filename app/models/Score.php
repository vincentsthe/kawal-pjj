<?php

class Score extends Eloquent {
	
	protected $table = 'score';
	public $timestamps = false;
	
	public static function batchUpdate($date, $scoreData) {
		foreach($scoreData as $contestant_id=>$score) {
			self::upsert($date, Contestant::getContestantIdByLxId($contestant_id), $score);
		}
	}
	
	private static function upsert($day, $contestant_id, $score) {
		$user = Score::day($day)->id($contestant_id)->get();
		if(count($user) == 0) {
			$record = new Score;
			$record->contestant_id = $contestant_id;
			$record->day = $day;
			$record->score = $score;
		} else {
			$record = $user[0];
			$record->score = $score;
		}
		$record->save();
	}
	
	public static function meanScore() {
		$allScore = Score::all();
		$return = array();
		foreach ($allScore as $score) {
			if(array_key_exists($score->day, $return)) {
				$return[$score->day] += $score->score;
			} else {
				$return[$score->day] = $score->score;
			}
		}
		
		$hasil = array();
		for($i=0 ; $i<count($return) ; $i++) {
			$return[$i] /= Contestant::getTotalContestant();
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