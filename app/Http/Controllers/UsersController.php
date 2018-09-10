<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Laracasts\Flash\Flash;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function index()
    {
      $users = User::orderBy('id', 'ASC')->paginate(10);
      return view('admin.users.index')->with('users', $users);
    }
    /**
    *
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
      return view('admin.users.create');
    }
    /**
    *
    * @param \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(UserRequest $request)
    {
      $user = new User($request->all());
      $user->password = bcrypt($request->password);
      $user->save();

      Flash::success("Usuario " . $user->name . " Creado Exitosamente");

      return redirect()->route('admin.users.index');

    }
    /**
    *
    * @param int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {

    }
    /**
    *
    *@param int  $id
    *@return \Illuminate\Http\Response
    */
    public function edit($id)
    {
      $user = User::find($id);
      return view('admin.users.edit')->with('user', $user);
    }
    /**
    *
    * @param \Illuminate\Http\Request  $request
    * @param int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
      $user = User::find($id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->type = $request->type;
      $user->save();

      Flash::warning("Usuario " . $user->name . " Editado Exitosamente");

      return redirect()->route('admin.users.index');
    }
    /**
    *
    *
    * @param int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();

      Flash::error('Usuario ' . $user->name . ' Eliminado Exitosamente');

      return redirect()->route('admin.users.index');
    }
    /**
    *
    *
    * @param int  $id
    * @return \Illuminate\Http\Response
    */
}
