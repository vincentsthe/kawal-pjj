<?php

class TestController extends BaseController {
	
	public function testFunction() {
		$contestants = Contestant::all();
		
		return View::make('test', array('contestants' => $contestants));
	}
	
}