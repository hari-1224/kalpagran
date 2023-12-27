<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use App\Models\Stockdtl;


use App\Models\Admin;
use App\Models\Customer;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class StockdtlController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function stockdtl(){
      $stockk = Stock::all();
        return view('admin.stockdtl', compact('stockk'));
        }




        	// handle fetch all eamployees ajax request
	public function stockdtlfetchall() {
		$stoc = Stockdtl::all();
		$output = '';
		if ($stoc->count() > 0) {
			$output .= '<table id="stockdtl_table" class="datatables-basic table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Remarks</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($stoc as $stock) {
        
				$output .= '<tr>
                <td>' . $stock->stock_id . '</td>
                <td><img src="/storage/images/' . $stock->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
                
                <td>' . $stock->name . '</td>
                <td>' . $stock->stprice . '</td>
                
                <td>' . $stock->stremark .  '</td>
                <td>
                  <a href="#" id="' . $stock->id . '" class="text-success mx-1 SeditIcon"  data-toggle="modal" data-target="#editStockModal">
                  <i class="fa fa-edit"></i></a>
                  
                  <a href="#" id="' . $stock->id . '" class="text-danger mx-1 SdeleteIcon">
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




        public function stockdtlstore(Request $request) {



          $file = $request->file('avatar');
          $fileName = time() . '.' . $file->getClientOriginalExtension();
          $file->storeAs('public/images', $fileName);

          $stockdtl = ['name' => $request->name, 'price' => $request->price,
           'remark' => $request->remark, 'quantity' => $request->quantity, 'avatar' => $fileName ];
           
           Stockdtl::create($stockdtl);

          return response()->json([
            'status' => 200,
          ]);

        }

        	// handle edit an employee ajax request
	public function stockdtledit(Request $request) {
		$id = $request->id;
		$rbloc = Stockdtl::find($id);
		return response()->json($rbloc);
	}


  	// handle update an employee ajax request
	public function stockdtlupdate(Request $request) {

		$fileName = '';

		$stock = Stockdtl::find($request->stoc_id);
     if ($request->hasFile('avatar')) {
			$file = $request->file('avatar');
			$fileName = time() . '.' . $file->getClientOriginalExtension();
			$file->storeAs('public/images', $fileName);
			if ($stock->avatar) {
				Storage::delete('public/images/' . $stock->avatar);
			}
		} else {
			$fileName = $request->stock_avatar;
		}

        $stockData = ['name' => $request->name, 'price' => $request->price,
        'description' => $request->description, 'quantity' => $request->quantity, 'remark' => $request->remark, 
        'category' => $request->category, 'avatar' => $fileName ];
        

	$stock->update($stockData);
  
		return response()->json([
			'status' => 200,
      
		]);
	}


    
  public function stockdtldelete(Request $request) {
		$id = $request->id;
		$cus = Stockdtl::find($id);
        Stockdtl::destroy($id);
		// if (Storage::delete('/storage/images/' . $cus->avatar)) {
		// 	Roughblock::destroy($id);
		// }
	}
}
