<?php

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = Carbon::now()->subYears(4); // 4 years ago from now
    $endDate = Carbon::now(); 

        return [
            'tenant_id' => Tenant::select('id')->inRandomOrder()->first()->id, 
            'amount' => $this->faker->numberBetween(100, 1000),
            'payment_method' => $this->faker->randomElement(['maya', 'gcash']),
            'payment_status' => $this->faker->randomElement(['paid', 'unpaid']),
            'payment_type' => $this->faker->randomElement(['cash', 'e-wallet']),
            'created_at' => $this->faker->dateTimeBetween($startDate, $endDate),
        ];
    }
}
