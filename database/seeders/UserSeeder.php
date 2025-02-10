<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_superadmin = Role::create(['name' => 'superadmin']);
        $role_admin = Role::create(['name' => 'admin']);

        $user_superadmin = new User;
        $user_superadmin->name = 'itmekararmadajaya';
        $user_superadmin->email = 'itmekararmadajaya@gmail.com';
        $user_superadmin->password = Hash::make('password');
        $user_superadmin->save();

        $user_superadmin->assignRole('superadmin');
    }
}
