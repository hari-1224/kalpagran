<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Appointment;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;

class AppointmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        if(request()->ajax()) 
        {
 
         $start = (!empty($_GET["start"])) ? ($_GET["start"]) : ('');
         $end = (!empty($_GET["end"])) ? ($_GET["end"]) : ('');
 
         $data = Appointment::whereDate('start', '>=', $start)->whereDate('end',   '<=', $end)->get(['id','title','start', 'end']);
         return Response::json($data);
        }
        return view('admin.appointment');
    }
    
   
    public function create(Request $request)
    {  
        $insertArr = [ 'title' => $request->title,
                       'start' => $request->start,
                       'end' => $request->end
                    ];
        $appointment = Appointment::insert($insertArr);   
        return Response::json($appointment);
    }
     
 
    public function update(Request $request)
    {   
        $where = array('id' => $request->id);
        $updateArr = ['title' => $request->title,'start' => $request->start, 'end' => $request->end];
        $appointment  = Appointment::where($where)->update($updateArr);
 
        return Response::json($appointment);
    } 
 
 
    public function destroy(Request $request)
    {
        $appointment = Appointment::where('id',$request->id)->delete();
   
        return Response::json($appointment);
    }    
}
