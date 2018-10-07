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
      $role->name = 'editor';
      $role->description = 'editor';
      $role->save();

      $role = new Role();
      $role->name = 'client';
      $role->description = 'cliente';
      $role->save();

      $role = new Role();
      $role->name = 'visit';
      $role->description = 'Visita';
      $role->save();
    }
}
