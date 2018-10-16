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
      $role_client = Role::where('name', 'cliente')->first();
      $role_admin = Role::where('name', 'admin')->first();
      $role_editor = Role::where('name', 'profesional')->first();
      $role_visit = Role::where('name', 'visita')->first();

      $user = new User();
      $user->name = 'cliente1';
      $user->email = 'cliente1@example.com';
      $user->password = bcrypt('cliente1');
      $user->save();
      $user->roles()->attach($role_cliente);

      $user = new User();
      $user->name = 'Alan';
      $user->email = 'agsanchezu@gmail.com';
      $user->password = bcrypt('Alan12');
      $user->save();
      $user->roles()->attach($role_admin);

      $user = new User();
      $user->name = 'profesional';
      $user->email = 'profesional@example.com';
      $user->password = bcrypt('profesional');
      $user->save();
      $user->roles()->attach($role_profesional);

      $user = new User();
      $user->name = 'visita';
      $user->email = 'visita@example.com';
      $user->password = bcrypt('visita');
      $user->save();
      $user->roles()->attach($role_visita);
    }
}
