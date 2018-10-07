<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Spatie\Dropbox\Client;
use App\Tag;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\flash;
use App\Menu;

class FilesController extends Controller
{
  public function __construct()
 {

     $this->dropbox = Storage::disk('dropbox')->getDriver()->getAdapter()->getClient();
 }

 public function index(Request $request)
 {
     // Obtenemos todos los registros de la tabla files
     // y retornamos la vista files con los datos.
     $files = File::search($request->name)->orderBy('id', 'DESC')->paginate(10);
     $files->each(function($files){
       $files->tag;
       });
     return view('admin.files.index')->with('files', $files);
     //$files = File::orderBy('created_at', 'desc')->get();

     return view('admin.files.index', compact('files'));
 }

 public function indexeditor(Request $request)
 {
     // Obtenemos todos los registros de la tabla files
     // y retornamos la vista files con los datos.
     $files = File::search($request->name)->orderBy('id', 'DESC')->paginate(10);
     return view('editor.index')->with('files', $files);
     //$files = File::orderBy('created_at', 'desc')->get();

     return view('editor.index', compact('files'));
 }

 public function indexclient(Request $request)
 {
     // Obtenemos todos los registros de la tabla files
     // y retornamos la vista files con los datos.
     $files = File::search($request->name)->orderBy('id', 'DESC')->paginate(10);
     return view('client.index')->with('files', $files);
     //$files = File::orderBy('created_at', 'desc')->get();

     return view('client.index', compact('files'));
 }

 public function store(Request $request)
 {

     Storage::disk('dropbox')->putFileAs(
         '/',
         $request->file('file'),
         $request->file('file')->getClientOriginalName()
     );


     $response = $this->dropbox->createSharedLinkWithSettings(
         $request->file('file')->getClientOriginalName(),
         ["requested_visibility" => "public"]
     );


     $file = File::create([
         'name' => $response['name'],
         'description' => $request['description'],
         'extension' => $request->file('file')->getClientOriginalExtension(),
         'size' => $response['size'],
         'public_url' => $response['url']

     ]);


     $file->tags()->sync($request->tags);

     Flash::success('Documento ' . ' Subido Exitosamente');
     return back();
 }

 public function editorstore(Request $request)
 {

     Storage::disk('dropbox')->putFileAs(
         '/',
         $request->file('file'),
         $request->file('file')->getClientOriginalName()
     );


     $response = $this->dropbox->createSharedLinkWithSettings(
         $request->file('file')->getClientOriginalName(),
         ["requested_visibility" => "public"]
     );


     File::create([
         'name' => $response['name'],
         'extension' => $request->file('file')->getClientOriginalExtension(),
         'size' => $response['size'],
         'public_url' => $response['url']
     ]);

     Flash::success('Documento ' . ' Subido Exitosamente');
     return redirect()->route('editor.index');
 }

 public function download(File $file)
 {

     return Storage::disk('dropbox')->download($file->name);
 }

 public function editordownload(File $file)
 {

     return Storage::disk('dropbox')->download($file->name);
 }

 public function clientdownload(File $file)
 {

     return Storage::disk('dropbox')->download($file->name);
 }
 public function destroy(File $file)
 {
     // Eliminamos el archivo en dropbox llamando a la clase
     // instanciada en la propiedad dropbox.
     $this->dropbox->delete($file->name);
     // Eliminamos el registro de nuestra tabla.
     $file->delete();

    Flash::error('Documento ' . ' Eliminado Exitosamente');

     return back();
 }

 public function editordestroy(File $file)
 {
     // Eliminamos el archivo en dropbox llamando a la clase
     // instanciada en la propiedad dropbox.
     $this->dropbox->delete($file->name);
     // Eliminamos el registro de nuestra tabla.
     $file->delete();

    Flash::error('Documento ' . ' Eliminado Exitosamente');

     return back();
 }

 public function create()
 {
    $tags = Tag::pluck('name', 'id');
     return view('admin.files.create')
     ->with('tags', $tags);
 }
 public function createditor()
 {
     return view('editor.create');
 }
 public function searchTag($name)
 {
     $tag = Tag::SearchTag($name)->first();
     $files = $tag->files();

     return view('admin.files.index')->with('files', $files);



     //return view('admin.files.index')->with('files', $files);



 }

}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//      $files = File::all();
//      return view('admin.files.index')->with('files', $files);
//    }
//}
