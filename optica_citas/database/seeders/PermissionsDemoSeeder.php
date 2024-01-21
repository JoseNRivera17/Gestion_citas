<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['guard_name' => 'api','name' => 'registrar_rol']);
        Permission::create(['guard_name' => 'api','name' => 'listado_rol']);
        Permission::create(['guard_name' => 'api','name' => 'editar_rol']);
        Permission::create(['guard_name' => 'api','name' => 'eliminar_rol']);

        Permission::create(['guard_name' => 'api','name' => 'registrar_optometra']);
        Permission::create(['guard_name' => 'api','name' => 'listado_optometra']);
        Permission::create(['guard_name' => 'api','name' => 'editar_optometra']);
        Permission::create(['guard_name' => 'api','name' => 'eliminar_optometra']);
        Permission::create(['guard_name' => 'api','name' => 'perfil_optometra']);

        Permission::create(['guard_name' => 'api','name' => 'registrar_paciente']);
        Permission::create(['guard_name' => 'api','name' => 'listado_paciente']);
        Permission::create(['guard_name' => 'api','name' => 'editar_paciente']);
        Permission::create(['guard_name' => 'api','name' => 'eliminar_paciente']);
        Permission::create(['guard_name' => 'api','name' => 'perfil_paciente']);

        Permission::create(['guard_name' => 'api','name' => 'registrar_usuario']);
        Permission::create(['guard_name' => 'api','name' => 'listado_usuario']);
        Permission::create(['guard_name' => 'api','name' => 'editar_usuario']);
        Permission::create(['guard_name' => 'api','name' => 'eliminar_usuario']);

        Permission::create(['guard_name' => 'api','name' => 'registrar_cita']);
        Permission::create(['guard_name' => 'api','name' => 'listado_cita']);
        Permission::create(['guard_name' => 'api','name' => 'editar_cita']);
        Permission::create(['guard_name' => 'api','name' => 'eliminar_cita']);

        Permission::create(['guard_name' => 'api','name' => 'registrar_servicio']);
        Permission::create(['guard_name' => 'api','name' => 'listado_servicio']);
        Permission::create(['guard_name' => 'api','name' => 'editar_servicio']);
        Permission::create(['guard_name' => 'api','name' => 'eliminar_servicio']);

        Permission::create(['guard_name' => 'api','name' => 'ver_pago']);
        Permission::create(['guard_name' => 'api','name' => 'editar_pago']);

        Permission::create(['guard_name' => 'api','name' => 'actividad']);
        Permission::create(['guard_name' => 'api','name' => 'calendario']);

        Permission::create(['guard_name' => 'api','name' => 'reporte_gasto']);
        Permission::create(['guard_name' => 'api','name' => 'invoice_report']);

        Permission::create(['guard_name' => 'api','name' => 'configuracion']);


        // create roles and assign existing permissions
        // $role1 = Role::create(['guard_name' => 'api','name' => 'writer']);
        // $role1->givePermissionTo('edit articles');
        // $role1->givePermissionTo('delete articles');

        // $role2 = Role::create(['guard_name' => 'api','name' => 'admin']);
        // $role2->givePermissionTo('publish articles');
        // $role2->givePermissionTo('unpublish articles');

        $role3 = Role::create(['guard_name' => 'api','name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Example User',
        //     'email' => 'test@example.com',
        //     'password' => bcrypt('12345678')
        // ]);
        // $user->assignRole($role1);

        // $user = \App\Models\User::factory()->create([
        //     'name' => 'Example Admin User',
        //     'email' => 'admin@example.com',
        //     'password' => bcrypt('12345678')
        // ]);
        // $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Super-Admin User',
            'email' => 'nicolas@gmail.com',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($role3);
    }
}