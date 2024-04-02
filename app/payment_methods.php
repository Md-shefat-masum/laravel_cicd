<?php

use App\Models\User;
use App\Models\UserPayments;
use App\Models\UserPaymentTarget;
use Carbon\Carbon;

function company_start_date()
{
    return Carbon::parse("2023-06-01");
}

function total_month()
{
    return Carbon::now()->diffInMonths(company_start_date(), true);
}

function total_members() {
    return User::where("role",'member')->count();
}

function monthly_due()
{
    $months = UserPaymentTarget::where('type', 'monthly')->get()->unique('date');

    $total = 0;
    $total_months = 0;

    foreach ($months as $key => $month) {
        $interval_months = 0;
        if (isset($months[$key + 1])) {
            $interval_months = Carbon::parse($month->date)->diffInMonths(Carbon::parse($months[$key + 1]->date)->subMonths(1), 1);
        } else {
            $interval_months = Carbon::parse($month->date)->diffInMonths(Carbon::now(), 1);
        }
        $total += ($month->amount * round($interval_months));
        $total_months += round($interval_months);
    }

    return [
        "amount" => $total,
        "months" => $total_months,
    ];
}

function onetime_due()
{
    $months = UserPaymentTarget::where('type', 'onetime')->get();

    $total = 0;
    $total_interval = 0;

    foreach ($months as $key => $month) {
        $total += $month->amount * $month->interval;
        $total_interval += $month->interval;
    }

    return [
        "amount" => $total,
        "intervals" => $total_interval,
    ];
}


function user_monthly_paid($user_id = null)
{
    $payments = UserPayments::query()
        ->where('payment_type', 'monthly')
        ->where('approved', 'approved');

    if ($user_id) {
        $payments->where('user_id', $user_id);
    }
    return $payments->sum('amount');
}

function user_last_year_months()
{
    $months = [];
    for ($i = 12; $i > 0; $i--) {
        $months[] = Carbon::now()->subMonths($i)->format('M, y');
    }
    return $months;
}

function user_last_year_monthly_paid($user_id = null)
{
    $payments = [];
    for ($i = 12; $i > 0; $i--) {
        $date = Carbon::now()->subMonths($i); // $date->clone()->format('Y-m-d')
        $payments[] = UserPayments::where(function ($q) use ($user_id) {
            if ($user_id) {
                return $q->where('user_id', $user_id);
            }
            return $q->where('user_id', '>', 0);
        })
            ->where('payment_type', 'monthly')
            ->where('approved', 'approved')
            ->whereMonth('date', $date->clone()->format('m'))
            ->whereYear('date', $date->clone()->format('Y'))
            ->sum('amount');
    }

    return $payments;
}

function user_last_year_onetime_paid($user_id = null)
{
    $payments = [];
    for ($i = 12; $i > 0; $i--) {
        $date = Carbon::now()->subMonths($i); // $date->clone()->format('Y-m-d')
        $payments[] = UserPayments::where(function ($q) use ($user_id) {
            if ($user_id) {
                return $q->where('user_id', $user_id);
            }
            return $q->where('user_id', '>', 0);
        })
            ->where('payment_type', 'onetime')
            ->where('approved', 'approved')
            ->whereMonth('date', $date->clone()->format('m'))
            ->whereYear('date', $date->clone()->format('Y'))
            ->sum('amount');
    }

    return $payments;
}

function user_onetime_paid($user_id = null)
{
    $payments = UserPayments::where(function ($q) use ($user_id) {
        if ($user_id) {
            return $q->where('user_id', $user_id);
        }
        return $q->where('user_id', '>', 0);
    })
        ->where('payment_type', 'onetime')
        ->where('approved', 'approved')
        ->sum('amount');

    return $payments;
}
