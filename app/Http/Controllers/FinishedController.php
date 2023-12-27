<?php

namespace App\Http\Controllers;

use App\Models\Finished;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class FinishedController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
     public function finished()
    {
        $finished = DB::table('m_finished')->get();
        return view('admin.m-finished',compact('finished'));
    }
    public function addfinished()
    {
        return view('admin.add-finished');
    }
    public function addfinishedgood(Request $request)
    {
        
             $fields = $request->validate([
            'date' => 'required',
            'slab_color' => 'required',
            'slab_no' => 'required',
            'block_no' => 'required',
            'measurement' => 'required',
            'slab_dimension' => 'required',

             ]);

             $user = Finished::create($fields);
             
             return redirect('admin/m-finished');

    }
    
    public function finishedEdit($id)
    {
        
      $finished = DB::table('m_finished')->where('id',$id)->first();
      
      return view('admin.edit-finished',compact('finished'));
    }
    
    public function Updatefinished(Request $request,$id)
    {
        $finished = Finished::find($id);
            
        $finished->date=$request->date;
        $finished->slab_color=$request->slab_color;
        $finished->slab_no=$request->slab_no;
        $finished->block_no=$request->block_no;
        $finished->measurement=$request->measurement;
        $finished->slab_dimension=$request->slab_dimension;
       

        // if ($request->hasFile('photo_upload')) 
        // {
        //     $finished->photo_upload = $request->file('photo_upload')->store('/backend/images','public');
        // }
         
        $finished->update();

        return redirect('admin/m-finished');

    }
   
   
        
        
}
