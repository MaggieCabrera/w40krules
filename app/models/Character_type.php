<?php

class Character_type extends Eloquent {
    protected $guarded = array();

    public static $type = array();

    protected $table = 'types';

    //relación 1-n donde 1 es character y n es type
    public function character()
    {
        return $this->hasMany('Character');
    }
}