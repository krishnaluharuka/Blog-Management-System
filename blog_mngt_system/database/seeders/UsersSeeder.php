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
                'username'=>'Krrish',
                'email'=>'krishnaluharuka11@gmail.com',
                'password'=> Hash::make('Ad@12345'),
                'role'=>'admin',
                'status'=>'active'
            ],//editor
            [
                'name'=>'Editor',
                'username'=>'Editor',
                'email'=>'rahdhekrishnaa@gmail.com',
                'password'=>Hash::make('Ad@12345'),
                'role'=>'editor',
                'status'=>'active'
            ],//author
            [
                'name'=>'Author',
                'username'=>'Author',
                'email'=>'krishnaluharuka.xdezo@gmail.com',
                'password'=>Hash::make('Ad@12345'),
                'role'=>'author',
                'status'=>'active'
            ],//user
            [
                'name'=>'User',
                'username'=>'User',
                'email'=>'arohimittal00@gmail.com',
                'password'=>Hash::make('Ad@12345'),
                'role'=>'user',
                'status'=>'active'
            ]
        ]);
    }
}
