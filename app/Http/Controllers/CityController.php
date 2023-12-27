<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Customer;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CityController extends Controller
{
  
  
  
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function city(){
        
        return view('admin.city');
        }

        // handle fetch all city ajax request
	public function cityfetchall() {
		$cit = City::all();
		$output = '';
		if ($cit->count() > 0) {
			$output .= '<table id="city_table" class="datatables-basic table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Pincode</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($cit as $city) {
        
				$output .= '<tr>
                <td>' . $city->id . '</td>
                
                <td>' . $city->city_name . '</td>
                <td>' . $city->pincode . '</td>
                <td>
                  <a href="#" id="' . $city->id . '" class="text-success mx-1 CeditIcon"  data-toggle="modal" data-target="#editCityModal">
                  <i class="fa fa-edit"></i></a>
                  
                  <a href="#" id="' . $city->id . '" class="text-danger mx-1 CdeleteIcon">
                  <i class="fa fa-trash"></i>
                  </a>
                  
                </td>

               
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}




        public function citystore(Request $request) {

    $CityData = ['city_name' => $request->city_name, 'pincode' => $request->pincode ];
           
           City::create($CityData);

          return response()->json([
            'status' => 200,
          ]);

        }

        	// handle edit an employee ajax request
	public function cityedit(Request $request) {
		$id = $request->id;
		$city = City::find($id);
		return response()->json($city);
	}


    public function cityupdate(Request $request) {

        // $fileName = '';
        $city = City::find($request->city_id);
        
        
        $CityData = ['city_name' => $request->city_name, 'pincode' => $request->pincode ];
      
      $city->update($CityData);
      return response()->json([
      'status' => 200,
      ]);
      }


    
  public function citydelete(Request $request) {
		$id = $request->id;
		$cus = City::find($id);
        City::destroy($id);
		// if (Storage::delete('/storage/images/' . $cus->avatar)) {
		// 	Roughblock::destroy($id);
		// }
	}
}
