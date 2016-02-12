<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model {

    protected $table = 'item';
    
    public function date()
    {
        return $this->hasMany('App\WebMax\ItemDate');
    }

}
