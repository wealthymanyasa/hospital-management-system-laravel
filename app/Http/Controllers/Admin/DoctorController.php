<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorCreateRequest;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctors = Doctor::all();

        return view('admin.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorCreateRequest $request)
    {

        $doctor = new Doctor();

        $doctor_image_name = $request->file('doctor_image')->store('public/doctorimage');
        //dd($doctor_image_name);
        $doctor->create([
            'doctor_name' => $request->doctor_name,
            'doctor_phone' => $request->doctor_phone,
            'doctor_image' => $doctor_image_name,
            'speciality' => $request->speciality,
            'room_number' => $request->room_number,
        ]);

        return to_route('admin.doctors.index')->with('success', 'Doctor added successfully');
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
    public function edit(Doctor $doctor)
    {
        return view('admin.doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'doctor_name' => ['required'],
            'doctor_phone' => ['required'],
            'speciality' => ['required'],
            'room_number' => ['required'],
        ]);
        //dd($request->room_number);
        ///delete image
        if ($request->hasFile('image')) {
            Storage::delete('doctor_image');
        //  dd($request->file('doctor_image'));
        $doctor_image_name = $request->file('doctor_image')->store('public/doctorimage');
        }
       // dd( $doctor_image_name);
        $doctor->update([
            'doctor_name' => $request->doctor_name,
            'doctor_phone' => $request->doctor_phone,
            'speciality' => $request->speciality,
            'room_number' => $request->room_number,
            'doctor_image' => $doctor_image_name,
        ]);

        return to_route('admin.doctors.index')->with('info', 'Doctor updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return to_route('admin.doctors.index')->with('warning', 'Doctor deleted successfully');
    }
}
