<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $message_1 = Message::create([
            'sender_name' => 'Ram Sharma',
            'sender_email'  => 'ram@test.com',
            'sender_contact' => '9876543456',
            'message_description' => 'Hello I am here',
        ]);    
        
        $message_2 = Message::create([
            'sender_name' => 'Ram Sharma',
            'sender_email'  => 'ram@test.com',
            'sender_contact' => '9876543456',
            'message_description' => 'Hello I am here',
        ]); 

        $message_3 = Message::create([
            'sender_name' => 'Ram Sharma',
            'sender_email'  => 'ram@test.com',
            'sender_contact' => '9876543456',
            'message_description' => 'Hello I am here',
        ]); 

        $message_4 = Message::create([
            'sender_name' => 'Ram Sharma',
            'sender_email'  => 'ram@test.com',
            'sender_contact' => '9876543456',
            'message_description' => 'Hello I am here',
        ]);    
        
        $message_5 = Message::create([
            'sender_name' => 'Ram Sharma',
            'sender_email'  => 'ram@test.com',
            'sender_contact' => '9876543456',
            'message_description' => 'Hello I am here',
        ]); 

        $message_6 = Message::create([
            'sender_name' => 'Ram Sharma',
            'sender_email'  => 'ram@test.com',
            'sender_contact' => '9876543456',
            'message_description' => 'Hello I am here',
        ]); 
    
    }
}
