<?php

namespace Database\Seeders;

use App\Models\UserPaymentTarget;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserPaymentTargetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserPaymentTarget::truncate();
        UserPaymentTarget::create([
            "date" => "2023-06-01",
            "type" => "monthly",
            "amount" => "2000",
            "interval" => "12",
        ]);

        UserPaymentTarget::create([
            "date" => "2023-06-01",
            "type" => "onetime",
            "amount" => "5000",
            "interval" => "2",
        ]);
    }
}
