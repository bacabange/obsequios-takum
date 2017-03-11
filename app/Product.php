<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Dimsav\Translatable\Translatable;

class Product extends Model
{
	use Translatable;

	public $translatedAttributes = [
		'title', 'description'
	];
	public $translationModel = 'App\ProductTranslation';
    protected $fillable = [
        'title', 'description', 'value', 'category_id'
    ];

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
