<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\NotificationUser;
use App\Models\User;
use App\Models\UserPayments;
use App\Models\UserPaymentTarget;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class AdminDashboardController extends Controller
{


    public function dashboard()
    {
        $total_paid = user_monthly_paid() + user_onetime_paid();

        $monthly_due = monthly_due();
        $onetime_due = onetime_due();

        $monthly_paid = user_monthly_paid();
        $onetime_paid = user_onetime_paid();

        $payments = UserPayments::orderBy('id', 'DESC')->limit(10)->get();

        $user_last_year_monthly_paid = user_last_year_monthly_paid();
        $user_last_year_onetime_paid = user_last_year_onetime_paid();
        $chart_data_set = json_encode([$user_last_year_monthly_paid, $user_last_year_onetime_paid]);
        $chart_months = json_encode(user_last_year_months());

        return view('admin.dashboard', [
            'total_paid' => $total_paid,
            'monthly_due' => $monthly_due,
            'onetime_due' => $onetime_due,
            'monthly_paid' => $monthly_paid,
            'onetime_paid' => $onetime_paid,
            'payments' => $payments,
            'chart_data_set' => $chart_data_set,
            'chart_months' => $chart_months,
        ]);
    }

    public function notifications()
    {
        $user_id = auth()->user()->id;
        $notifications = Notification::whereExists(function ($query) use ($user_id) {
            $query->select("*")
                ->from('notification_users')
                ->whereColumn('notifications.id', 'notification_users.notification_id')
                ->where('notification_users.user_id', $user_id);
        })
            ->orWhere('to_all', 1)
            ->orderBy('id', 'DESC')
            ->paginate(10);

        foreach ($notifications->items() as $item) {
            $item->seen = NotificationUser::where('user_id', $user_id)
                ->where('notification_id', $item->id)
                ->where('seen', 1)->exists();
        }

        return view('admin.notifications', compact('notifications'));
    }

    public function mark_all_as_read()
    {
        $user_id = auth()->user()->id;
        $notifications = Notification::whereExists(function ($query) use ($user_id) {
            $query->select("*")
                ->from('notification_users')
                ->whereColumn('notifications.id', 'notification_users.notification_id')
                ->where('notification_users.user_id', $user_id);
        })
            ->orWhere('to_all', 1)
            ->orderBy('id', 'DESC')
            ->get();

        foreach ($notifications as $item) {
            $seen_item = NotificationUser::where('user_id', $user_id)
                ->where('notification_id', $item->id)
                ->where('seen', 1)->exists();
            if(!$seen_item){
                NotificationUser::create([
                    "user_id" => $user_id,
                    "notification_id" => $item->id,
                    "seen" => 1,
                ]);
            }
        }

        return redirect()->back();
    }

    public function payments()
    {
        $payments = UserPayments::orderBy('id', 'DESC')->paginate(10);
        $total_payment = UserPayments::sum('amount');
        return view('admin.payments', compact('payments', 'total_payment'));
    }

    public function save_new_payment()
    {
        $this->validate(request(),[
            "amount" => ['required','numeric'],
            "amount_in_text" => ['required'],
            "attachment" => ['required'],
        ]);
        $payment = UserPayments::create([
            'user_id' => auth()->user()->id,
            "target" => UserPaymentTarget::where('type',request()->payment_type)->orderBy('id','DESC')->first()->amount,
            'amount' => request()->amount,
            'amount_in_text' => request()->amount_in_text,
            'date' => Carbon::now()->toDate(),
            'payment_type' => request()->payment_type,
            'approved' => 'pending',
        ]);

        if(request()->hasFile('attachment')){
            $payment->attachment = Storage::put('uploads/payments/'.Carbon::now()->format('F'),request()->file('attachment'));
            $payment->save();
        }

        return redirect()->route('payments');
    }

    public function new_payment()
    {
        return view('admin.new_payment');
    }

    public function settings()
    {
        return view('admin.settings');
    }
}
