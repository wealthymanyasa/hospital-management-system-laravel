<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AppointmentCreateRequest;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\NewsUpdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctors = Doctor::all();
            $news_updates = NewsUpdate::all();
            return view('user.home', compact('doctors','news_updates'));
        }
    }

    public function redirect()
    {

        if (Auth::id()) {
            //chek user type
            if (Auth::user()->is_admin == "0") {
                $doctors = Doctor::all();
                return view('user.home', compact('doctors'));
            } else {
                $doctors = DB::table('doctors')->count();
                $appointments = DB::table('appointments')->count();
                $news_updates = DB::table('doctors')->count();
                return view('admin.home',compact('doctors','appointments','news_updates'));
            }
        } else {
            return redirect()->back();
        }
    }
    /**
     * make appointment .
     */
    public function makeAppointment(AppointmentCreateRequest $request)
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
        return redirect()->back()->with('success', 'Request sent successfully. We will contact you soon');
    }
    /**
     * get appointments view.
     */
    public function myAppointmentsView()
    {
        if (Auth::id()) {
            //get appointments for specific user/ logged in user
            //get user id
            $user_id = Auth::user()->id;
            $appointments = Appointment::where('user_id', $user_id)->get();
            return view('user.my-appointments', compact('appointments'));
        } else {
            return redirect()->back();
        }
    }
    /**
     * cancel appointment in storage.
     */
    public function cancelAppointment($id)
    {
        //get appointment to delete
        $appointment = Appointment::find($id);
        $appointment->delete();

        return redirect()->back()->with('warning', 'Appointment cancelled successfully');
    }
}
