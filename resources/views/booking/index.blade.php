@extends('layouts.app')

@section('content')
@if (session('bookingNotification'))
    <div class="alert alert-success alert-dismissible fade show">
        {{session('bookingNotification')}}

    </div>
@endif
<a href="{{ route('booking.create') }}" class="btn btn-outline-primary btn-lg float-right" role="button" aria-pressed="true">Book now !</a>
<h1>List of my bookings</h1>
<div class="row">
    <div class="col">
        <h3>Upcoming bookings</h3>
    <ul class="list-group">
        @if (count($comingBookings) <= 0)
            <li class="list-group-item list-group-item-action">No coming bookings</li>
        @else
            @foreach ($comingBookings as $booking)
            <a href="{{ route('booking.show', $booking->id) }}">
                <li class="list-group-item list-group-item-action">
                    Booking will be <strong>{{ $booking->booking_date->format('l, F jS Y') }}</strong>
                    at <strong>{{date('H:i',strtotime($booking->booking_time))}}</strong>
                    <span class="badge badge-primary badge-pill float-right">{{ $booking->seats_nbr }} persons</span>
                </li>
            </a>
            @endforeach
        @endif
    </ul>
    </div>
    <div class="col">
        <h3>Old bookings</h3>
    <ul class="list-group">
        @if (count($passedBookings) <= 0)
            <li class="list-group-item list-group-item-action">No passed bookings</li>
        @else
            @foreach ($passedBookings as $booking)
            <li class="list-group-item list-group-item-action">
                Booking was for the <strong>{{ $booking->booking_date->format('l, F jS Y') }}</strong>
                at <strong>{{date('H:i',strtotime($booking->booking_time))}}</strong>
                <span class="badge badge-primary badge-pill float-right">{{ $booking->seats_nbr }} persons</span>
            </li>
            @endforeach
        @endif
    </ul>
    </div>
</div>
@endsection