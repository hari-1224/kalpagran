<?php

namespace App\Http\Controllers;

use App\Models\DailyReport;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class DailyReportController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
  
     public function dailyreport()
    {
        $dailyreport = DB::table('m_dailyreport')->get();
        return view('admin.m-dailyreport',compact('dailyreport'));
    }
   
    public function adddailyreport()
    {
        
        return view('admin.add-dailyreport');
    }
    
    public function addreport(Request $request)
    {
        
             $fields = $request->validate([
            'date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'no_of_slabs' => 'required',
            'slab_dimension' => 'required',
            'running_time' => 'required',
            'ideal_time' => 'required',
            'breakdown_time' => 'required',
            'powercut_time' => 'required',
            'photo_upload' => 'required|image',
          
             ]);
            
              if ($request->hasFile('photo_upload')) {
                  $fields['photo_upload'] = $request->file('photo_upload')->store('/backend/images', 'public');
                }
                
           
             $user = Dailyreport::create($fields);
             
             return redirect('admin/m-dailyreport');

    }
    public function dailyreportEdit($id){
        
      $dailyreport = DB::table('m_dailyreport')->where('id',$id)->first();
      
      return view('admin.edit-dailyreport',compact('dailyreport'));
    }
     
    public function Updatedailyreport(Request $request,$id)
    {
        $dailyreport = Dailyreport::find($id);
            
        $dailyreport->date=$request->date;
        $dailyreport->start_time=$request->start_time;
        $dailyreport->end_time=$request->end_time;
        $dailyreport->no_of_slabs=$request->no_of_slabs;
        $dailyreport->slab_dimension=$request->slab_dimension;
        $dailyreport->running_time=$request->running_time;
        $dailyreport->ideal_time=$request->ideal_time;
        $dailyreport->breakdown_time=$request->breakdown_time;
        $dailyreport->powercut_time=$request->powercut_time;

        if ($request->hasFile('photo_upload')) 
        {
            $dailyreport->photo_upload = $request->file('photo_upload')->store('/backend/images','public');
        }
         
        $dailyreport->update();

        return redirect('admin/m-dailyreport');

    }
        
        
}
