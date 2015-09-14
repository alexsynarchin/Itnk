<?php

class Address extends \Eloquent {
	protected $fillable = [];
	protected $table = 'addresses';
	public $timestamps = false;
	public function item(){
		return $this->belongsTo('Item');
	}
}