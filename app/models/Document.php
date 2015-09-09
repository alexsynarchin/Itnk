<?php
class Document extends Eloquent {
    protected $fillable = ['document_date', 'actual_date', 'os_type'];
    public static $os_types = array(
        'movables' => 'Движимое имущество',
        'value_movables' => 'Особо ценное движимое имущество',
        'buildings' => 'Здания и сооружения',
        'parcels' => 'Земельные участки'
    );

}