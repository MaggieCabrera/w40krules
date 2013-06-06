<?php

class Army extends Eloquent {
    protected $guarded = array();

    public static $armies = array();

    protected $table = 'armies';

    //relación 1-n donde 1 es rules y n es army
    public function rules()
    {
        return $this->hasMany('Rule');
    }

    //relación 1-n donde 1 es units y n es army
    public function units()
    {
        return $this->hasMany('Unit', 'army');
    }

}