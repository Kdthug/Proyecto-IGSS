<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role_client = Role::where('name', 'client')->first();
      $role_admin = Role::where('name', 'admin')->first();
      $role_editor = Role::where('name', 'editor')->first();
      $role_visit = Role::where('name', 'visit')->first();

      $user = new User();
      $user->name = 'cliente1';
      $user->email = 'cliente1@example.com';
      $user->password = bcrypt('cliente1');
      $user->save();
      $user->roles()->attach($role_client);

      $user = new User();
      $user->name = 'Alan';
      $user->email = 'agsanchezu@gmail.com';
      $user->password = bcrypt('Alan12');
      $user->save();
      $user->roles()->attach($role_admin);

      $user = new User();
      $user->name = 'editor';
      $user->email = 'editor@example.com';
      $user->password = bcrypt('editor');
      $user->save();
      $user->roles()->attach($role_editor);

      $user = new User();
      $user->name = 'visita';
      $user->email = 'visita@example.com';
      $user->password = bcrypt('visita');
      $user->save();
      $user->roles()->attach($role_visit);
    }
}
