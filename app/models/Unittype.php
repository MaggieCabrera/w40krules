<?php

class Unittype extends Eloquent {
    protected $guarded = array();

    public static $rules = array();

    //relación 1-n donde 1 es units y n es unittype
    public function units()
    {
        return $this->hasMany('Unit');
    }
}