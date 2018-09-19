<?php

use Illuminate\Database\Seeder;
use App\Permission;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission_1 = Permission::where('name', 'create-sticker')->first();
        $permission_2 = Permission::where('name', 'watch-lesson')->first();
        $permission_3 = Permission::where('name', 'upload-lesson')->first();

        $role1 = factory('App\Role')->create(['name' => 'Admin']);
        $role1->permissions()->attach($permission_1);
        $role1->permissions()->attach($permission_2);


        $role2 = factory('App\Role')->create(['name' => 'Student']);
        $role2->permissions()->attach($permission_2);

        $role3 = factory('App\Role')->create(['name' => 'Professor']);
        $role3->permissions()->attach($permission_2);
        $role3->permissions()->attach($permission_3);
    }
}
