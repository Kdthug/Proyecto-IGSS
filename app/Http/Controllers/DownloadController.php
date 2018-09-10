<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Article;
use App\File;
use App\Group;
use App\Tag;
use DB;

class DownloadController extends Controller
{
    public function downfunc(){
      $files=DB::table('files')->get();

      return view('admin.files.down', compact('files'));
    }
}
