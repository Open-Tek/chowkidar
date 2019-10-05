<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run()
      {
            $user = factory(\App\User::class)->create([
                'name' => 'Gaurav Punjabi',
                'email' => 'gaurav@gmail.com',
                'phone_number' => '8828262618'
            ]);

            factory(\App\Teacher::class)->create([
                'user_id' => $user->id
            ]);
      }
}
