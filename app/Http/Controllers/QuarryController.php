<?php

namespace App\Http\Controllers;

use App\Models\Quarry;
use App\Models\Roughblock;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Models\City;
use App\Models\Customer;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

use App\Helpers\GenerateId;


class QuarryController extends Controller
{
   
	// public function __construct()
    // {
    //     $this->middleware('auth:admin');
    // }
    
    public function aquarry(){
        $city = City::all();
        return view('admin.quarry',compact('city'));
        }




        	// handle fetch all eamployees ajax request
	public function quarryfetchall() {
		$quarr = Quarry::all();
		$output = '';
		if ($quarr->count() > 0) {
			$output .= '<table id="quarry_table" class="datatables-basic table table-striped table-sm text-center align-middle  table-hover-animation">
            <thead>
              <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>GST</th>
                <th>Mobile</th>
                <th>Started</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($quarr as $quarry) {

				$output .= '<tr>
                <td>' . $quarry->quarry_id . '</td>
                <td><img src="/storage/images/' . $quarry->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $quarry->name . '</td>
                <td>' . $quarry->gst . '</td>
                <td>' . $quarry->phone . '</td>
                <td>' . $quarry->start .  '</td>
				
                <td>
                  <a href="#" id="' . $quarry->id . '" class="text-success mx-1 QeditIcon"  data-toggle="modal" data-target="#editQuarryModal">
                  <i class="fa fa-edit mr-50"></i></a>
				  
                  
                  <a href="#" id="' . $quarry->id . '" class="text-danger mx-1 QdeleteIcon"><i class="fa fa-trash mr-50"></i></a>
               
                </td>

               
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}




	public function quarrystore(Request $request)
    {
        $generatedId = GenerateId::generateId(User::class, 'quarry_id', 5, 'OR');
        // Create a new User instance
        $quarry = new Quarry();
        $quarry->quarry_id = $generatedId;

// Initialize variables
$fileName = null;
$fileName2 = null;
$fileName3 = null;
$fileName4 = null;
$fileName5 = null;
// File 1
$file = $request->file('avatar');
if ($file) {
    $fileName = time() . '1' . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('storage/images/'), $fileName);
}

// File 2
$file2 = $request->file('avatar2');
if ($file2) {
    $fileName2 = time() . '2' . '.' . $file2->getClientOriginalExtension();
    $file2->move(public_path('storage/images/'), $fileName2);
}

// File 3
$file3 = $request->file('avatar3');
if ($file3) {
    $fileName3 = time() . '28' . '.' . $file3->getClientOriginalExtension();
    $file3->move(public_path('storage/images/'), $fileName3);
}

// File 4
$file4 = $request->file('avatar4');
if ($file4) {
    $fileName4 = time() . '80' . '.' . $file4->getClientOriginalExtension();
    $file4->move(public_path('storage/images/'), $fileName4);
}
$file5 = $request->file('avatar5');
if ($file5) {
    $fileName5 = time() . '80' . '.' . $file5->getClientOriginalExtension();
    $file5->move(public_path('storage/images/'), $fileName5);
}

		
		// Check if at least one image is uploaded

			// Store data
			$quarrData = [
				'quarry_id' => $generatedId,
				'start' => $request->start,
				'name' => $request->name,
				'city_id' => $request->city_id,
				'material' => $request->material,
				'address' => $request->address,
				'phone' => $request->phone,
				'email' => $request->email,
				'year' => $request->year,
				'remark' => $request->remark,
				'gst' => $request->gst,
				'credit' => 0,
				'debit' => 0,
				'avatar' => $fileName,
				'avatar2' => $fileName2,
				'avatar3' => $fileName3,
				'avatar4' => $fileName4,
				'avatar5' => $fileName5
			];
		
			$quarry->fill($quarrData);
			$quarry->save();
			
			return response()->json([
				'status' => 200,
			]);
			
				}
        	// handle edit an employee ajax request
	public function quarryedit(Request $request) {
		$id = $request->id;
		$rbloc = Quarry::with('city')->whereId($id)->first();
		// $city = City::all();
		// $rbloc->city_name;
		return response()->json($rbloc);
	}


  	// handle update an employee ajax request
	  public function quarryupdate(Request $request)
	  {
		  $quarry = Quarry::find($request->quarry_id);
	  
		  $avatarFields = ['avatar', 'avatar2', 'avatar3', 'avatar4', 'avatar5'];
		  $avatars = [];
	  
		  foreach ($avatarFields as $key => $field) {
			$img=$this->handleAvatar($request, $field, $key);
			if($img!=null){

				$avatars[$field] = $img;
			}
		  }
	  
		  $quarrData = [
			  'start' => $request->start,
			  'name' => $request->name,
			  'city_id' => $request->city_id,
			  'material' => $request->material,
			  'address' => $request->address,
			  'phone' => $request->phone,
			  'email' => $request->email,
			  'year' => $request->year,
			  'remark' => $request->remark,
			  'gst' => $request->gst,
			  'credit' => 0,
			  'debit' => 0,
		  ];
	  
		  $quarrData = array_merge($quarrData, $avatars);
		  $quarry->update($quarrData);
	  
		  return response()->json([
			  'status' => 200,
			  'message' => 'Quarry updated successfully',
		  ]);
	  }
	  
	  private function handleAvatar(Request $request, $field, $index)
	  {
		  if ($request->hasFile($field)) {
			  $fileName = time() . $index . '.' . $request->file($field)->getClientOriginalExtension();
			  $request->file($field)->move('storage/images/', $fileName);
			  return $fileName;
		  }
	  
		  return null;
	  }
	  


  public function quarrydelete(Request $request) {
		$id = $request->id;
		$cus = Quarry::find($id);
        Quarry::destroy($id);
		// if (Storage::delete('/storage/images/' . $cus->avatar)) {
		// 	Quarry::destroy($id);
		// }
	}

	public function quarryshow()
	{
		$quarr = Quarry::all();     
		
		return view('quarry', compact('quarr'));
	}
	

  }
  
