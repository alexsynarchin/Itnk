<?php

class Os_vmovable extends \Eloquent {
	protected $fillable = [];
	public function document(){
		return $this->belongsTo('Document');
	}
}