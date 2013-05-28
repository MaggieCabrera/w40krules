<?php

class Rule extends Eloquent {
    protected $guarded = array();

    protected $table = 'rules';

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

    //relación 1-n donde 1 es rules y n es army
    public function army()
    {
        return $this->belongsTo('Army');
    }

    //Relación n-m rules-character
    public function characters()
    {
        return $this->belongsToMany('Character');
    }

  /*  public function rules(){
    	return $this->has_many('Rule')->order_by('name', 'asc');
    }*/
}