<?php

namespace App\Http\Controllers;

use App\Models\Dispatch;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class DispatchController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
     public function dispatchrepo()
    {
        $dispatch = DB::table('m_dispatch')->get();
        return view('admin.m-dispatch',compact('dispatch'));
    }
    public function adddispatch()
    {
        return view('admin.add-dispatch');
    }
    
    public function adddispatched(Request $request)
    {
        
             $fields = $request->validate([
            'date' => 'required',
            'customer_address' => 'required',
            'invoice_no' => 'required',
            'invoice_value' => 'required',
            'gst_amount' => 'required',
            'slab_color' => 'required',
            'measurement' => 'required',
            'photo_upload' => 'required|image',
          
             ]);
            
              if ($request->hasFile('photo_upload')) {
                  $fields['photo_upload'] = $request->file('photo_upload')->store('/backend/images', 'public');
                }
                
           
             $user = Dispatch::create($fields);
             
             return redirect('admin/m-dispatch');

    }
    
    public function dispatchEdit($id)
    {
        
      $dispatch = DB::table('m_dispatch')->where('id',$id)->first();
      
      return view('admin.edit-dispatch',compact('dispatch'));
    }
    
    
    public function Updatedispatch(Request $request,$id)
    {
        $dispatch = Dispatch::find($id);
            
        $dispatch->date=$request->date;
        $dispatch->customer_address=$request->customer_address;
        $dispatch->invoice_no=$request->invoice_no;
        $dispatch->invoice_value=$request->invoice_value;
        $dispatch->gst_amount=$request->gst_amount;
        $dispatch->slab_color=$request->slab_color;
        $dispatch->measurement=$request->measurement;

            
        if ($request->hasFile('photo_upload')) 
        {
            $dispatch->photo_upload = $request->file('photo_upload')->store('/backend/images','public');
        }
         
        $dispatch->update();

        return redirect('admin/m-dispatch');

    }
   
        
        
}
