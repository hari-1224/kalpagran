<?php

namespace App\Http\Controllers;

use App\Models\QCutting;
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

class QCuttingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
  
  
      public function qbcblock(){
        $quarry = Quarry::all();
          return view('admin.qbc-block',compact('quarry'));
          }
  
  
  
  
              // handle fetch all qbcblockfetchall ajax request
      public function qbcblockfetchall() {
          $qbcbloc = QCutting::all();
          // $qbcbloc = QCutting::with('quarry')->whereId($id)->first();
          $output = '';
          if ($qbcbloc->count() > 0) {
              
              $output .= '<table id="qbcblock_table" class="datatables-basic table table-striped table-sm text-center align-middle  table-hover-animation">
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
          
                  $output .= '<tr>
                  <td>' . $qbcblock->qblock_id . '</td>
                  <td><img src="/storage/images/' . $qbcblock->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
                  <td>' . $qbcblock->length . ' X ' . $qbcblock->breadth . ' X ' . $qbcblock->height . '</td>
                  <td>' . $qbcblock->quarry->name . '</td>
                  <td>' . $qbcblock->quarry->city->city_name . '</td>
                  <td>' . $qbcblock->color . '</td>
                  <td>' . $qbcblock->cbm .  '</td>
                  
                  <td>
                    <a href="#" id="' . $qbcblock->id . '" class="text-success mx-1 QBCeditIcon"  data-toggle="modal" data-target="#editQBCblockModal">
                    <i class="fa fa-edit"></i></a>
                    
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
  
  
  
  
          public function qbcblockstore(Request $request) {
  
  
            $ccg = ['table' => 'q_cuttings','field'=>'qblock_id', 'length' => 8, 'prefix' => 'QB'];
            $qblock_id = IdGenerator::generate($ccg);
  
          
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $resize = Image::make($file)->resize(370,420);
            $resize->save('storage/images/'. $fileName);
  
            $qbcblocData = ['qblock_id' => $qblock_id, 'length' => $request->length, 'breadth' => $request->breadth,
             'height' => $request->height, 'price' => $request->price, 'quarry_id' => $request->quarry_id, 
             'color' => $request->color, 'marker' => $request->marker, 'cbm' => $request->cbm, 'remark' => $request->remark, 'avatar' => $fileName ];
             QCutting::create($qbcblocData);
  
            return response()->json([
              'status' => 200,
            ]);
  
          }
  
              // handle edit an employee ajax request
      public function qbcblockedit(Request $request) {
          $id = $request->id;
          // $qbcbloc = QCutting::find($id);
          $qbcbloc = QCutting::with('quarry')->whereId($id)->first();
          return response()->json($qbcbloc);
      }
  
  
        // handle update an employee ajax request
      public function qbcblockupdate(Request $request) {
          $fileName = '';
  
          $qbcbloc = QCutting::find($request->qbcblock_id);
          $qblock_id = $request->qblock_id;
          if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $resize = Image::make($file)->resize(370,420);
            $resize->save('storage/images/'. $fileName);
              if ($qbcbloc->avatar) {
                  Storage::delete('public/images/' . $qbcbloc->avatar);
              }
          } else {
              $fileName = $request->qbcblock_avatar;
          }
  
          $qbcblocData = ['qblock_id' => $request->qblock_id, 'length' => $request->length, 'breadth' => $request->breadth,
          'height' => $request->height, 'price' => $request->price, 'quarry_id' => $request->quarry_id, 
          'color' => $request->color, 'marker' => $request->marker, 'cbm' => $request->cbm, 'remark' => $request->remark, 'avatar' => $fileName ];
   
      $qbcbloc->update($qbcblocData);
          return response()->json([
              'status' => 200,
          ]);
      }
  
  
    public function qbcblockdelete(Request $request) {
          $id = $request->id;
          $cus = QCutting::find($id);
          QCutting::destroy($id);
          // if (Storage::delete('/storage/images/' . $cus->avatar)) {
          // 	QCutting::destroy($id);
          // }
      }




      public function qbmblock(){
        
        return view('admin.qbm-block');
        }
    
    
    
    
          // handle fetch all eamployees ajax request
    public function qbmblockfetchall() {
    $qbmbloc = QCutting::all();
    $output = '';
    if ($qbmbloc->count() > 0) {
      $output .= '<table id="qbmblockk_table" class="datatables-basic table table-striped table-sm text-center align-middle  table-hover-animation">
            <thead>
              <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Dimension</th>
                <th>Supplier</th>
                <th>marker</th>
                <th>cbm</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
      foreach ($qbmbloc as $qbmblock) {
       
        $status = $qbmblock->blockmarking;
        if($status == 1){
$qbmstatus = '<td class="table-success"> Marked </td>';

        }else{
          $qbmstatus = '<td class="table-danger"> Pending </td>';

        };
      
        $output .= 
        
        '<tr>

                <td>' . $qbmblock->qblock_id . '</td>
                <td><img src="/storage/images/' . $qbmblock->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $qbmblock->length . ' X ' . $qbmblock->breadth . ' X ' . $qbmblock->height . '</td>
                <td>' . $qbmblock->quarry->name . '</td>
                <td>' . $qbmblock->marker . '</td>
                <td>' . $qbmblock->cbm .  '</td>
                
                ' . $qbmstatus . '
                
              

               
           <td><a href="#" id="' . $qbmblock->id . '" class="text-success mx-1 QBMeditIcon"  data-toggle="modal" data-target="#editQBMblockModal">
                  <i class="fa fa-edit"></i></a>
                  
                  <a href="#" id="' . $qbmblock->id . '" class="text-danger mx-1 QBMdeleteIcon"><i class="fa fa-trash"></i></a>
               
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
    public function qbmblockedit(Request $request) {
    $id = $request->id;
    
    $qbmbloc = QCutting::with('quarry')->whereId($id)->first();
    return response()->json($qbmbloc);
    
    }
    
    
    // handle update an employee ajax request
    public function qbmblockupdate(Request $request) {
      $fileName = '';
      $qbmbloc = QCutting::find($request->qbmblock_id);
      
            $qblock_id = $request->qblock_id;
      
        if ($request->hasFile('bm_avatar')) {
        
          $file = $request->file('bm_avatar');
          $fileName = time() . '.' . $file->getClientOriginalExtension();
          $resize = Image::make($file)->resize(370,420);
          $resize->save('storage/images/'. $fileName);
          
        
          if ($qbmbloc->bm_avatar) {
            Storage::delete('public/images/' . $qbmbloc->bm_avatar);
          }
        } else {
          $fileName = $request->bmblock_avatar;
        }
    
        $bm_date = \Carbon\Carbon::now();

        $qbmblocData = [
        'bm_length' => $request->bm_length, 'bm_breadth' => $request->bm_breadth, 'bm_height' => $request->bm_height,
        'bm_cbm' => $request->bm_cbm,'bm_remark' => $request->bm_remark, 'blockmarking' => 1,
        'bm_date' => $bm_date, 'marker' => $request->marker, 'bm_avatar' => $fileName  ];
    
    $qbmbloc->update($qbmblocData);
    return response()->json([
      'status' => 200,
    ]);
    }
    
    
    public function qbmblockdelete(Request $request) {
    $id = $request->id;
    $cus = QCutting::find($id);
        QCutting::destroy($id);
    // if (Storage::delete('/storage/images/' . $cus->avatar)) {
    // 	QCutting::destroy($id);
    // }
    }
    

// 	Quarry block dressing
    public function qbdblock(){
        
        return view('admin.qbd-block');
        }
    
    
    
    
          // handle fetch all eamployees ajax request
    public function qbdblockfetchall() {
    $qbdbloc = QCutting::all();
    $output = '';
    if ($qbdbloc->count() > 0) {
      $output .= '<table id="qbdblock_table" class="datatables-basic table table-striped table-sm text-center align-middle  table-hover-animation">
            <thead>
              <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Dimension</th>
                <th>Supplier</th>
                <th>marker</th>
                <th>cbm</th>
                <th>status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
      foreach ($qbdbloc as $qbdblock) {
        $status = $qbdblock->blockdressing;
        if($status == 1){
          $qbdstatus = '<td class="table-success"> Dressed </td>';
          
                  }else{
                    $qbdstatus = '<td class="table-danger"> Pending </td>';
          
                  };
        $output .= 
        
        '<tr>
                <td>' . $qbdblock->qblock_id . '</td>
                <td><img src="/storage/images/' . $qbdblock->bm_avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $qbdblock->bm_length . ' X ' . $qbdblock->bm_breadth . ' X ' . $qbdblock->bm_height . '</td>
                <td>' . $qbdblock->quarry->name . '</td>
                <td>' . $qbdblock->marker . '</td>
                <td>' . $qbdblock->bm_cbm .  '</td>
                ' . $qbdstatus . '
           <td><a href="#" id="' . $qbdblock->id . '" class="text-success mx-1 QBDeditIcon"  data-toggle="modal" data-target="#editQBDblockModal">
                  <i class="fa fa-edit"></i></a>
                  
                  <a href="#" id="' . $qbdblock->id . '" class="text-danger mx-1 QBDdeleteIcon"><i class="fa fa-trash"></i></a>
               
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
    public function qbdblockedit(Request $request) {
    $id = $request->id;
    
    $qbdbloc = QCutting::with('quarry')->whereId($id)->first();
    return response()->json($qbdbloc);
    }
    
    
    // handle update an employee ajax request
    public function qbdblockupdate(Request $request) {
      $fileName = '';
      $qbdbloc = QCutting::find($request->qbdblock_id);
      
            $qblock_id = $request->qblock_id;
      
        if ($request->hasFile('bd_avatar')) {
       

          $file = $request->file('bd_avatar');
          $fileName = time() . '.' . $file->getClientOriginalExtension();
          $resize = Image::make($file)->resize(370,420);
          $resize->save('storage/images/'. $fileName);
        
          if ($qbdbloc->bd_avatar) {
            Storage::delete('public/images/' . $qbdbloc->bd_avatar);
          }
        } else {
          $fileName = $request->bdblock_avatar;
        }
        $bd_date = \Carbon\Carbon::now();
    
        $qbdblocData = [
        'bd_length' => $request->bd_length, 'bd_breadth' => $request->bd_breadth, 'bd_height' => $request->bd_height,
        'bd_cbm' => $request->bd_cbm,'bd_remark' => $request->bd_remark, 'blockdressing' => 1,
        'bd_date' => $bd_date, 'bd_avatar' => $fileName  ];
    
    $qbdbloc->update($qbdblocData);
    return response()->json([
      'status' => 200,
    ]);
    }
    
    
    public function qbdblockdelete(Request $request) {
    $id = $request->id;
    $cus = QCutting::find($id);
        QCutting::destroy($id);
    // if (Storage::delete('/storage/images/' . $cus->avatar)) {
    // 	QCutting::destroy($id);
    // }
    }
    



    // 	Quarry block dressing
    public function qqpblock(){
        
      return view('admin.qqp-payment');
      }
  
  
  
  
        // handle fetch all eamployees ajax request
  public function qqpblockfetchall() {
  $qqpbloc = QCutting::all();
  $output = '';
  if ($qqpbloc->count() > 0) {
    $output .= '<table id="qqpblock_table" class="datatables-basic table table-striped table-sm text-center align-middle  table-hover-animation">
          <thead>
            <tr>
              <th>ID</th>
              <th>Avatar</th>
              <th>Dimension</th>
              <th>Supplier</th>
              <th>marker</th>
              <th>cbm</th>
              <th>status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>';
    foreach ($qqpbloc as $qqpblock) {

        
      $status = $qqpblock->blockdressing;
      if($status == 1){
$qqpstatus = '<td class="table-success"> Dressed </td>';

      }else{
        $qqpstatus = '<td class="table-danger"> Pending </td>';

      };
      $output .= 
      
      '<tr>
              <td>' . $qqpblock->qblock_id . '</td>
              <td><img src="/storage/images/' . $qqpblock->bm_avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
              <td>' . $qqpblock->bm_length . ' X ' . $qqpblock->bm_breadth . ' X ' . $qqpblock->bm_height . '</td>
              <td>' . $qqpblock->quarry_id . '</td>
              <td>' . $qqpblock->bm_marker . '</td>
              <td>' . $qqpblock->bm_cbm .  '</td>
              
              ' . $qqpstatus . '


         <td><a href="#" id="' . $qqpblock->id . '" class="text-success mx-1 QQPeditIcon"  data-toggle="modal" data-target="#editQQPblockModal">
                <i class="fa fa-edit"></i></a>
                
                <a href="#" id="' . $qqpblock->id . '" class="text-danger mx-1 QQPdeleteIcon"><i class="fa fa-trash"></i></a>
             
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
  $qqpbloc = QCutting::find($id);
  return response()->json($qqpbloc);
  }
  
  
  // handle update an employee ajax request
  public function qqpblockupdate(Request $request) {
    $fileName = '';
    $qqpbloc = QCutting::find($request->qqpblock_id);
    
          $qblock_id = $request->qblock_id;
    
      if ($request->hasFile('qp_avatar')) {
      
        $file = $request->file('qp_avatar');
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $resize = Image::make($file)->resize(370,420);
        $resize->save('storage/images/'. $fileName);
      
        if ($qbdbloc->bd_avatar) {
          Storage::delete('public/images/' . $qqpbloc->qp_avatar);
        }
      } else {
        $fileName = $request->qpblock_avatar;
      }
      $qp_date = \Carbon\Carbon::now();
  
      $qqpblocData = [
      'bd_length' => $request->bd_length, 'bd_breadth' => $request->bd_breadth, 'bd_height' => $request->bd_height,
      'bd_cbm' => $request->bd_cbm,'bd_remark' => $request->bd_remark, 'blockdressing' => 1,
      'bd_date' => $bd_date, 'bd_avatar' => $fileName  ];
  
  $qqpbloc->update($qqpblocData);
  return response()->json([
    'status' => 200,
  ]);
  }
  
  
  public function qqpblockdelete(Request $request) {
  $id = $request->id;
  $cus = QCutting::find($id);
      QCutting::destroy($id);
  // if (Storage::delete('/storage/images/' . $cus->avatar)) {
  // 	QCutting::destroy($id);
  // }
  }
}
