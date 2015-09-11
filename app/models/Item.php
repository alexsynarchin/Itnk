<?php

class Item extends \Eloquent {
	protected $fillable = ['name','number','carrying_amount','financing_source','os_view','okof','additional_field'];
	public function document(){
		return $this->belongsTo('Document');
	}
	public static $os_finance = array(
		'budget' => 'Бюджет',
		'out_budget' => 'Внебюджет'
	);
}