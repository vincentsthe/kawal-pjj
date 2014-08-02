<?php

class Contestant extends Eloquent {
	
	protected $table = "contestant";
	public $timestamps = false;
	protected $fillable = array('contestant_name', 'fullname', 'lx_id');
	
	
}