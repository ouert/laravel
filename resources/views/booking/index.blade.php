@extends('layouts.app')
@if (session('addBooking'))
    <div class="alert alert-success alert-dismissible fade show">
        {{session('addBooking')}}

    </div>
@endif
@section('content')
<a href=" {{route('booking.create')}}" style="border: 2px solid;margin:5px; padding:5px;"> book now !</a>
<hr>
<div class="row">
    <div class="col">
        <h2>Upcoming bookings</h2>
    <ul class="list-group">
        @foreach ($comingBookings as $booking)
        <li class="list-group-item list-group-item-action">
            Booking will be <strong>{{ $booking->booking_date }}</strong>
            at <strong>{{date('H:i',strtotime($booking->booking_time))}}</strong>
            <span class="badge badge-primary badge-pill float-right">{{ $booking->seats_nbr }} persons</span>
            <a href="{{route('booking.show',$booking->}}">Delete</a>
            <a href="">Edit</a>
        </li>
        @endforeach
    </ul>
    </div>
    <div class="col">
        <h2>Old bookings</h2>
    <ul class="list-group">
        @foreach ($passedBookings as $booking)
        <li class="list-group-item list-group-item-action">
            Booking was for the <strong>{{ $booking->booking_date }}</strong>
            at <strong>{{date('H:i',strtotime($booking->booking_time))}}</strong>
            <span class="badge badge-primary badge-pill float-right">{{ $booking->seats_nbr }} persons</span>
        </li>
        @endforeach
    </ul>
    </div>
</div>
@endsection