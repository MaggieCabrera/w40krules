<?php

class Character extends Eloquent {
    protected $guarded = array();

    public static $characters = array();

    protected $table = 'characters';

    //relación 1-1 donde 1 es type y n es character
    public function character_type()
    {
        return $this->belongsTo('Character_type');
    }

    //Relación n-m weapons-character
    public function weapons()
    {
        return $this->belongsToMany('Weapon');
    }

    //Relación n-m unit-character
    public function units()
    {
        return $this->belongsToMany('Unit');
    }

    //Relación n-m rules-character
    public function rules()
    {
        return $this->belongsToMany('Rule');
    }
}