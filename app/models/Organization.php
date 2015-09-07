<?php
class Organization extends Eloquent {
    public function user()
    {
        return $this->hasOne('User');
    }

}