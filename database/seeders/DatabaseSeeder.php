<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // Account::factory(5)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Hardcoded add to the database using DATABASE SEEEDING
        // command : php artisan migrate:refresh --seed (delete the current data and overwrite it with new)
            Account::create([
               'Email' => 'peter.ayate@gmail.com',
               'Password' => 'password234',
               'Type' => 'Teacher',
               'Role' => 'Enrollment Officer',
               'Status' => 'deactivated',
            ]);

            Account::create([
                'Email' => 'cyrel.pellosis@gmail.com',
                'Password' => 'password103',
                'Type' => 'Teacher',
                'Role' => 'LIS Coordinator',
                'Status' => 'active',
             ]);

             Account::create([
                'Email' => 'kenneth.regonay@gmail.com',
                'Password' => 'kenneth27',
                'Type' => 'Principal',
                'Role' => 'Brigada Coordinator',
                'Status' => 'active',
             ]);

             Account::create([
                'Email' => 'bob.ong@gmail.com',
                'Password' => 'tanbobG1',
                'Type' => 'Teacher',
                'Role' => 'Grade Level Chairman',
                'Status' => 'active',
             ]);
            
             Account::create([
                'Email' => 'juanDC@gmail.com',
                'Password' => 'Delacruz01',
                'Type' => 'Principal',
                'Role' => 'IT Coordinator',
                'Status' => 'pending',
             ]);
             
             Account::create([
                'Email' => 'jose.sotto@gmail.com',
                'Password' => 'jose.sotto03',
                'Type' => 'Principal',
                'Role' => 'WATCH President',
                'Status' => 'active',
             ]);

        }
    }
