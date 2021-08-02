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

        Permission::firstOrCreate([
            'name' => 'create an order'
        ]);

        Permission::firstOrCreate([
            'name' => 'manage orders'
        ]);

        Permission::firstOrCreate([
            'name' => 'view all orders'
        ]);

        Permission::firstOrCreate([
            'name' => 'manage booking rates'
        ]);

        Permission::firstOrCreate([
            'name' => 'view all users'
        ]);

        Permission::firstOrCreate([
            'name' => 'manage users'
        ]);

        Permission::firstOrCreate([
            'name' => 'create a user'
        ]);

        Permission::firstOrCreate([
            'name' => 'edit a user'
        ]);

        Permission::firstOrCreate([
            'name' => 'delete a user'
        ]);

        Permission::firstOrCreate([
            'name' => 'manage customer orders'
        ]);

        //ROLES
        $customer = Role::firstOrCreate([
            'name' => 'customer'
        ]);

        $customer->givePermissionTo('create an order');

        $administrator = Role::firstOrCreate([
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

        $hub = Role::firstOrCreate([
            'name' => 'hub'
        ]);

        $hub->givePermissionTo('create an order');
        $hub->givePermissionTo('manage customer orders');

    }
}
