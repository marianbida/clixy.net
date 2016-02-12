<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

    protected $table = 'category';
    
    public function lang()
    {
        return $this->hasMany('App\CategoryLang', 'id');
    }

}
