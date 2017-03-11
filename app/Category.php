<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Dimsav\Translatable\Translatable;

class Category extends Model
{

	use Translatable;

	public $translatedAttributes = ['name'];
	public $translationModel = 'App\CategoryTranslation';
	protected $fillable = ['name'];

    public function products()
    {
    	return $this->hasMany(Product::class);
    }
}