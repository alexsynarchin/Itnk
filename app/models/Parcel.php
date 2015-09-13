<?php

class Parcel extends \Eloquent {
	protected $fillable = [];
	public $timestamps = false;
	public function item(){
		return $this->belongsTo('Item');
	}
}