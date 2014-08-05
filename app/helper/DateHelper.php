<?php

class DateHelper {
	
	public static function formattedDateToTimestamp($formattedDate, $format = "%d-%m-%Y %H:%M") {
		$time = strptime($formattedDate, $format);
		return mktime($time['tm_hour'], $time['tm_min'], 0, $time['tm_mon']+1, $time['tm_mday'], $time['tm_year'] + 1900);
	}
	
	public static function timestampToFormattedDate($timestamp, $format = "d-m-Y G:i") {
		return date($format, $timestamp);
	}
	
	public static function getTodayDate() {
		$date = self::timestampToFormattedDate(time() + (7 * 60 * 60));		
		$time = strptime($date, "%d-%m-%Y %H:%M");
		$todayBeginningTimestamp = mktime(0, 0, 0, $time['tm_mon']+1, $time['tm_mday'], $time['tm_year'] + 1900);
		$selisih = $todayBeginningTimestamp - 1407196800;
		$today = intval(floor($selisih / 86400));
		return $today+1;
	}
	
}