<?php

class Item extends \Eloquent {
	protected $fillable = ['name','number','carrying_amount','financing_source','os_view','okof','additional_field'];
	public function document(){
		return $this->belongsTo('Document');
	}
	public function building(){
		return $this->hasOne('Building');
	}
	public function parcel(){
		return $this->hasOne('Parcel');
	}
	public  function address(){
		return $this->hasOne('Address');
	}
	public static $os_finance = array(
		'budget' => 'Бюджет',
		'out_budget' => 'Внебюджет'
	);
}