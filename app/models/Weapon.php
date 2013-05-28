<?php

class Weapon extends Eloquent {
    protected $guarded = array();

    public static $weapons = array();

    protected $table = 'weapons';

    //Relación n-m weapons-character
    public function characters()
    {
        return $this->belongsToMany('Character');
    }
}