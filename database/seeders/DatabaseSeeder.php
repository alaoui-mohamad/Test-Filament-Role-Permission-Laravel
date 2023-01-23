<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $user1 = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
        ]);
        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@example.com',
        ]);
        $role = Role::create(['name' => 'Admin']);
        $user1->assignRole($role);
        
        Permission::create([
            'name' => 'Update Post',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'Create Post',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'Delete Post',
            'guard_name' => 'web'
        ]);
        Permission::create([
            'name' => 'View Post',
            'guard_name' => 'web'
        ]);
    }
}
