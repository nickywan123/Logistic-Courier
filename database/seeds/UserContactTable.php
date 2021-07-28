<?php

use App\UserContact;
use Illuminate\Database\Seeder;

class UserContactTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create user contact (temporarily)

        //normal user
        $user_contact = new UserContact();
        $user_contact->user_id = 1;
        $user_contact->contact_num = "0173009891";
        $user_contact->save();


        //admin 
        $user_contact = new UserContact();
        $user_contact->user_id = 2;
        $user_contact->contact_num = "0122188219";
        $user_contact->save();

    }
}
