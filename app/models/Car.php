<?php

class Car extends \Eloquent {
	protected $fillable = [];
	public $timestamps = false;
	public function item(){
		return $this->belongsTo('Item');
	}
	public static $car_type = array(
			'car' => 'Легковой',
			'truck' => 'Грузовой'
	);
}