<?php

namespace App\Http\Controllers;

use App\Models\BlockEntry;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;
class BlockEntryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
  
    public function blockentry()
    {
        $blockentry = DB::table('m_block_entries')->get();
        return view('admin.m-blockentry',compact('blockentry'));
    }
    
    public function addentry()
    {
        return view('admin.add-entry');
    }
    
    public function addblockentry(Request $request)
    {
        
             $fields = $request->validate([
            'entry_time' => 'required',
            'vehicle_no' => 'required',
            'block_no' => 'required',
            'block_size' => 'required',
            'block_color' => 'required',
            'block_weight' => 'required',
            'quarry_name' => 'required',
            'transport_name' => 'required',
            'photo_upload' => 'required|image',
            'exit_time' => 'required',
             ]);
            
              if ($request->hasFile('photo_upload')) {
                  $fields['photo_upload'] = $request->file('photo_upload')->store('/backend/images', 'public');
                }
                
           
             $user = BlockEntry::create($fields);
             
             return redirect('admin/m-blockentry');
             
    }
     public function blockentryEdit($id)
    {
        
      $blockentry = DB::table('m_block_entries')->where('id',$id)->first();
      
      return view('admin.edit-entry',compact('blockentry'));
    }
    
    
    public function Updateblockentry(Request $request,$id)
        {
            $blockentry = BlockEntry::find($id);
            $blockentry->entry_time=$request->entry_time;
            $blockentry->vehicle_no=$request->vehicle_no;
            $blockentry->block_no=$request->block_no;
            $blockentry->block_size=$request->block_size;
            $blockentry->block_color=$request->block_color;
            $blockentry->block_weight=$request->block_weight;
            $blockentry->quarry_name=$request->quarry_name;
            $blockentry->transport_name=$request->transport_name;
            $blockentry->exit_time=$request->exit_time;
            
            if ($request->hasFile('photo_upload')) 
            {
                $blockentry->photo_upload = $request->file('photo_upload')->store('/backend/images', 'public');
            }
         
            $blockentry->update();

            return redirect('admin/m-blockentry');

        }
        
   
        
        
}
