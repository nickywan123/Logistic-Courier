<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Permissions

        Permission::create([
            'name' => 'create an order'
        ]);

        Permission::create([
            'name' => 'manage orders'
        ]);

        Permission::create([
            'name' => 'view all orders'
        ]);

        Permission::create([
            'name' => 'manage booking rates'
        ]);

        Permission::create([
            'name' => 'view all users'
        ]);

        Permission::create([
            'name' => 'manage users'
        ]);

        Permission::create([
            'name' => 'create a user'
        ]);

        Permission::create([
            'name' => 'edit a user'
        ]);

        Permission::create([
            'name' => 'delete a user'
        ]);

        //ROLES
        $customer = Role::create([
            'name' => 'customer'
        ]);

        $customer->givePermissionTo('create an order');

        $administrator = Role::create([
            'name' => 'administrator'
        ]);

        $administrator->givePermissionTo('create an order');
        $administrator->givePermissionTo('manage orders');
        $administrator->givePermissionTo('view all orders');
        $administrator->givePermissionTo('manage booking rates');
        $administrator->givePermissionTo('view all users');
        $administrator->givePermissionTo('manage users');
        $administrator->givePermissionTo('create a user');
        $administrator->givePermissionTo('edit a user');
        $administrator->givePermissionTo('delete a user');


    }
}
