<?php

namespace App\Http\Controllers;

use App\Models\Epoxy;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class EpoxyController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
     public function epoxy()
    {
        $epoxy = DB::table('m_epoxy')->get();
        return view('admin.m-epoxy',compact('epoxy'));
    }
    public function addepoxy()
    {
        return view('admin.add-epoxy');
    }
    
    public function addepoxyrep(Request $request)
    {
        
             $fields = $request->validate([
            'date' => 'required',
            'block_no' => 'required',
            'no_of_slabs' => 'required',
            'epoxy_make' => 'required',
            'running_time' => 'required',
            'consumption' => 'required',
            'operator_name' => 'required',
            'photo_upload' => 'required|image',
          
             ]);
            
              if ($request->hasFile('photo_upload')) {
                  $fields['photo_upload'] = $request->file('photo_upload')->store('/backend/images', 'public');
                }
                
           
             $user = Epoxy::create($fields);
             
             return redirect('admin/m-epoxy');

    }
    
    public function epoxyEdit($id)
    {
        
      $epoxy = DB::table('m_epoxy')->where('id',$id)->first();
      
      return view('admin.edit-epoxy',compact('epoxy'));
    }
   
    public function Updateepoxy(Request $request,$id)
    {
        $epoxy = Epoxy::find($id);
            
        $epoxy->date=$request->date;
        $epoxy->block_no=$request->block_no;
        $epoxy->no_of_slabs=$request->no_of_slabs;
        $epoxy->epoxy_make=$request->epoxy_make;
        $epoxy->running_time=$request->running_time;
        $epoxy->consumption=$request->consumption;
        $epoxy->operator_name=$request->operator_name;

            
        if ($request->hasFile('photo_upload')) 
        {
            $epoxy->photo_upload = $request->file('photo_upload')->store('/backend/images','public');
        }
         
        $epoxy->update();

        return redirect('admin/m-epoxy');

    }
        
        
}
