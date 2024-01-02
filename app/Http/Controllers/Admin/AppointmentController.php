<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentCreateRequest;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::all()->sortByDesc('created_at');
        return view('admin.appointments.index', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('admin.appointments.create', compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppointmentCreateRequest $request)
    {
        //check if user is logged in and get user id
        //make user id variable accessible
        $user_id = '';
        if (Auth::id()) {
            $user_id = Auth::user()->id;
        }
        //dd($user_id);
        //create a new appointment
        Appointment::create([
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'doctor_name' => $request->doctor_name,
            'status' => 'In Progress',
            'user_id' => $user_id,
            'date_of_appointment' => $request->date_of_appointment,
            'message' => $request->message,
        ]);
        return to_route('admin.appointments.index')->with('success', 'Appointment created sent successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $appointment)
    {
        $doctors = Doctor::all();
        return view('admin.appointments.edit', compact('appointment', 'doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'full_name' => 'required',
            'email' => ['required', 'email'],
            'phone_number' => 'required',
            'doctor_name' => 'required',
            'date_of_appointment' => 'required',
            'message' => 'required',
        ]);

        $appointment->update([
            'full_name' => $request->full_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'doctor_name' => $request->doctor_name,
            'status' => $request->status,
            'date_of_appointment' => $request->date_of_appointment,
            'message' => $request->message,
        ]);

        return to_route('admin.appointments.index')->with('info', 'Appointment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->back()->with('warning', 'Appointment deleted successfully');
    }
    /**
     * approve appointment in storage.
     */
    public function approveAppointment(Appointment $appointment, $id)
    {
        $appointment->where('id', $id)->update([
            'status' => 'Approved',
        ]);

        return redirect()->back()->with('info', 'Appointment approved successfully');

    }
    /**
     * cancel appointment in storage.
     */
    public function cancelAppointment(Appointment $appointment, $id)
    {
        $appointment->where('id', $id)->update([
            'status' => 'Cancelled',
        ]);

        return redirect()->back()->with('info', 'Appointment cancelled successfully');

    }


}
