<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class ProductionController extends Controller
{
    
     public function __construct()
    {
        $this->middleware('auth:admin');
    }
  
   public function production()
    {
        $production = DB::table('m_production')->get();
        return view('admin.m-production',compact('production'));
    }
    
    public function addproduction()
    {
        return view('admin.add-production');
    }
    
    public function addproduct(Request $request)
    {
        
             $fields = $request->validate([
            'cutting_machine' => 'required',
            'block_dimension' => 'required',
            'block_no' => 'required',
            'block_color' => 'required',
            'loading_time' => 'required',
            'unloading_time' => 'required',
            'no_of_slabs' => 'required',
            'remarks' => 'required|image',
            'operator_name' => 'required',
            'cutting_time' => 'required',
            'ideal_time' => 'required',
            'breakdown_time' => 'required',
            'powercut_time' => 'required',
             ]);
            
              if ($request->hasFile('remarks')) {
                  $fields['remarks'] = $request->file('remarks')->store('/backend/images', 'public');
                }
                
           
             $user = Production::create($fields);
             
             return redirect('admin/m-production');

    }
    
    public function productionEdit($id)
    {
        
      $production = DB::table('m_production')->where('id',$id)->first();
      
      return view('admin.edit-production',compact('production'));
    }
    
    public function Updateproduction(Request $request,$id)
    {
        $production = Production::find($id);
            
        $production->cutting_machine=$request->cutting_machine;
        $production->block_dimension=$request->block_dimension;
        $production->block_no=$request->block_no;
        $production->block_color=$request->block_color;
        $production->loading_time=$request->loading_time;
        $production->unloading_time=$request->unloading_time;
        $production->no_of_slabs=$request->no_of_slabs;
        $production->operator_name=$request->operator_name;
        $production->cutting_time=$request->cutting_time;
        $production->ideal_time=$request->ideal_time;
        $production->breakdown_time=$request->breakdown_time;
        $production->powercut_time=$request->powercut_time;
   
            
        if ($request->hasFile('remarks')) 
        {
            $production->photo_upload = $request->file('remarks')->store('/backend/images','public');
        }
         
        $production->update();

        return redirect('admin/m-production');

    }
   
        
}
