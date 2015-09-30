<?php

class Okof extends \Eloquent {
	protected $fillable = [];
	protected $table='class_okof';
	public function parent() {

		return $this->hasOne('Okof', 'id', 'parent_id');

	}
	public function children(){
		return $this->hasMany('Okof', 'parent_id', 'id');
	}
	public static function tree() {

		return static::with(implode('.', array_fill(0, 100, 'children')))->where('parent_id', '=', NULL)->get();

	}
}