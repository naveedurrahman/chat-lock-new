<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // create permissions
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // create roles and assign created permissions
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo([Permission::all()]);

        $role = Role::create(['name' => 'superadmin']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'agent']);
        $role->givePermissionTo(Permission::all());



        $user1 = new User;
        $user1->name = 'Admin';
        $user1->email = 'admin@gmail.com';
        $user1->password = Hash::make('admin123');
        $user1->image = 'assets/images/profile.jpg';
        $user1->number = '+923109704986';
        $user1->save();
        $user1->assignRole('admin');

        $user2 = new User;
        $user2->name = 'SuperAdmin';
        $user2->email = 'superadmin@gmail.com';
        $user2->password = Hash::make('super123');
        $user2->image = 'assets/images/profile.jpg';
        $user2->save();
        $user2->assignRole('superadmin');

        $user3 = new User;
        $user3->name = 'Agent';
        $user3->email = 'agent@gmail.com';
        $user3->password = Hash::make('agent123');
        $user3->image = 'assets/images/profile.jpg';
        $user3->save();
        $user3->assignRole('agent');
    }
}