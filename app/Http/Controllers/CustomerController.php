<?php

namespace App\Http\Controllers;

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

class CustomerController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }



    public function customer(){
        
        return view('admin.customer');
        }




        	// handle fetch all eamployees ajax request
	public function customerfetchall() {
		$cus = Customer::all();
		$output = '';
		if ($cus->count() > 0) {
			$output .= '<table id="customer_table" class="datatables-basic table table-striped table-sm text-center align-middle  table-hover-animation">
            <thead>
              <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($cus as $customer) {
				$output .= '<tr>
                <td>' . $customer->customer_id . '</td>
                <td><img src="/storage/images/' . $customer->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $customer->name . ' ' . $customer->gst . '</td>
                <td>' . $customer->email . ' ' . $customer->phone . '</td>
                <td>' . $customer->city . '</td>
                <td>' . $customer->address . '</td>
                <td>
                  <a href="#" id="' . $customer->id . '" class="text-success  editIcon"  data-toggle="modal" data-target="#editCustomerModal">
                  <i class="fa fa-edit"></i></a>
                  
                  <a href="#" id="' . $customer->id . '" class="text-danger deleteIcon"><i class="fa fa-trash"></i></a>
   
                 
                  
                </td>

               
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}




        public function customerstore(Request $request) {


          $ccg = ['table' => 'customers','field'=>'customer_id', 'length' => 8, 'prefix' => 'CU'];
          $customer_id = IdGenerator::generate($ccg);

          
          $file = $request->file('avatar');
          $fileName = time() . '.' . $file->getClientOriginalExtension();
          $resize = Image::make($file)->resize(370,420);
          $resize->save('storage/images/'. $fileName);

          $cusData = ['customer_id' => $customer_id, 'name' => $request->name, 'gst' => $request->gst,
           'city' => $request->city, 'address' => $request->address, 'email' => $request->email, 
           'phone' => $request->phone, 'credit' => 0, 'debit' => 0, 'avatar' => $fileName ];
           Customer::create($cusData);

          return response()->json([
            'status' => 200,
          ]);

        }

        	// handle edit an employee ajax request
	public function customeredit(Request $request) {
		$id = $request->id;
		$cus = Customer::find($id);
		return response()->json($cus);
	}


  	// handle update an employee ajax request
	public function customerupdate(Request $request) {
		$fileName = '';
		$cus = Customer::find($request->cus_id);
		if ($request->hasFile('avatar')) {
      $file = $request->file('avatar');
      $fileName = time() . '.' . $file->getClientOriginalExtension();
      $resize = Image::make($file)->resize(370,420);
      $resize->save('storage/images/'. $fileName);
			if ($cus->avatar) {
				Storage::delete('public/images/' . $cus->avatar);
			}
		} else {
			$fileName = $request->cus_avatar;
		}

    $cusData = ['name' => $request->name, 'gst' => $request->gst,
    'city' => $request->city, 'address' => $request->address, 'email' => $request->email, 
    'phone' => $request->phone, 'credit' => 0, 'debit' => 0, 'avatar' => $fileName ];

 		$cus->update($cusData);
		return response()->json([
			'status' => 200,
		]);
	}


  public function customerdelete(Request $request) {
		$id = $request->id;
		$cus = Customer::find($id);
    Customer::destroy($id);
		// if (Storage::delete('public/images/' . $cus->avatar)) {
		// 	Customer::destroy($id);
		// }
	}


  }
