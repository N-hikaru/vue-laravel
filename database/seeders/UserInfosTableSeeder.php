<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserInfo;

class UserInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserInfo::factory()->count(20)->create();
    }
}
