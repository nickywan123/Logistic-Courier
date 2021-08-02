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

         /**
          * Fuiyoh Hub Accounts
          */
          $user = User::firstOrCreate(
            ['email' => 'kerian-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB KERIAN',
                'password' => Hash::make('g4KaXm5D3v'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'taiping-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB TAIPING',
                'password' => Hash::make('p8Guhyvn7s'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'sg-ara-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB SUNGAI ARA',
                'password' => Hash::make('GbzTNc9geJ'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'sg-buloh-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB SUNGAI BULOH',
                'password' => Hash::make('D46dSXPaZw'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'sri-rampai-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB SRI RAMPAI',
                'password' => Hash::make('agAJhu42m2'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'rembau-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB REMBAU',
                'password' => Hash::make('Cq6Q8KQjNQ'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'hang-tuah-jaya-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB HANG TUAH JAYA',
                'password' => Hash::make('tN3uJJDDVG'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'sg-udang-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB SUNGAI UDANG',
                'password' => Hash::make('48fczm7aFt'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'kota-melaka-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB KOTA MELAKA',
                'password' => Hash::make('5R6wc6YM3M'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'tangkak-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB TANGKAK',
                'password' => Hash::make('YpEX6xahMf'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'bandar-penawar-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB BANDAR PENAWAR',
                'password' => Hash::make('aDckzM8zsk'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'kemaman-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB KEMAMAN',
                'password' => Hash::make('6CTDjnrB4w'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'desa-pinggiran-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB DESA PINGGIRAN',
                'password' => Hash::make('9DNL9cJwZM'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'pandan-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB PANDAN',
                'password' => Hash::make('FKHA7sEdFj'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'selayang-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB SELAYANG',
                'password' => Hash::make('Cce7UYS6zZ'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'semenyih-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB SEMENYIH',
                'password' => Hash::make('UV9DEtHZqJ'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'senawang-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB SENAWANG',
                'password' => Hash::make('VD9MqdKacP'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'port-dickson-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB PORT DICKSON',
                'password' => Hash::make('s8PcQpzD8E'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'nilai-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB NILAI',
                'password' => Hash::make('k29P36SNG4'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'kuala-pilah-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB KUALA PILAH',
                'password' => Hash::make('NJN8CB9uhP'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

         $user = User::firstOrCreate(
            ['email' => 'kuching-hub@fuiyoh.my'],
            [
                'name' => 'FUIYOH HUB KUCHING',
                'password' => Hash::make('jtyeCvw8PU'),
                'email_verified_at' => Carbon::now()
            ]
         );
         $user->assignRole('customer');
         $user->assignRole('hub');

         $userInfo = UserInfo::firstOrCreate(
            ['user_id' => $user->id],
            ['credit' => 0]
         );

    }
}
