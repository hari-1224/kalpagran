<?php

namespace App\Http\Controllers;

use App\Models\QCutting;
use App\Models\Qpayments;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\City;
use App\Models\Customer;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Quarry;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class QpaymentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
 // 	Quarry block dressing
 public function qqpayment(){
        
    $customer = Customer::all();
    return view('admin.qqp-payment', compact('customer'));
    }



              // handle fetch all eamployees ajax request
              public function qqpblockfetchall() {
                $qbcbloc = QCutting::all();
                // $qbcbloc = QCutting::with('quarry')->whereId($id)->first();
                $output = '';
                if ($qbcbloc->count() > 0) {
                    $output .= '<table id="show_all_qqpblocks" class="datatables-basic table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Avatar</th>
                        <th>Dimension</th>
                        <th>Quarry</th>
                        <th>City</th>
                        <th>Color</th>
                        <th>cbm</th>
                        
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>';
                    foreach ($qbcbloc as $qbcblock) {
                //         <td>';
                //         if($qbcblock->cbm == 1){
                //             echo   $qbcblock->color ;
                //         }else{
                //         echo  $qbcblock->cbm ;
                //     }
                //    '</td>
                
                        $output .= '<tr>
                        <td>' . $qbcblock->qblock_id . '</td>
                        <td><img src="/storage/images/' . $qbcblock->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
                        <td>' . $qbcblock->length . ' X ' . $qbcblock->breadth . ' X ' . $qbcblock->height . '</td>
                        <td>' . $qbcblock->quarry->quarry_id . '</td>
                        <td>' . $qbcblock->quarry->city->city_name . '</td>
                        <td>' . $qbcblock->color . '</td>
                        <td>' . $qbcblock->cbm .  '</td>
                     
                       
                       <td>
                        
                          <a href="#" id="' . $qbcblock->id . '" class="text-success mx-1 QQPeditIcon"  data-toggle="modal" data-target="#editQQPblockModal">
                          <i class="fa fa-vcard"></i></a>

                          <a href="#" id="' . $qbcblock->id . '" class="text-danger mx-1 QBCdeleteIcon">
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




                	// handle edit an employee ajax request
	public function qqpblockedit(Request $request) {
		$id = $request->id;
		
        $qbmbloc = QCutting::with('quarry')->whereId($id)->first();
		return response()->json($qbmbloc);
	}


  	// handle update an employee ajax request
	public function qqpblockupdate(Request $request) {
        $qqpblock = QCutting::find($request->qqpblock_id);
        $indate = \Carbon\Carbon::now();

        $qqpblockData = ['customer_id' => $request->customer_id, 'payment_id' => $request->payment_id, 'in_date' => $indate ];
 
	$qqpblock->update($qqpblockData);
		return response()->json([
			'status' => 200,
		]);
	}


    public function qqpblockinvoice($id){

        $invoiceq =	QCutting::with('quarry')->whereId($id)->first();
        $invoicec =	QCutting::with('customer')->whereId($id)->first();
        $invoice =	QCutting::whereId($id)->first();
        
    
        return view('admin.invoice', compact('invoice', 'invoicec', 'invoiceq'));
        
        }


}
