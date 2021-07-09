@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">Booking date</th>
              <th scope="col">Booking time</th>
              <th scope="col">Number of seats</th>
              <th scope="col">Operations</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> {{ $booking->booking_date->format('d/m/Y') }}</td>
              <td> {{ date('H:i', strtotime($booking->booking_time)) }}</td>
              <td> {{ $booking->seats_nbr }}</td>
              <td>
                  <a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-outline-warning">Edit</a>
                  <a href="#" class="btn btn-outline-danger" data-toggle="modal" data-target="#confirmDeleteModal">Delete</a>

              </td>
            </tr>
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete booking</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            Are you sure to delete your booking ?
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline-danger"
                onclick="event.preventDefault();
                document.querySelector('#delete-booking-form').submit();">Confirm delete</button>
            </div>
            <form id="delete-booking-form" action="{{ route('booking.destroy', $booking->id) }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </div>
        </div>
    </div>
@endsection