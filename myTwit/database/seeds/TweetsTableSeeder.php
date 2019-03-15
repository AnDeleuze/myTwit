<?php

use Illuminate\Database\Seeder;
use App\Model\Tweet;

class TweetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        $max_user_id = 10;

        for ($i = 1; $i < 1001; $i++) {
            $user_id = ($i % rand(1, $max_user_id)) + 1; // 1〜max_user_idまでの整数をランダムに作成

            $content = $faker->sentence(10);
            if (strlen($content) > 140) {
                $content = substr($content, 0, 136) . '...';
            }

            Tweet::create([
                'user_id' => $user_id,
                'content' => $content,
            ]);
        }
    }
}
