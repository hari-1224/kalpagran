<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Stockdtl;
use Illuminate\Http\Request;
use App\Models\Roughblock;


use App\Models\Admin;
use App\Models\Customer;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class StockController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function stock(){
        
        return view('admin.stock');
        }




        	// handle fetch all eamployees ajax request
	public function stockfetchall() {
		$stoc = Stock::all();
		$output = '';
		if ($stoc->count() > 0) {
			$output .= '<table id="stock_table" class="datatables-basic table">
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
                <td>' . $stock->price . '</td>
                <td>' . $stock->description .  '</td>
                <td>' . $stock->remark .  '</td>
                <td>
                  <a href="#" id="' . $stock->id . '" class="text-success mx-1 SeditIcon"  data-toggle="modal" data-target="#editStockModal">
                  <i class="fa fa-edit"></i></a>
                  
                  <a href="#" id="' . $stock->id . '" class="text-success mx-1 SDTeditIcon"  data-toggle="modal" data-target="#editStockdtModal">
                  <i class="fa fa-user"></i>DT</a>

                  <a href="#" id="' . $stock->id . '" class="text-success mx-1 SINeditIcon"  data-toggle="modal" data-target="#editStockinModal">
                  <i class="fa fa-users"></i>in</a>

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




        public function stockstore(Request $request) {


          $ccg = ['table' => 'stocks','field'=>'stock_id', 'length' => 8, 'prefix' => 'ST'];
          $stock_id = IdGenerator::generate($ccg);

          $file = $request->file('avatar');
          $fileName = time() . '.' . $file->getClientOriginalExtension();
          $file->storeAs('public/images', $fileName);

          $rblocData = ['stock_id' => $stock_id, 'name' => $request->name, 'price' => $request->price,
           'description' => $request->description, 'quantity' => $request->quantity, 'remark' => $request->remark, 
           'category' => $request->category, 'avatar' => $fileName ];
           
           Stock::create($rblocData);

          return response()->json([
            'status' => 200,
          ]);

        }

        	// handle edit an employee ajax request
	public function stockedit(Request $request) {
		$id = $request->id;
		$rbloc = Stock::find($id);
		return response()->json($rbloc);
	}


  	// handle update an employee ajax request
	public function stockupdate(Request $request) {

		$fileName = '';

		$stock = Stock::find($request->stoc_id);
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


          	// handle edit an employee ajax request
	public function stockdtedit(Request $request) {
		$id = $request->id;
		$rbloc = Stock::find($id);
		return response()->json($rbloc);
	}

   	// handle update an employee ajax request
	public function stockdtupdate(Request $request) {
    $stock = Stock::find($request->stocc_id);

    $file = $request->file('stavatar');
    $fileName = time() . '.' . $file->getClientOriginalExtension();
    $file->storeAs('public/images', $fileName);

        $stockData = [ 'stockdtl_id' => $request->stocc_id, 'stcredit' => $request->stprice, 'stprice' => $request->stprice, 'stremark' => $request->stremark, 
        'stqty' => $request->stqty, 'ststatus' => $request->ststatus, 'stavatar' => $fileName ];
      
  
        Stockdtl::create($stockData);
  
		return response()->json([
			'status' => 200,
      
		]);
	}




          	// intake edit an employee ajax request
	public function stockinedit(Request $request) {
		$id = $request->id;
		$rbloc = Stock::find($id);
		return response()->json($rbloc);
	}

   	// intake handle update an employee ajax request
	public function stockinupdate(Request $request) {
    $stock = Stock::find($request->stocin_id);

    // $file = $request->file('stavatar');
    // $fileName = time() . '.' . $file->getClientOriginalExtension();
    // $file->storeAs('public/images', $fileName);

        $stockData = [ 'stockdtl_id' => $request->stocin_id, 'stdebit' => $request->inprice, 'stprice' => $request->inprice, 'stremark' => $request->stinremark, 
        'stqty' => $request->stqty, 'ststatus' => 1 ];
      
  
        Stockdtl::create($stockData);
  
		return response()->json([
			'status' => 200,
      
		]);
	}
    
  public function stockdelete(Request $request) {
		$id = $request->id;
		$cus = Stock::find($id);
        Stock::destroy($id);
		// if (Storage::delete('/storage/images/' . $cus->avatar)) {
		// 	Roughblock::destroy($id);
		// }
	}
}
