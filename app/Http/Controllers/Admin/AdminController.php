<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fee;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $doctors = DB::table('doctors')->count();
        $appointments = DB::table('appointments')->count();
        $news_updates = DB::table('doctors')->count();
        return view('admin.home',compact('doctors','appointments','news_updates'));
    }
    public function addDoctorView()
    {

        return view('admin.add-doctor');
    }

    public function dashboard()
    {

        return view('dashboard');
    }


}
