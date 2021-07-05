<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    //
    protected $table = 'products';

    protected $primaryKey = 'id';

    public function category(){
        return $this->belongsTo('App\Models\Backend\CategoryModel', 'category');
    }
}
