<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded = [];

    public function getSizeInKbAttribute()
    {
      return number_format($this->size / 1024, 1);
    }

    protected $table = "files";


    protected $fillable = ['name', 'description' , 'size', 'extension', 'public_url', 'user_id'];

    public function tags()
    {
      return $this->belongsToMany('App\Tag')->withTimestamps();
    }

    public function menus()
    {
      return $this->belongsToMany('App\Menu')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeSearch($query, $name)
    {
      return $query->where('name', 'LIKE', "%$name%");
    }




  //  public function article()
  //  {
  //    return $this->belongsTo('App\Article');
//    }

}
