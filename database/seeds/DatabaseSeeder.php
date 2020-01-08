<?php

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('admins')->insert
       ([

            'name' => 'Thiện Nhân',
            'email'=>'runhitbtn2@gmail.com',
            'password'=>bcrypt('123456789'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
