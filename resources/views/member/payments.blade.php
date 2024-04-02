@extends('member.layouts.app', [
    'page_header' => 'Payements',
])
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Payment statements</h5>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Approval</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($payments as $item)
                                <tr>
                                    <td>{{ Carbon\Carbon::parse($item->date)->format('d M, Y') }}</td>
                                    <td>{{ $item->payment_type }}</td>
                                    <td>{{ $item->approved }}</td>
                                    <td class="text-end">{{ number_format($item->amount) }} ৳</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="3" class="text-end"> Total: </td>
                                <td class="text-end">{{ number_format($total_payment) }} ৳</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $payments->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
