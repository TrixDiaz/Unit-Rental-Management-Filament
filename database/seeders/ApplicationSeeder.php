<?php

namespace Database\Seeders;

use App\Models\Application;
use App\Models\Concourse;
use App\Models\Space;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Application::create([
            'user_id' => User::select('id')->inRandomOrder()->first()->id,
            'concourse_id' => Concourse::select('id')->inRandomOrder()->first()->id,
            'status' => 'available',
            'email' => 'owner1@gmail.com',
            'phone_number' => '081234567890',
            'address' => 'Jl. Raya No. 1',
            'lease_term' => rand(1, 10),
            'lease_due' => now()->addMonths(rand(1, 10)),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
