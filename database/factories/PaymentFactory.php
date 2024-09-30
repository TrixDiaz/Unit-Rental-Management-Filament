<?php

namespace Database\Factories;

use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $startDate = now()->startOfYear();
        $endDate = now()->endOfYear();

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
