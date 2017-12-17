<?php

use App\Message;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::truncate();

        for ($i=0; $i <= 10 ; $i++) { 
        	Message::create([
        		'email' 		=> "usuario{$i}@gmail.com",
        		'name' 			=> "Usuario {$i}",
        		'message' 		=> "Este es el mensaje #{$i}"
        	]);
        }
    }
}
