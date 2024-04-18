<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Gerente']);
        $role3 = Role::create(['name' => 'Usuario']);
        

        Permission::create(['name' => 'usuarios-crear'])->syncRoles([$role1, $role2 ]);
        Permission::create(['name' => 'usuarios-editar'])->syncRoles([$role1, $role2 ]);
        Permission::create(['name' => 'usuarios-borrar'])->syncRoles([$role1 ]);
        Permission::create(['name' => 'usuarios-ver'])->syncRoles([$role1, $role2, $role3]);


        Permission::create(['name' => 'roles-crear'])->syncRoles([$role1 ]);
        Permission::create(['name' => 'roles-editar'])->syncRoles([$role1 ]);
        Permission::create(['name' => 'roles-borrar'])->syncRoles([$role1 ]);
        Permission::create(['name' => 'roles-ver'])->syncRoles([$role1, $role2 ]);        
 


    }
}




