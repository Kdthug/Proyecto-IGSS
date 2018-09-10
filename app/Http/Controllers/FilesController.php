<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Spatie\Dropbox\Client;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\flash;

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
     return view('admin.files.index')->with('files', $files);
     //$files = File::orderBy('created_at', 'desc')->get();

     return view('admin.files.index', compact('files'));
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


     File::create([
         'name' => $response['name'],
         'extension' => $request->file('file')->getClientOriginalExtension(),
         'size' => $response['size'],
         'public_url' => $response['url']
     ]);

     Flash::success('Documento ' . ' Subido Exitosamente');
     return redirect()->route('admin.files.index');
 }

 public function download(File $file)
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

 public function create()
 {
     return view('admin.files.create');
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
