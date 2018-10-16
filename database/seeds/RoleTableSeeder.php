<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $role = new Role();
      $role->name = 'admin';
      $role->description = 'Administrator';
      $role->save();

      $role = new Role();
      $role->name = 'profesional';
      $role->description = 'Profesional';
      $role->save();

      $role = new Role();
      $role->name = 'cliente';
      $role->description = 'cliente';
      $role->save();

      $role = new Role();
      $role->name = 'visita';
      $role->description = 'Visita';
      $role->save();
    }
}
