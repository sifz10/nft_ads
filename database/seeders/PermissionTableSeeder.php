<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $permissions = [
         'role-list',
         'role-create',
         'role-edit',
         'role-delete',
         'ads-list',
         'ads-create',
         'ads-edit',
         'ads-delete',
         'personalads-list',
         'personalads-create',
         'personalads-edit',
         'personalads-delete'
      ];

      foreach ($permissions as $permission) {
           Permission::create(['name' => $permission]);
      }
    }
}
