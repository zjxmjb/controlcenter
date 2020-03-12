<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Position;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SweatboxController extends Controller
{  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $user = Auth::user();
        $bookings = Booking::all()->sortBy('date');
        
        if($user->isMentor()) return view('sweatbox.calendar', compact('bookings', 'user'));
        
        abort(403);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $user = Auth::user();
        $positions = Position::all();

        if($user->isMentor()) return view('sweatbox.create', compact('positions'));

        abort(403);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $booking = Booking::findOrFail($id);
        $positions = Position::all();
        $user = Auth::user();

        if ($booking->mentor == $user->id || $user->isModerator()) return view('sweatbox.show', compact('booking', 'positions'));

        abort(403);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'date' => 'required|date:Y-m-d|after_or_equal:today',
            'start_at' => 'required|regex:/^\d{2}:\d{2}$/',
            'end_at' => 'required|regex:/^\d{2}:\d{2}$/',
            'position' => 'required|exists:positions,callsign',
            'mentor_notes' => 'nullable|string|max:255'
        ]);

        $user = Auth::user();

        if($user->isMentor()) {
            $date = new DateTime($data['date']);
            $booking = new Booking();
            
            $booking->user_id = $user->id;
            $booking->date = $date->format('Y-m-d'); 
            $booking->start_at = $data['start_at'];
            $booking->end_at = $data['end_at'];
            $booking->position_id = Position::all()->firstWhere('callsign', $data['position'])->id;
            $booking->mentor_notes = $data['mentor_notes'];

            if($booking->start_at === $booking->end_at) return back()->withErrors('Booking has to have a duration!')->withInput();

            $booking->save();
        }

        return redirect('/sweatbox');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 
    public function update(Request $request)
    {
        $data = $request->validate([
            'date' => 'required|date:Y-m-d|after_or_equal:today',
            'start_at' => 'required|regex:/^\d{2}:\d{2}$/',
            'end_at' => 'required|regex:/^\d{2}:\d{2}$/',
            'position' => 'required|exists:positions,callsign',
            'mentor_notes' => 'nullable|string|max:255'
        ]);

        $user = Auth::user();
        $booking = Booking::findOrFail($request->id);

        if($user->id == $booking->mentor || $user->isModerator()) {
            $date = new DateTime($data['date']);

            $booking->user_id = $booking->user_id;
            $booking->date = $date->format('Y-m-d'); 
            $booking->start_at = $data['start_at'];
            $booking->end_at = $data['end_at'];
            $booking->position_id = Position::all()->firstWhere('callsign', $data['position'])->id;
            $booking->mentor_notes = $data['mentor_notes'];

            if($booking->start_at === $booking->end_at) return back()->withErrors('Booking has to have a duration!')->withInput();

            $booking->save();
        }

        return redirect('/sweatbox');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $user = Auth::user();
        $booking = Booking::findOrFail($id);

        if($user->id == $booking->mentor || $user->isModerator()) $booking->delete();

        return redirect('/sweatbox');
    }
}