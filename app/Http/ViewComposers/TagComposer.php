<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Tag;

Class TagComposer {

  public function compose(View $view)
{
  $tags = Tag::all();
  $view->with('tags', $tags);
 }



}
