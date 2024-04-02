<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserPayments;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserPayments::truncate();

        function convertDateFormat($dateString)
        {
            $carbonDate = Carbon::createFromFormat('d-m-Y', $dateString);
            if (!$carbonDate) {
                return "Invalid date format";
            }
            return $carbonDate->format('Y-m-d');
        }

        $jsonString = file_get_contents(public_path('p.json'));
        $jsonString = json_decode($jsonString);
        foreach ($jsonString as $item) {
            $user = User::where('phone_number1', $item->mobile_no)->first();

            if (isset($item->addmission) && $item->addmission) {
                if (!$user) {
                    User::create([
                        "name" => $item->mobile_no,
                        "father_name" => null,
                        "phone_number1" => $item->mobile_no,
                        "phone_number2" => null,
                        "password" => Hash::Make("654321"),
                    ]);
                }
                UserPayments::create([
                    'user_id' => $user->id,
                    'amount' => $item->addmission,
                    'date' => null,
                    'payment_type' => 'addmission',
                    'approved' => 'approved',
                ]);
            }

            for ($i=1; $i <= 6; $i++) {
                $item2 = (array) $item;
                $kys = "s".$i;
                $kyd = "d".$i;
                if (isset($item2[$kys]) && $item2[$kys]) {
                    UserPayments::create([
                        'user_id' => $user->id,
                        'amount' => $item2[$kys],
                        'date' => convertDateFormat($item2[$kyd]),
                        'payment_type' => 'monthly',
                        'approved' => 'approved',
                    ]);
                }
            }
        }
    }
}
