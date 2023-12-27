<?php

namespace App\Http\Controllers;

use App\Models\Polishing;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class PolishingController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
     public function polishing()
    {
        $polishing = DB::table('m_polishing')->get();
        return view('admin.m-polishing',compact('polishing'));
    }
  
    public function addpolishing()
    {
        
        return view('admin.add-polishing');
    }
    
    public function addpolish(Request $request)
    {
        
             $fields = $request->validate([
            'date' => 'required',
            'grind_polish' => 'required',
            'starting_time' => 'required',
            'ending_time' => 'required',
            'block_no' => 'required',
            'no_of_slabs' => 'required',
            'remarks' => 'required',
            'operator_name' => 'required',
            'slab_dimension' => 'required',
            'block_color' => 'required',
            'running_time' => 'required',
            'ideal_time' => 'required',
            'breakdown_time' => 'required',
            'powercut_time' =>'required',
            'photo_upload' => 'required|image',
             ]);
            
              if ($request->hasFile('photo_upload')) {
                  $fields['photo_upload'] = $request->file('photo_upload')->store('/backend/images', 'public');
                }
                
           
             $user = Polishing::create($fields);
             
             return redirect('admin/m-polishing');

    }
    
    public function polishingEdit($id)
    {
        
      $polishing = DB::table('m_polishing')->where('id',$id)->first();
      
      return view('admin.edit-polishing',compact('polishing'));
    }
    
    public function Updatepolishing(Request $request,$id)
    {
        $polishing = Polishing::find($id);
            
        $polishing->date=$request->date;
        $polishing->grind_polish=$request->grind_polish;
        $polishing->starting_time=$request->starting_time;
        $polishing->ending_time=$request->ending_time;
        $polishing->block_no=$request->block_no;
        $polishing->no_of_slabs=$request->no_of_slabs;
        $polishing->remarks=$request->remarks;
        $polishing->operator_name=$request->operator_name;
        $polishing->slab_dimension=$request->slab_dimension;
        $polishing->block_color=$request->block_color;
        $polishing->running_time=$request->running_time;
        $polishing->ideal_time=$request->ideal_time;
        $polishing->breakdown_time=$request->breakdown_time;
        $polishing->powercut_time=$request->powercut_time;

   
            
        if ($request->hasFile('photo_upload')) 
        {
            $polishing->photo_upload = $request->file('photo_upload')->store('/backend/images','public');
        }
         
        $polishing->update();

        return redirect('admin/m-polishing');

    }
     
        
}
