<div class="card">
    <div class="card-header">
        <h3 class="card-title">My Profile</h3>
        <div class="card-options">
            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i
                    class="fe fe-chevron-up"></i></a>
            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('update_profile') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-2">
                <div class="col-auto">
                    <img class="img-70 rounded-circle" alt="" src="/{{auth()->user()->photo}}">
                </div>
                <div class="col">
                    <h3 class="mb-1 ">{{auth()->user()->name}}</h3>
                    <p class="mb-4 ">{{auth()->user()->father_name}}</p>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input class="form-control" name="name" value="{{old('name')?old('name'):auth()->user()->name}}" placeholder="">
                @error('name')
                    <div class="text-warning mt-1">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Father Name</label>
                <input class="form-control" name="father_name" value="{{old('father_name')?old('father_name'):auth()->user()->father_name}}" placeholder="">
                @error('father_name')
                    <div class="text-warning mt-1">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Profession</label>
                <input class="form-control" name="profession" value="{{old('profession')?old('profession'):auth()->user()->profession}}" placeholder="">
                @error('profession')
                    <div class="text-warning mt-1">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number 1</label>
                <input class="form-control" name="phone_number1" value="{{old('phone_number1')?old('phone_number1'):auth()->user()->phone_number1}}" placeholder="">
                @error('phone_number1')
                    <div class="text-warning mt-1">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Phone Number 2</label>
                <input class="form-control" name="phone_number2" value="{{old('phone_number2')?old('phone_number2'):auth()->user()->phone_number2}}" placeholder="">
                @error('phone_number2')
                    <div class="text-warning mt-1">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Telegram Name</label>
                <input class="form-control" name="telegram_name" value="{{old('telegram_name')?old('telegram_name'):auth()->user()->telegram_name}}" placeholder="">
                @error('telegram_name')
                    <div class="text-warning mt-1">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input class="form-control" name="email" value="{{old('email')?old('email'):auth()->user()->email}}" placeholder="">
                @error('email')
                    <div class="text-warning mt-1">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <h6 class="form-label">address</h6>
                <textarea class="form-control" name="address" value="" placeholder="">{{old('address')?old('address'):auth()->user()->address}}</textarea>
                @error('address')
                    <div class="text-warning mt-1">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="" name="password" class="form-control" value="{{old('password')}}">
                @error('password')
                    <div class="text-warning mt-1">{{$message}}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Confirm Password</label>
                <input type="" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Photo</label>
                <input class="form-control" type="file" name="photo" onchange="image_prev.src=window.URL.createObjectURL(event.target.files[0])" accept=".jpg,.jpeg,.png" placeholder="">
                @error('photo')
                    <div class="text-warning mt-1">{{$message}}</div>
                @enderror
                <div class="mt-1">
                    <img src="" style="width: 80px;" id="image_prev" alt="">
                </div>
            </div>
            <div class="form-footer">
                <button class="btn btn-primary btn-block">Save</button>
            </div>
        </form>
    </div>
</div>
