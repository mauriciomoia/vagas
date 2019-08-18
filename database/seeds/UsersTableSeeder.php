<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		Users::create([
			'nome'=>'admin'
			,'email'=>'admin@admin.com'
			,'senha'=>bcrypt('1')
		]);
    }
}
