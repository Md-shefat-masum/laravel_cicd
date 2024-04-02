@extends('member.layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-7">
            <ul class="notification-dropdown onhover-show-div notification_list">
                <li>
                    Notification
                    <a href="{{ route('mark_all_as_read') }}" onclick="return confirm('mark all read.')" class="ms-1 text-info"> mark all as read</a>
                    <span class="badge rounded-pill badge-secondary text-white text-uppercase pull-right">
                        3 New
                    </span>
                </li>

                @foreach ($notifications as $item)
                    <li>
                        <div class="d-flex {{ !$item->seen? "bg-dark p-2 rounded": ""}}">
                            <i class="flex-shrink-0 align-self-center notification-icon icofont icofont-bell bg-info"></i>
                            <div>
                                <h6 class="mt-0">
                                    {{ $item->title }}
                                </h6>
                                <p class="mb-0">
                                    {{ $item->description }}
                                </p>
                                <span>
                                    <i class="icofont icofont-clock-time p-r-5 text-light"></i>
                                    {{ $item->created_at->diffForHumans()}}
                                </span>
                            </div>
                        </div>
                    </li>
                @endforeach

                <li class="text-center">
                </li>
            </ul>
            <div class=" py-2">
                {{ $notifications->links() }}
            </div>
        </div>
    </div>
@endsection
