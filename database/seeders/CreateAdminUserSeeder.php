<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //role
        $role = Role::create(['guard_name' => 'admin', 'name' => 'admin']);
        $role2 = Role::create(['guard_name' => 'web', 'name' => 'user']);

        //admin
        $admin = Admin::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'remember_token' => Str::random(10),
        ]);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $admin->assignRole([$role->id]);

        //user
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'remember_token' => Str::random(10),
        ]);

        $user2 = User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('user123'),
            'remember_token' => Str::random(10),
        ]);

        $user3 = User::create([
            'name' => 'Faris',
            'email' => 'faris@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('faris123'),
            'remember_token' => Str::random(10),
        ]);

        $user4 = User::create([
            'name' => 'Ahmad',
            'email' => 'ahmad@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('ahmad123'),
            'remember_token' => Str::random(10),
        ]);

        $user5 = User::create([
            'name' => 'Maulana',
            'email' => 'maulana@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('maulana123'),
            'remember_token' => Str::random(10),
        ]);

        $user6 = User::create([
            'name' => 'Husein',
            'email' => 'husein@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('husein123'),
            'remember_token' => Str::random(10),
        ]);

        $user7 = User::create([
            'name' => 'Al',
            'email' => 'al@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('al123'),
            'remember_token' => Str::random(10),
        ]);

        $user8 = User::create([
            'name' => 'Bai',
            'email' => 'bai@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('bai123'),
            'remember_token' => Str::random(10),
        ]);

        $permissions2 = Permission::pluck('id','id')->all();

        $role2->syncPermissions($permissions2);

        $user->assignRole([$role2->id]);
        $user2->assignRole([$role2->id]);
        $user3->assignRole([$role2->id]);
        $user4->assignRole([$role2->id]);
        $user5->assignRole([$role2->id]);
        $user6->assignRole([$role2->id]);
        $user7->assignRole([$role2->id]);
        $user8->assignRole([$role2->id]);
    }
}
