<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\GroupRequest;
use App\Group;
use App\Tag;
use App\Article;
use App\file;
use DB;
use Laracasts\Flash\flash;
use Illuminate\Support\Facades\Redirect;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $articles = article::search($request->title)->orderBy('id', 'DESC')->paginate(10);
      $articles->each(function($articles){
        $articles->group;
        $articles->user;
        $articles->file;

    //    $files = file::search($request->name)->orderBy('article_id', 'DESC')->paginate(10);
    //    $files->each(function($files){
    //      $files->article;

      });
      return view('admin.articles.index')->with('articles', $articles);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::pluck('name', 'id');
        $tags = Tag::pluck('name', 'id');

        return view('admin.articles.create')
          ->with('groups', $groups)
          ->with('tags', $tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if ($request->file('file'))
      {
      $file = $request->file('file');
      $name = 'IGSS_' . time() . '.' . $file->getClientOriginalExtension();
      $path = public_path() . '/documents/articles';
      $file->move($path, $name);
    }
    $article = new Article($request->all());
    $article->user_id = \Auth::user()->id;
    $article->group_id = $request->group_id;
    $article->save();

    $article->tags()->sync($request->tags);

    $file = new File();
    $file->name = $name;
    $file->article()->associate($article);
    $file->save();

      Flash::success('Articulo ' . $article->title . ' Creado Exitosamente');

      return redirect()->route('admin.articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $article = Article::find($id);
      $article->group;

      $groups = Group::pluck('name', 'id');
      $tags = Tag::pluck('name', 'id');

      $my_tags = $article->tags->pluck('id')->ToArray();

      return view('admin.articles.edit')
        ->with('groups', $groups)
        ->with('article', $article)
        ->with('tags', $tags)
        ->with('my_tags', $my_tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->fill($request->all());
        $article->group_id = $request->group_id;
        $article->save();

        $article->tags()->sync($request->tags);

        Flash::warning("Articulo " . $article->title . " Editado Exitosamente");

        return redirect()->route('admin.articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $name = File::where('article_id', $id)->value('name');
      unlink(public_path() .  "/documents/articles/$name" );
      $article = Article::find($id);
      $article->delete();


      Flash::error('Articulo ' . $article->title . ' Eliminado Exitosamente');




      return redirect()->route('admin.articles.index');
    }


}
