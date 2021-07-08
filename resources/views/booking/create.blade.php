@extends('layouts.app')

@section('content')
<h1>New Booking</h1>
<form action="{{route('booking.store')}}" method="POST" >
    @csrf
  <div class="mb-3">
    <label for="booking_date" class="form-label">Booking Date </label>
    <input type="date" class="form-control @error('booking_date') {{'is-invalid'}} @enderror" placeholder="" aria-describedby="emailHelp" name="booking_date" value="{{ old('booking_date') }}">
    @error('booking_date')<div class="text-danger">{{ $message }}</div>@enderror
    
  </div>
  <div class="mb-3">
    <label for="booking_time" class="form-label">Booking Time </label>
    <input type="time" name="booking_time"  id="booking_time" value="{{ old('booking_time') }}"  class="form-control @error('booking_time') {{'is-invalid'}} @enderror" placeholder="">
    @error('booking_time')<div class="text-danger">{{ $message }}</div>@enderror
  </div>
  <div class="mb-3">
    <label for="seats_nbr" class="form-label">number of seats</label>
    <input type="number" class="form-control @error('seats_nbr') {{'is-invalid'}} @enderror" placeholder="" min="1" max="20" name="seats_nbr" value="{{ old('seats_nbr') }}">
    @error('seats_nbr')<div class="text-danger">{{ $message }}</div>@enderror
  </div>
 
  <button type="submit" class="btn btn-primary"> Book now !</button>
</form>
@endsection


