<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

use Illuminate\Support\Facades\Auth;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comingBookings = Auth::user()->bookings()->comingBookings()->orderBy('booking_date')->get();
        $passedBookings = Auth::user()->bookings()->passedBookings()->orderBy('booking_date' , 'desc')->get();
        return view ('booking.index',[
            // 'bookings'=> booking::paginate(10)
            // 'bookings'=> Auth::user()->bookings()->orderBy('booking_date','asc')->get()
            'comingBookings' => $comingBookings,
            'passedBookings' => $passedBookings
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('booking.create');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'booking_date'=>'required|date',
            'booking_time'=>'required',
            'seats_nbr'=>'required|min:1|max:20',
        ]);

        $booking = new Booking ;
        $booking->user_id = Auth::id();
        $booking->booking_date = $request->booking_date;
        $booking->booking_time = $request->booking_time;
        $booking->seats_nbr = $request->seats_nbr;
        
        $booking->save();
        return redirect()->route('booking.index')->with('addBooking', 'New Booking added successfully ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
