<?php

namespace App\Http\Controllers;

use App\Models\Roughblock;
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

class RoughblockController extends Controller
{
  
  public function __construct()
  {
      $this->middleware('auth:admin');
  }


    public function rblock(){
        
        return view('admin.rough-block');
        }




        	// handle fetch all eamployees ajax request
	public function rblockfetchall() {
		$rbloc = Roughblock::all();
		$output = '';
		if ($rbloc->count() > 0) {
			$output .= '<table id="rblock_table" class="datatables-basic table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Avatar</th>
                <th>Dimension</th>
                <th>Supplier</th>
                <th>marker</th>
                <th>cbm</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>';
			foreach ($rbloc as $rblock) {
        
				$output .= '<tr>
                <td>' . $rblock->block_id . '</td>
                <td><img src="/storage/images/' . $rblock->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $rblock->length . '<i data-feather="user"></i> X ' . $rblock->breadth . ' X ' . $rblock->height . '</td>
                <td>' . $rblock->supplier . '</td>
                <td>' . $rblock->marker . '</td>
                <td>' . $rblock->cbm .  '</td>
                <td>
                  <a href="#" id="' . $rblock->id . '" class="text-success mx-1 ReditIcon"  data-toggle="modal" data-target="#editRblockModal">
                  <i class="fa fa-edit"></i></a>
                  
                  <a href="#" id="' . $rblock->id . '" class="text-danger mx-1 RdeleteIcon">
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




        public function rblockstore(Request $request) {


          $ccg = ['table' => 'roughblocks','field'=>'block_id', 'length' => 8, 'prefix' => 'RB'];
          $rblock_id = IdGenerator::generate($ccg);


          $file = $request->file('avatar');
          $fileName = time() . '.' . $file->getClientOriginalExtension();
          $resize = Image::make($file)->resize(370,420);
          $resize->save('storage/images/'. $fileName);

          $rblocData = ['block_id' => $rblock_id, 'length' => $request->length, 'breadth' => $request->breadth,
           'height' => $request->height, 'price' => $request->price, 'supplier' => $request->supplier, 
           'color' => $request->color, 'marker' => $request->marker, 'cbm' => $request->cbm, 'remark' => $request->remark, 'avatar' => $fileName ];
           Roughblock::create($rblocData);

          return response()->json([
            'status' => 200,
          ]);

        }

        	// handle edit an employee ajax request
	public function rblockedit(Request $request) {
		$id = $request->id;
		$rbloc = Roughblock::find($id);
		return response()->json($rbloc);
	}


  	// handle update an employee ajax request
	public function rblockupdate(Request $request) {
		$fileName = '';

		$rbloc = Roughblock::find($request->rblock_id);
        $rblock_id = $request->block_id;
		if ($request->hasFile('avatar')) {
			$file = $request->file('avatar');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		$resize = Image::make($file)->resize(370,420);
		$resize->save('storage/images/'. $fileName);
			if ($rbloc->avatar) {
				Storage::delete('public/images/' . $rbloc->avatar);
			}
		} else {
			$fileName = $request->rblock_avatar;
		}

        $rblocData = ['block_id' => $request->block_id, 'length' => $request->length, 'breadth' => $request->breadth,
        'height' => $request->height, 'price' => $request->price, 'supplier' => $request->supplier, 
        'color' => $request->color, 'marker' => $request->marker, 'cbm' => $request->cbm, 'remark' => $request->remark, 'avatar' => $fileName ];
 
	$rbloc->update($rblocData);
		return response()->json([
			'status' => 200,
		]);
	}


  public function rblockdelete(Request $request) {
		$id = $request->id;
		$cus = Roughblock::find($id);
        Roughblock::destroy($id);
		// if (Storage::delete('/storage/images/' . $cus->avatar)) {
		// 	Roughblock::destroy($id);
		// }
	}




  public function bdblock(){
        
    return view('admin.block-dressing');
    }




      // handle fetch all eamployees ajax request
public function bdblockfetchall() {
$bdbloc = Roughblock::all();
$output = '';
if ($bdbloc->count() > 0) {
  $output .= '<table id="bpblock_table" class="datatables-basic table">
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
  foreach ($bdbloc as $bdblock) {
    $output .= 
    
    '<tr>
            <td>' . $bdblock->block_id . '</td>
            <td><img src="/storage/images/' . $bdblock->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
            <td>' . $bdblock->length . '<i data-feather="user"></i> X ' . $bdblock->breadth . ' X ' . $bdblock->height . '</td>
            <td>' . $bdblock->supplier . '</td>
            <td>' . $bdblock->marker . '</td>
            <td>' . $bdblock->cbm .  '</td>
           
       <td>
              <a href="#" id="' . $bdblock->id . '" class="text-success mx-1 BDeditIcon"  data-toggle="modal" data-target="#editBDblockModal">
              <i class="fa fa-edit"></i></a>
              
              <a href="#" id="' . $bdblock->id . '" class="text-danger mx-1 BDdeleteIcon"><i class="fa fa-trash"></i></a>
           
            </td>

           
          </tr>';
  }
  $output .= '</tbody></table>';
  echo $output;
} else {
  echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
}
}




    // public function bdblockstore(Request $request) {


    //   $ccg = ['table' => 'roughblocks','field'=>'block_id', 'length' => 8, 'prefix' => 'RB'];
    //   $rblock_id = IdGenerator::generate($ccg);

    //   $file = $request->file('avatar');
    //   $fileName = time() . '.' . $file->getClientOriginalExtension();
    //   $file->storeAs('public/images', $fileName);

    //   $rblocData = ['block_id' => $rblock_id, 'length' => $request->length, 'breadth' => $request->breadth,
    //    'height' => $request->height, 'price' => $request->price, 'supplier' => $request->supplier, 
    //    'color' => $request->color, 'marker' => $request->marker, 'cbm' => $request->cbm, 'remark' => $request->remark, 'avatar' => $fileName,  'bd_avatar' => $fileName  ];
    //    Roughblock::create($rblocData);

    //   return response()->json([
    //     'status' => 200,
    //   ]);

    // }

      // handle edit an employee ajax request
public function bdblockedit(Request $request) {
$id = $request->id;
$bdbloc = Roughblock::find($id);
return response()->json($bdbloc);
}


// handle update an employee ajax request
public function bdblockupdate(Request $request) {
  $fileName = '';
  $bdbloc = Roughblock::find($request->bdblock_id);
  
        $block_id = $request->block_id;
  
    if ($request->hasFile('bd_avatar')) {
    

      $file = $request->file('bd_avatar');
      $fileName = time() . '.' . $file->getClientOriginalExtension();
      $resize = Image::make($file)->resize(370,420);
      $resize->save('storage/images/'. $fileName);
    
      if ($bdbloc->bd_avatar) {
        Storage::delete('public/images/' . $bdbloc->bd_avatar);
      }
    } else {
      $fileName = $request->bdblock_avatar;
    }

    $bdblocData = ['length' => $request->length, 'breadth' => $request->breadth, 'height' => $request->height, 
    'bd_length' => $request->bd_length, 'bd_breadth' => $request->bd_breadth, 'bd_height' => $request->bd_height,
    'bd_cbm' => $request->bd_cbm,'bd_remark' => $request->bd_remark, 'blockdressing' => 1, 'price' => $request->price, 'supplier' => $request->supplier, 
    'color' => $request->color, 'marker' => $request->marker, 'cbm' => $request->cbm, 'remark' => $request->remark, 'bd_avatar' => $fileName  ];

$bdbloc->update($bdblocData);
return response()->json([
  'status' => 200,
]);
}


public function bdblockdelete(Request $request) {
$id = $request->id;
$cus = Roughblock::find($id);
    Roughblock::destroy($id);
// if (Storage::delete('/storage/images/' . $cus->avatar)) {
// 	Roughblock::destroy($id);
// }
}




public function bcblock(){
        
  return view('admin.block-cutting');
  }




    // handle fetch all eamployees ajax request
public function bcblockfetchall() {
$bcbloc = Roughblock::all();
$output = '';

if ($bcbloc->count() > 0) {
$output .= '<table id="bcblock_table" class="datatables-basic table">
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
foreach ($bcbloc as $bcblock) {
  $output .= 
 
  '<tr>
          <td>' . $bcblock->block_id . '</td>
          <td><img src="/storage/images/' . $bcblock->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
          <td>' . $bcblock->bd_length . '<i data-feather="user"></i> X ' . $bcblock->bd_breadth . ' X ' . $bcblock->bd_height . '</td>
          <td>' . $bcblock->supplier . '</td>
          <td>' . $bcblock->marker . '</td>
          <td>' . $bcblock->bd_cbm .  '</td>
          <td> '.   $bcblock->blockdressing .  '</td>

     <td>
            <a href="#" id="' . $bcblock->id . '" class="text-success mx-1 BCeditIcon"  data-toggle="modal" data-target="#editBCblockModal">
            <i class="fa fa-edit"></i></a>
            
            <a href="#" id="' . $bcblock->id . '" class="text-danger mx-1 BCdeleteIcon"><i class="fa fa-trash"></i></a>
         
          </td>

         
        </tr>';
}
$output .= '</tbody></table>';
echo $output;
} else {
echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
}
}




  // public function bdblockstore(Request $request) {


  //   $ccg = ['table' => 'roughblocks','field'=>'block_id', 'length' => 8, 'prefix' => 'RB'];
  //   $rblock_id = IdGenerator::generate($ccg);

  //   $file = $request->file('avatar');
  //   $fileName = time() . '.' . $file->getClientOriginalExtension();
  //   $file->storeAs('public/images', $fileName);

  //   $rblocData = ['block_id' => $rblock_id, 'length' => $request->length, 'breadth' => $request->breadth,
  //    'height' => $request->height, 'price' => $request->price, 'supplier' => $request->supplier, 
  //    'color' => $request->color, 'marker' => $request->marker, 'cbm' => $request->cbm, 'remark' => $request->remark, 'avatar' => $fileName,  'bd_avatar' => $fileName  ];
  //    Roughblock::create($rblocData);

  //   return response()->json([
  //     'status' => 200,
  //   ]);

  // }

    // handle edit an employee ajax request
public function bcblockedit(Request $request) {
$id = $request->id;
$bdbloc = Roughblock::find($id);
return response()->json($bdbloc);
}


// handle update an employee ajax request
public function bcblockupdate(Request $request) {

  $fileName = '';
  $bcbloc = Roughblock::find($request->bcblock_id);
  
        $block_id = $request->block_id;
  
    if ($request->hasFile('bc_avatar')) {
     
      $file = $request->file('bc_avatar');
      $fileName = time() . '.' . $file->getClientOriginalExtension();
      $resize = Image::make($file)->resize(370,420);
      $resize->save('storage/images/'. $fileName);
    
      if ($bcbloc->bc_avatar) {
        Storage::delete('public/images/' . $bcbloc->bc_avatar);
      }
    } else {
      $fileName = $request->bcblock_avatar;
    }
  
  $bcblocData = ['bc_length' => $request->bc_length, 'bc_breadth' => $request->bc_breadth,'bc_sqft' => $request->bc_sqft, 'bc_remark' => $request->bc_remark, 'bc_machine' => $request->bc_machine, 'bc_slabscount' => $request->bc_slabscount, 'blockcutting' => 1,
  
  'cbm' => $request->cbm, 'remark' => $request->remark, 'bc_avatar' => $fileName  ];

$bcbloc->update($bcblocData);
return response()->json([
'status' => 200,
]);
}


public function bcblockdelete(Request $request) {
$id = $request->id;
$cus = Roughblock::find($id);
  Roughblock::destroy($id);
// if (Storage::delete('/storage/images/' . $cus->avatar)) {
// 	Roughblock::destroy($id);
// }
}


public function bpblock(){
        
  return view('admin.block-polish');
  }




    // handle fetch all eamployees ajax request
public function bpblockfetchall() {
$bpbloc = Roughblock::all();
$output = '';

if ($bpbloc->count() > 0) {
$output .= '<table id="bpblock_table" class="datatables-basic table">
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
foreach ($bpbloc as $bpblock) {
  $output .= 
 
  '<tr>
          <td>' . $bpblock->block_id . '</td>
          <td><img src="/storage/images/' . $bpblock->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
          <td>' . $bpblock->bd_length . '<i data-feather="user"></i> X ' . $bpblock->bd_breadth . ' X ' . $bpblock->bd_height . '</td>
          <td>' . $bpblock->supplier . '</td>
          <td>' . $bpblock->marker . '</td>
          <td>' . $bpblock->bd_cbm .  '</td>
          <td> '.   $bpblock->blockdressing .  '</td>

     <td>
            <a href="#" id="' . $bpblock->id . '" class="text-success mx-1 BPeditIcon"  data-toggle="modal" data-target="#editBPblockModal">
            <i class="fa fa-edit"></i></a>
            
            <a href="#" id="' . $bpblock->id . '" class="text-danger mx-1 BPdeleteIcon"><i class="fa fa-trash"></i></a>
         
          </td>

         
        </tr>';
}
$output .= '</tbody></table>';
echo $output;
} else {
echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
}
}




  // public function bdblockstore(Request $request) {


  //   $ccg = ['table' => 'roughblocks','field'=>'block_id', 'length' => 8, 'prefix' => 'RB'];
  //   $rblock_id = IdGenerator::generate($ccg);

  //   $file = $request->file('avatar');
  //   $fileName = time() . '.' . $file->getClientOriginalExtension();
  //   $file->storeAs('public/images', $fileName);

  //   $rblocData = ['block_id' => $rblock_id, 'length' => $request->length, 'breadth' => $request->breadth,
  //    'height' => $request->height, 'price' => $request->price, 'supplier' => $request->supplier, 
  //    'color' => $request->color, 'marker' => $request->marker, 'cbm' => $request->cbm, 'remark' => $request->remark, 'avatar' => $fileName,  'bd_avatar' => $fileName  ];
  //    Roughblock::create($rblocData);

  //   return response()->json([
  //     'status' => 200,
  //   ]);

  // }

    // handle edit an employee ajax request
public function bpblockedit(Request $request) {
$id = $request->id;
$bdbloc = Roughblock::find($id);
return response()->json($bdbloc);
}


// handle update an employee ajax request
public function bpblockupdate(Request $request) {
$fileName = '';
$bpbloc = Roughblock::find($request->bpblock_id);

      $block_id = $request->block_id;

  if ($request->hasFile('bp_avatar')) {
   
    $file = $request->file('bp_avatar');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		$resize = Image::make($file)->resize(370,420);
		$resize->save('storage/images/'. $fileName);
  
    if ($bpbloc->bp_avatar) {
      Storage::delete('public/images/' . $bpbloc->bp_avatar);
    }
  } else {
    $fileName = $request->bpblock_avatar;
  }

  $bpblocData = [
  'grinding' => $request->grinding, 'epoxy' => $request->epoxy,'polish' => $request->polish,
  'bp_gremark' => $request->bp_gremark, 'bp_eremark' => $request->bp_eremark, 'bp_premark' => $request->bp_premark,
   'bp_avatar' => $fileName  ];

$bpbloc->update($bpblocData);
return response()->json([
'status' => 200,
]);
}


public function bpblockdelete(Request $request) {
$id = $request->id;
$cus = Roughblock::find($id);
  Roughblock::destroy($id);
// if (Storage::delete('/storage/images/' . $cus->avatar)) {
// 	Roughblock::destroy($id);
// }
}


  }
