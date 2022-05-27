<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // make a  definition for fake informations
        return [
        'type' => 'Principal', 'Parent' , 'Teacher',  
        'email' => $this->faker->email(),
        'password' => $this->faker->password(),
        'role' => 'Enrollment In- Charge' , 'Brigada Coordinator',
        'status' => 'Deactivated', 'Active', 'Pending'
    ];
    }
}
