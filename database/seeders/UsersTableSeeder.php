<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('users')->truncate();

        $json = File::get(base_path(). '/database/seeders/json/users.json');
        $users = json_decode($json);

        foreach ($users as $user) {
           User::create([
            'uuid' => Str::uuid(),
            'name' => $user->name,
            'email' => $user->email,
            'password' => Hash::make($user->password)
          ]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
