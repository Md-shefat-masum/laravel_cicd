<?php

namespace Database\Seeders;

use App\Models\Notification;
use App\Models\NotificationUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notification::truncate();
        NotificationUser::truncate();

        for ($i = 0; $i < 25; $i++) {
            $notification = Notification::create([
                'title' => fake()->text(20),
                "description" => fake()->text(),
                "to_all" => rand(0, 1),
            ]);

            if ($notification->to_all == 0) {
                NotificationUser::create([
                    "user_id" => 13,
                    "notification_id" => $notification->id,
                    "seen" => rand(0, 1),
                ]);
            }
        }
    }
}
