@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">New Payment</h3>
                    <div class="card-options">
                        <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                                class="fe fe-chevron-up"></i></a>
                        <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('save_new_payment') }}" id="pay_form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Payment Type</label>
                            <select name="payment_type" class="form-select" id="">
                                <option value="monthly">monthly</option>
                                <option value="onetime">onetime</option>
                            </select>
                            @error('payment_type')
                                <div class="text-warning mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <input class="form-control" name="amount" value="{{ old('amount') }}" onkeyup="conv()" placeholder="">
                            @error('amount')
                                <div class="text-warning mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount In Text</label>
                            <input class="form-control" value="{{ old('amount_in_text') }}" name="amount_in_text" id="amount_in_text" placeholder="">
                            @error('amount_in_text')
                                <div class="text-warning mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Screenshot or Receipt photo
                            </label>
                            <input class="form-control" type="file" name="attachment"
                                onchange="image_prev.src=window.URL.createObjectURL(event.target.files[0])"
                                accept=".jpg,.jpeg,.png" placeholder="">
                            @error('attachment')
                                <div class="text-warning mt-1">{{ $message }}</div>
                            @enderror
                            <div class="mt-1">
                                <img src="" style="width: 80px;" id="image_prev" alt="">
                            </div>
                        </div>
                        <div class="form-footer">
                            <button onclick="event.target.disabled=true;pay_form.submit();" class="btn btn-primary btn-block">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="/dashboard/assets/number_to_text.js"></script>
    <script>
        function conv() {
            amount_in_text.value = convertAmount(event.target.value);
        }
    </script>
@endsection
