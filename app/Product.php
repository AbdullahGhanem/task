<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * fillable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'price', 
        'new', 
        'sale',
    	'amount', 
        'img',
    	'slug'
    ];

    /**
    * A Product has many answers.
    *
    * @var elquent collection
    */
    public function reviews() 
    {
        return $this->hasMany('App\Review');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }

    public function getCategoryListAttribute()
    {
    	return $this->categories->pluck('id');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function($product){
            $product->slug = str_slug($product->title);
            $latestSlug = static::whereRaw("slug RLike '^{$product->slug}(-[0-9]*)?$'")
                            ->latest('id')
                            ->pluck('slug');
            if($latestSlug) {
                $pieces = explode('-', $latestSlug);
                $number = intval(end($pieces));
                $product->slug .= '-' . ($number + 1);
            }
        });
    }
}
