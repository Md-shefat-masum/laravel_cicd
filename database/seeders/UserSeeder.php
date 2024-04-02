<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonString = file_get_contents(public_path('u.json'));
        $jsonString = json_decode($jsonString);
        foreach ($jsonString as $item) {
            $item = (array) $item;
            if(!User::where('phone_number1',$item["মোবাইল নং"])->exists()){
                $phone_number = explode(',',$item["মোবাইল নং"]);
                User::create([
                    "name" => $item["নাম:"],
                    "father_name" => $item["পিতার নাম"],
                    "phone_number1" => $phone_number[0],
                    "phone_number2" => $phone_number[1] ?? null,
                    "password" => Hash::Make($item["password"]),
                ]);
            }
        }
    }
}
