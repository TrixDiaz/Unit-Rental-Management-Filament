<?php

namespace Database\Seeders;

use App\Models\Concourse;
use App\Models\ConcourseRate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConcourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Concourse::create([
            'rate_id' => ConcourseRate::select('id')->inRandomOrder()->first()->id,
            'name' => 'Concourse 1',
            'unit_number' => rand(1, 10),
            'status' => 'Available',
            'deposit' => rand(1, 10),
            'address' => 'Concourse 1 description',
            'image' => 'https://placehold.co/600x400',
            'lease_term' => rand(1, 10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
