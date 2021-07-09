@component('mail::message')
WELCOME
Dear **{{ Auth::user()->name}}**

We are sending this message to let you know that we have revieved your booking and look forward to see you.<br>
you booking will be on **{{ $booking->booking_date->format('l, F jS Y') }}** at **{{date('H:i',strtotime($booking->booking_time))}}**.<br>
You will be **{{ $booking->seats_nbr }}** persons.
@component('mail::button', ['url' => route('booking.show' , $booking->id)])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
