<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $guarded = [];

    public function getSizeInKbAttribute()
    {
      return number_format($this->size / 1024000, 1);
    }

    protected $table = "files";


    protected $fillable = ['name', 'size', 'extension', 'public_url'];

    public function scopeSearch($query, $name)
    {
      return $query->where('name', 'LIKE', "%$name%");
    }

  //  public function article()
  //  {
  //    return $this->belongsTo('App\Article');
//    }

}
