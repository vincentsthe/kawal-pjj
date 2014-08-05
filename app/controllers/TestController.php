<?php

use Illuminate\Http\Request;
class TestController extends BaseController {
	
	public function testFunction() {
		$json = file_get_contents('http://167.205.32.27/lx/contest/80/api/getScore');
		var_dump($json);
		exit;
		return View::make('test', array('contestants' => $contestants));
	}
	
}