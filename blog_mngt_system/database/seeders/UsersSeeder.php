<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
 

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
             //admin
            [
                'name'=>'Krishna Luharuka',
                'username'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=> Hash::make('Ad@12345'),
                'role'=>'admin',
                'status'=>'active'
            ],//editor
            [
                'name'=>'Editor',
                'username'=>'Editor',
                'email'=>'editor@gmail.com',
                'password'=>Hash::make('Ad@12345'),
                'role'=>'editor',
                'status'=>'active'
            ],//author
            [
                'name'=>'Author',
                'username'=>'Author',
                'email'=>'author@gmail.com',
                'password'=>Hash::make('Ad@12345'),
                'role'=>'author',
                'status'=>'active'
            ],//user
            [
                'name'=>'User',
                'username'=>'User',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('Ad@12345'),
                'role'=>'user',
                'status'=>'active'
            ]
        ]);
    }
}
