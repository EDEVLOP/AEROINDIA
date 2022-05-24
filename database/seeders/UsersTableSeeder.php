<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => '2022-05-24 09:11:47',
                'password' => '$2y$10$hPizyoFwkdCMXfu74LCE2uMM94w7vZWcAuSUiiCePLm5iji0RiMim',
                'remember_token' => 'NxZwuViHfN8K67tZftMJUapOLFkcEFww3TcTfWgOeYV5aywMrfn7NnXCDvEL',
                'created_at' => '2022-05-24 09:11:47',
                'updated_at' => '2022-05-24 09:11:47',
            ),
        ));
        
        
    }
}