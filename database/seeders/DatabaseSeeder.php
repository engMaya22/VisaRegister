<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('roles')->insert([
            ['role' => 'user'],
            ['role' => 'admin']
        ]);
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@test.com';
        $admin->password = Hash::make('password');
        $admin->role_id = User::ADMIN;
        $admin->save();

    }
}
