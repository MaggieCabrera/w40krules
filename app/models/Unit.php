<?php

class Unit extends Eloquent {
    protected $guarded = array();

    public static $units = array();

    protected $table = 'units';

    //relación 1-n donde 1 es units y n es army
    public function armies()
    {
        return $this->belongsTo('Army');
    }

    //relación 1-n donde 1 es units y n es unittype
    public function unittypes()
    {
        return $this->belongsTo('Unittype');
    }

    //Relación n-m unit-character
    public function characters()
    {
        return $this->belongsToMany('Character');
    }
}