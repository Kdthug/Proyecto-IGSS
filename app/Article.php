<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
  //  use Sluggable;
  //    @return array

  //    public function sluggable()
  //    {
  //        return [
  //            'slug' => [
  //                'source' => 'title'
  //            ]
  //        ];
  //    }


    protected $table = "articles";

    protected $fillable = ['title', 'content', 'category_id', 'user_id'];

    public function group()
    {
      return $this->belongsTo('App\Group');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function files()
    {
      return $this->hasMany('App\File');
    }
    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }
    public function scopeSearch($query, $title)
    {
      return $query->where('title', 'LIKE', "%$title%");
    }
}
