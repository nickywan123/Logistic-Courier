<?php

use App\User;
use App\UserInfo;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Users table.
        //  $user = new User;
        //  $user->name = 'Nicholas';
        //  $user->email = 'nicholaswan21@hotmail.com';
        //  $user->password = Hash::make('12345678');
        //  $user->email_verified_at = '2020-03-28 12:12:40';
        //  $user->save();

         $user = User::firstOrCreate(
            ['email' => 'nicholaswan21@hotmail.com'],
            [
                'name' => 'Nicholas',
                'password' => Hash::make('12345678'),
                'email_verified_at' => Carbon::now()
            ]
         );
        

        //  //User Info table
        //  $userInfo = new UserInfo();
        //  $userInfo->user_id = $user->id;
        //  $userInfo->credit = 150.20;
        //  $userInfo->save();

        $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );


        //  //Create an admin account
        //  $user = new User;
        //  $user->name = 'Administrator';
        //  $user->email = 'administrator@email.com';
        //  $user->password = Hash::make('administrator123');
        //  $user->email_verified_at = '2020-03-28 12:12:40';
        //  $user->save();
        // $user->assignRole('customer');
        // $user->assignRole('administrator');

        //  $userInfo = new UserInfo();
        //  $userInfo->user_id = $user->id;
        //  $userInfo->credit = 100.00;
        //  $userInfo->save();
        $user = User::firstOrCreate(
            ['email' => 'administrator@email.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('administrator123'),
                'email_verified_at' => Carbon::now()
            ]
         );

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

          $user->assignRole('customer');
          $user->assignRole('administrator');

    }
}
