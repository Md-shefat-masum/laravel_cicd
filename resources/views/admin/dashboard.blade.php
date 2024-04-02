@extends('admin.layouts.app')
@section('content')
    <!--E-commerce widget Start-->
    <div class="row">
        <div class="col-xl-3 col-sm-6 col-12 xl-50">
            <div class="card">
                <div class="ecommerce-widget card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="total-num counter">
                                {{ number_format($total_paid) }}৳
                            </h4>
                            <span class="bn">মোট জমা</span>
                        </div>
                        <div class="col-4">
                            <div class="icon text-end">
                                <i class="icon-package"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flot-chart-container">
                        <div id="morris-line-chart-first" class="flot-chart-placeholder"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 xl-50">
            <div class="card">
                <div class="ecommerce-widget card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="total-num">
                                <span class="counter">
                                    {{ number_format($monthly_paid) }} /
                                    {{ number_format($monthly_due['amount'] * total_members()) }}
                                </span>
                                ৳
                            </h4>
                            <span class="bn">মাসিক জমা</span>
                        </div>
                        {{-- <div class="col-3">
                            <div class="icon text-end">
                                <i class="icon-bar-chart"></i>
                            </div>
                        </div> --}}
                    </div>
                    <div class="flot-chart-container">
                        <div id="morris-line-chart-second" class="flot-chart-placeholder"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 xl-50">
            <div class="card">
                <div class="ecommerce-widget card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="total-num">
                                <span class="counter">
                                    {{ number_format($onetime_paid) }} /
                                    {{ number_format($onetime_due['amount'] * total_members()) }}
                                </span>
                                ৳
                            </h4>
                            <span class="bn">এককালিন জমা</span>
                        </div>
                        {{-- <div class="col-4">
                            <div class="icon text-end">
                                <i class="icon-user"></i>
                            </div>
                        </div> --}}
                    </div>
                    <div class="flot-chart-container">
                        <div id="morris-line-chart-third" class="flot-chart-placeholder"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12 xl-50">
            <div class="card">
                <div class="ecommerce-widget card-body">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="total-num">
                                <span class="counter">
                                    {{ number_format(($monthly_due['amount']* total_members()) + ($onetime_due['amount'] * total_members()) - $total_paid) }}
                                </span>
                                ৳
                            </h4>
                            <span class="bn">বাকী</span>
                        </div>
                        <div class="col-4">
                            <div class="icon text-end">
                                <i class="icon-server"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flot-chart-container">
                        {{-- <div id="morris-line-chart-forth" class="flot-chart-placeholder"></div> --}}
                        <div class="mt-1">
                            <span class="bn">মাসিক:</span>
                            {{ number_format($monthly_due['amount'] * total_members() - $monthly_paid) }}
                        </div>
                        <div>
                            <span class="bn">একাকালিন:</span>
                            {{ number_format(total_members() * $onetime_due['amount'] - $onetime_paid) }}
                        </div>
                        <div>
                            <span class="bn">Total Members:</span>
                            {{ total_members() }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--E-commerce widget Ends-->

    <!--Yearly Income chart Start-->
    <div class="row">
        <div class="col-xl-8 col-md-12 xl-50">
            <div class="card">
                <div class="card-header">
                    <h5>Payments Chart</h5>
                    <div class="d-flex gap-2 ">
                        <div class="d-flex gap-2 align-items-center">
                            <div style="height: 10px; width: 10px; background: #4099ff"></div> monthly
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <div style="height: 10px; width: 10px; background: #ff5370"></div> onetime
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="yearly-chart">
                        <div data-labels="{{ $chart_months }}" data-series="{{ $chart_data_set }}"
                            class="ct-6 flot-chart-container"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-xl-4 col-md-12 xl-50">
            <div class="card">
                <div class="card-header">
                    <h5>Latest Payments</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th class="text-end">Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $item)
                                <tr>
                                    <td>
                                        {{ $item->date }}
                                    </td>
                                    <td class="text-end">
                                        {{ $item->amount }} ৳
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!--Yearly Income chart Ends-->

    </div>
    <!--E-commerce widget Ends-->


    <link rel="stylesheet" href="/dashboard/chart/chartist.css">
    <script src="/dashboard/chart/chartist.js"></script>
    <script src="/dashboard/chart/morris.js"></script>
    <script src="/dashboard/chart/prettify.min.js"></script>
    <script src="/dashboard/chart/raphael.js"></script>
    <script src="/dashboard/chart/dashboard-ecommerce.js"></script>
@endsection
