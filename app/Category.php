<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	protected $fillable = ['name','description','slug' ,'fa_icon'];
	
    public function products()
    {
    	return $this->belongsToMany('App\Product');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function($category){
            $category->slug = str_slug($category->name);
            $latestSlug = static::whereRaw("slug RLike '^{$category->slug}(-[0-9]*)?$'")
                            ->latest('id')
                            ->pluck('slug');
            if($latestSlug) {
                $pieces = explode('-', $latestSlug);
                $number = intval(end($pieces));
                $category->slug .= '-' . ($number + 1);
            }
        });
    }
}
