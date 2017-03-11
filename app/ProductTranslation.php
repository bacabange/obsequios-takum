<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductTranslation extends Model
{
    protected $table = 'products_translations';
    protected $guarded = ['id'];
    protected $fillable = [
    	'title', 'description'
    ];
    public $timestamps = false;
}
