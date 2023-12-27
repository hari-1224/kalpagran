<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\City;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

use App\Helpers\GenerateId;


class ProductController extends Controller
{
	
    // public function __construct()
    // {
    //      $this->middleware('auth:admin');
    //  }
    
    public function search(Request $request)
    {
        $search = $request->input('search');
    
        // Perform the search query on the 'name' column, you can modify this to match your database schema.
        $products = Product::where('name', 'LIKE', '%' . $search . '%')->get();
    
        return view('products', compact('products'));
    }



public function getProductImage(Request $request)
{
    $name = $request->input('name');
    if($name=="show-all"){

        $products = Product::all();
    }else{

        $products = Product::where('name', $name)
        ->orderBy('name', 'asc')
        ->get();
    

    }

    if ($products->isEmpty()) {
        return response()->json(['error' => 'Images not found'], 404);
    }

    $imageUrls = [];

    foreach ($products as $product) {
        if ($product->avatar) {
            $imageUrls[] = asset('storage/images/' . $product->avatar);
        }
        if ($product->avatar2) {
            $imageUrls[] = asset('storage/images/' . $product->avatar2);
        }
        if ($product->avatar3) {
            $imageUrls[] = asset('storage/images/' . $product->avatar3);
        }
        if ($product->avatar4) {
            $imageUrls[] = asset('storage/images/' . $product->avatar4);
        }
        if ($product->avatar5) {
            $imageUrls[] = asset('storage/images/' . $product->avatar5);
        }
    }

    return response()->json(['image_urls' => $imageUrls]);
}




public function showAllImages()
{
    $products = Product::all();
    $imageData = [];

    foreach ($products as $product) {
        for ($i = 1; $i <= 5; $i++) {
            $avatarField = 'avatar' . $i;
            if ($product->$avatarField) {
                $imageData[] = [
                    'name' => $product->name,
                    'url' => asset('storage/images/' . $product->$avatarField),
                ];
            }
        }
    }

    return response()->json($imageData);
}



    public function aProduct(){
        $city = City::get();
       // dd($city);
        return view('admin.Product',compact('city'));
        }


        	// handle fetch all eamployees ajax request


   	// handle fetch all eamployees ajax request
	   public function productfetchall() {
		$product = Product::all();
		$output = '';
		if ($product->count() > 0) {
			$output .= '<table id="product_table" class="datatables-basic table table-striped table-sm text-center align-middle  table-hover-animation">
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
			foreach ($product as $products) {

				$output .= '<tr>
                <td>' . $products->product_id . '</td>
                <td><img src="/storage/images/' . $products->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
                <td>' . $products->name . '</td>
                <td>' . $products->gst . '</td>
                <td>' . $products->phone . '</td>
                <td>' . $products->start .  '</td>
				
                <td>
                  <a href="#" id="' . $products->id . '" class="text-success mx-1 QeditIcon"  data-toggle="modal" data-target="#editProductModal">
                  <i class="fa fa-edit mr-50"></i></a>
				  
                  
                  <a href="#" id="' . $products->id . '" class="text-danger mx-1 QdeleteIcon"><i class="fa fa-trash mr-50"></i></a>
               
                </td>

               
              </tr>';
			}
			$output .= '</tbody></table>';
			echo $output;
		} else {
			echo '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
		}
	}





	public function Productstore(Request $request)
	{
		$generatedId = GenerateId::generateId(Product::class, 'product_id', 4, 'QR');
		// Create a new Product instance
		$product = new Product();
		$product->product_id = $generatedId;


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


$productData = [
    'product_id' => $generatedId,
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
    'avatar5' => $fileName5,
];

$product->fill($productData);
$product->save();

return response()->json([
    'status' => 200,
]);

	}
	
    public function productedit(Request $request) {
		$id = $request->id;
		$rbloc = Product::with('city')->whereId($id)->first();
		// $city = City::all();
		// $rbloc->city_name;
		return response()->json($rbloc);
	}
	public function productupdate(Request $request)
    {
        $fileName = '';
        $fileName2 = '';
        $fileName3 = '';
        $fileName4 = '';
        $fileName5 = '';
        $product = Product::where('product_id', 'like', '%' . $request->product_id . '%')->first();
        $product_id = $request->product_id;


$fileName = $request->hasFile('avatar')
    ? time() . '.' . $request->file('avatar')->getClientOriginalExtension()
    : $request->product_avatar;

$fileName2 = $request->hasFile('avatar2')
    ? time() . '2' . '.' . $request->file('avatar2')->getClientOriginalExtension()
    : $request->product_avatar2;

$fileName3 = $request->hasFile('avatar3')
    ? time() . '28' . '.' . $request->file('avatar3')->getClientOriginalExtension()
    : $request->product_avatar3;

$fileName4 = $request->hasFile('avatar4')
    ? time() . '80' . '.' . $request->file('avatar4')->getClientOriginalExtension()
    : $request->product_avatar4;

$fileName5 = $request->hasFile('avatar5')
    ? time() . '52' . '.' . $request->file('avatar5')->getClientOriginalExtension()
    : $request->product_avatar5;

// Save the images without resizing
if ($request->hasFile('avatar')) {
    $request->file('avatar')->move('storage/images/', $fileName);
}

if ($request->hasFile('avatar2')) {
    $request->file('avatar2')->move('storage/images/', $fileName2);
}

if ($request->hasFile('avatar3')) {
    $request->file('avatar3')->move('storage/images/', $fileName3);
}

if ($request->hasFile('avatar4')) {
    $request->file('avatar4')->move('storage/images/', $fileName4);
}

if ($request->hasFile('avatar5')) {
    $request->file('avatar5')->move('storage/images/', $fileName5);
}

        $productData = [
			
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
        $product->update($productData);
        return response()->json([
            'status' => 200,
            'message' => 'Product updated successfully',
        ]);
    }

    public function Productdelete(Request $request)
    {
        $id = $request->id;
        $cus = Product::find($id);
        Product::destroy($id);
        // if (Storage::delete('/storage/images/' . $cus->avatar)) {
        // 	Product::destroy($id);
        // }
    }
	public function productshow()
	{
		$products = Product::all();

	return view('products', compact('products'));
	}
	

}
