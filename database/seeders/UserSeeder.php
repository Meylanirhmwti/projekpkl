<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'User Administrator'
        ]);

        $kasir = Role::create([
            'name' => 'kasir',
            'display_name' => 'Kasir'
        ]);
    
        
    

        $admin = new User();
        $admin->name = 'Meylani';
        $admin->email = 'meylani2@gmail.com';
        $admin->password = Hash::make('123');
        $admin->save();

       
     $kasir = new user();
     $kasir->name = 'zulfan';
     $kasir->email = 'zulfan12@gmail.com';
     $kasir->password = Hash::make('12345');
     $kasir->save();

     
  $admin->attachRole($admin);
  $kasir->attachRole($kasir);
  
    }
}
