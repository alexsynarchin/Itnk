<?php
class Document extends Eloquent {
    protected $fillable = ['document_date', 'actual_date', 'os_type'];
    public function items(){
        return $this->hasMany('Item','document_id');
    }
    public function user(){
        return $this->belongsTo('User');
    }
    public static $os_types = array(
        'movables' => 'Движимое имущество',
        'value_movables' => 'Особо ценное движимое имущество',
        'buildings' => 'Здания и сооружения',
        'parcels' => 'Земельные участки',
        'car'   =>  'Автомобили'
    );
}