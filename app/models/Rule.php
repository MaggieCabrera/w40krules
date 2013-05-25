<?php

class Rule extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
    	'name' => 'required',
		'description' => 'required'
    );

    public static function validate($input){
    	$v = Validator::make($input, static::$rules);
    	return $v->fails()
	    	? $v
	    	: true;
    }
}