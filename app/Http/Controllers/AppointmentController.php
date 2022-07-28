<?php
 
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

use DB;
class AppointmentController extends Controller
{
    public function Appointment()
    {
        return view('appointment');
    }
    public function addAppointment(Request $request)
    {
        DB::table ('appointment')->insert([
        'name'=> $request->name,
        'date'=> $request->date,
        'concern'=> $request->concern
    ]);

    return back()->with('post_add', 'Appointment Booked');
    }
}
