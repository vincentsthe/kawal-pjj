<?php

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
class ContestantController extends BaseController {
	
	public function listContestant() {
		$contestants = Contestant::orderBy('lx_id', 'ASC')->get();
		return View::make('contestant.list', array('contestants' => $contestants));
	}
	
	public function createContestant() {
		$contestant = new Contestant;
		
		return View::make('contestant.create', array('contestant' => $contestant));
	}
	
	public function doCreateContestant() {
		$validator = Validator::make(
			array(
				'username' => Input::get('contestant_name'),
				'fullname' => Input::get('fullname'),
				'lx-id' => Input::get('lx_id'),
			),
			array(
				'username' => 'required',
				'fullname' => 'required',
				'lx-id' => 'required|integer',
			)
		);
		
		if($validator->fails()) {
			return Redirect::to('/contestant/create')->withErrors($validator)->withInput();
		}
		
		Contestant::create(Input::all());
		Session::flash('success', "Kontestan berhasil dibuat.");
		return Redirect::to('/contestant/index');
	}
	
	public function deleteContestant($id) {
		$contestant = Contestant::find($id);
		$contestant->delete();
		Session::flash('success', "Kontestan berhasil dihapus");
		return Redirect::to('/contestant/index');
	}
	
}