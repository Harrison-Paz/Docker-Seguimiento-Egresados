<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Administrador']);        
        $role2 = Role::create(['name' => 'Secretaria']);
        $role3 = Role::create(['name' => 'Egresado']);
        $role4 = Role::create(['name' => 'developer']);

        Permission::create(['name' => 'home'])->syncRoles([$role1, $role2, $role3]);

        Permission::create(['name' => 'agregar-egresados'])->syncRoles($role2, $role4);
        Permission::create(['name' => 'listar-egresados'])->syncRoles($role2, $role4);
        Permission::create(['name' => 'editar-egresados'])->syncRoles($role2, $role4);

        Permission::create(['name' => 'listar-usuario'])->syncRoles($role1, $role4);
        Permission::create(['name' => 'agregar-usuario'])->syncRoles($role1, $role4);

        Permission::create(['name' => 'listar-oferta'])->syncRoles($role3, $role4);

        //TODO:para administracion de desarrollo


    }
}
