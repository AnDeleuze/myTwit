<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        User::truncate();

        for ($i = 1; $i < 11; $i++) {
            User::create([
                'code' => "test{$i}",
                'name' => "test{$i}",
                'email' => "test{$i}@test.jp",
                'password' => Hash::make('password'),
            ]);
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
