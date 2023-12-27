<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\City;
use App\Models\Gallery;
use App\Models\Project;
use App\Models\Customer;
use Auth;
use Authguard;
use Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Redirect,Response,DB,Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;

use RealRashid\SweetAlert\Facades\Alert;


class AdminController extends Controller
{
 
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $user=Auth::user()->name;
        Alert::success('Welcome back', $user);
        return view('admin.home');


    }
    
  

    public function Contact(){
        $message =	DB::table('contacts')->orderBy('id', 'desc')->get();
        return view('admin.contact_message',compact('message'));
      }
      
      
      
      public function DeleteContact($id){
      DB::table('contacts')->where('id',$id)->delete();
      $notification=array(
          'messege'=>'Messages Deleted Successfully',
          'alert-type'=>'success'
           );
         return Redirect()->back()->with($notification);
      }


      public function roughblock(){
        $roughblock =	DB::table('roughblocks')->orderBy('id', 'desc')->get();
        return view('admin.rough-block',compact('roughblock'));
        }


     

        public function roughblock_store(Request $request){

          $ccg = ['table' => 'roughblocks','field'=>'block_id', 'length' => 8, 'prefix' => 'RB'];
        $block_id = IdGenerator::generate($ccg);
      
        $data = array();
        $data['block_id'] = $block_id; 
        // $data['status'] = 1; 
        $data['length'] = $request->length; 
        $data['breadth'] = $request->breadth; 
        $data['height'] = $request->height; 
        $data['price'] = $request->price; 
        $data['supplier'] = $request->supplier; 
        $data['color'] = $request->color;
        $data['marker'] = $request->marker;
        $data['cbm'] = $request->cbm;
        $data['remark'] = $request->remark;
       
      $data['created_at'] = \Carbon\Carbon::now();
        $data['updated_at'] = \Carbon\Carbon::now();
        
        DB::table('roughblocks')->insert($data);
        $notification=array(
              'messege'=>'Block Added Successfully',
              'alert-type'=>'success'
               );
             return Redirect()->back()->with($notification);
      
    }



    public function employee(){
      $employee =Admin::where('role','!=','1')->orderBy('id', 'desc')->get();
      
      
      return view('admin.employee',compact('employee'));
      }
      
  public function employeeAdd(){
    $city = City::all();
    
    return view('admin.employee-add', compact('city'));
    }



        public function employee_store(Request $request){
  $request->validate([
      'email' => 'required|email|unique:admins,email'
  ]);
          $ccg = ['table' => 'admins','field'=>'emp_id', 'length' => 8, 'prefix' => 'EM'];
        $emp_id = IdGenerator::generate($ccg);
      
        $data = array();
        $data['emp_id'] = $emp_id; 
        // $data['status'] = 1; 
        $data['name'] = $request->name; 
        $data['email'] = $request->email; 
        $data['phone'] = $request->phone; 
        $data['gender'] = $request->gender; 
        $data['doj'] = $request->doj; 
        $data['address'] = $request->address; 
        $data['department'] = $request->department;
        $data['role'] = $request->role;
        
        
        $data['password'] = bcrypt($request->password);
        $data['showpassword']=$request->password;
       
        $data['dashboard'] = $request->dashboard; 
        $data['employee'] = $request->employee; 
        $data['production'] = $request->production; 
        $data['stock'] = $request->stock; 
        $data['customer'] = $request->customer; 
        $data['quarry'] = $request->quarry; 
        $data['purchase'] = $request->purchase; 
        $data['setting'] = $request->setting; 
        $data['attendance'] = $request->attendance; 
         
        
      $data['created_at'] = \Carbon\Carbon::now();
        $data['updated_at'] = \Carbon\Carbon::now();
        
        $image_one = $request->photo;
       
  
        // if ($image_one) {
          
        //   $image_one_name = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
        //   Image::make($image_one)->resize(1250,850)->save('media/article/'.$image_one_name);
          
          // $data['photo'] = 'media/employee/'.$image_one_name;
          $data['photo'] = 'backend/images/portrait/small/avatar-s-11.jpg';
  
         
  
        DB::table('admins')->insert($data);
        $notification=array(
              'messege'=>'Employee Added Successfully',
              'alert-type'=>'success'
               );
               return Redirect()->route('employee')->with($notification);
      // }
    }

    public function employeeEdit($id){
      $city = City::all();
      $employee = DB::table('admins')->where('id',$id)->first();
      
      return view('admin.employee-edit',compact('employee', 'city'));
     }






     public function Updateemployee(Request $request,$id){
      
      $admin_id= Auth::user()->id ; 
      $status= Auth::user()->type ; 
      
     
          $validateData = $request->validate([
       
           
        ]);
    
      $data = array();
     //     $data['lead_id'] = 'L-$lead_id';
    //  $data['emp_id'] = $request->emp_id; 
        // $data['status'] = 1; 
        $data['name'] = $request->name; 
        $data['city'] = $request->city; 
        $data['email'] = $request->email; 
        $data['phone'] = $request->phone; 
        $data['gender'] = $request->gender; 
        $data['doj'] = $request->doj; 
        $data['address'] = $request->address; 
        $data['department'] = $request->department;
        $data['role'] = $request->role;
        $data['password'] =bcrypt($request->password);
        $data['showpassword']=$request->password;
       
        $data['dashboard'] = $request->dashboard; 
        $data['employee'] = $request->employee; 
        $data['production'] = $request->production; 
        $data['stock'] = $request->stock; 
        $data['customer'] = $request->customer; 
        $data['quarry'] = $request->quarry; 
        $data['purchase'] = $request->purchase; 
        $data['setting'] = $request->setting; 
         
        
      // $data['created_at'] = \Carbon\Carbon::now();
        $data['updated_at'] = \Carbon\Carbon::now();
     
     
     
      
      $update = DB::table('admins')->where('id',$id)->update($data);
      if ($update) {
        $notification=array(
              'messege'=>'Employee Successfully Updated',
              'alert-type'=>'success'
               );
             return Redirect()->route('employee')->with($notification);
      }else{
        $notification=array(
              'messege'=>'Nothing TO Update',
              'alert-type'=>'success'
               );
             return Redirect()->route('employee')->with($notification);
  
      }
  
   }

    public function Deleteemployee($id){
      DB::table('admins')->where('id',$id)->delete();
      $notification=array(
          'messege'=>'Employee Deleted Successfully',
          'alert-type'=>'success'
           );
         return Redirect()->back()->with($notification);
      }
  

         public function accountsetting(){
            return view('admin.accountsetting');
         
         
             }

             
         public function profileedit(){
            return view('admin.profileedit');
         
         
             }
                          
         public function invoiceadd(){
            return view('admin.invoiceadd');
         
         
             }

                                       
         public function knowledgebase(){
          return view('admin.knowledgebase');
       
       
           }

           public function stocks(){
            return view('admin.stocks');
         
         
             }

             
         public function SiteSetting(){

            $setting = DB::table('sitesetting')->first();
            return view('admin.site_setting',compact('setting'));
          }
      
          public function UpdateSiteSetting(Request $request){
         
            $id = $request->id;
         
            $data = array();
            $data['phone_one'] = $request->phone1;
            $data['phone_two'] = $request->phone2;
            $data['email'] = $request->email;
            $data['site_name'] = $request->sitename;
            $data['facebook'] = $request->facebook;
            $data['youtube'] = $request->youtube;
            $data['instagram'] = $request->instagram;
            $data['address'] = $request->address ;
            $data['landmark'] = $request->landmark;
            $data['pincode'] = $request->pincode;
            $data['city'] = $request->city;
            
         
            DB::table('sitesetting')->where('id',$id)->update($data);
      
            $notification=array(
                     'messege'=>'Site Setting Updated Successfully',
                     'alert-type'=>'success'
                      );
                    return Redirect()->back()->with($notification); 
         
          }



          public function ChangePassword()
          {
              return view('admin.auth.passwordchange');
          }
      
          public function Update_pass(Request $request)
          {
            $password=Auth::user()->password;
            $oldpass=$request->oldpass;
            $newpass=$request->password;
            $confirm=$request->password_confirmation;
            if (Hash::check($oldpass,$password)) {
                 if ($newpass === $confirm) {
                            $user=Admin::find(Auth::id());
                            $user->password=Hash::make($request->password);
                            $user->save();
                            Auth::logout();  
                            $notification=array(
                              'messege'=>'Password Changed Successfully ! Now Login with Your New Password',
                              'alert-type'=>'success'
                               );
                             return Redirect()->route('admin.login')->with($notification); 
                       }else{
                           $notification=array(
                              'messege'=>'New password and Confirm Password not matched!',
                              'alert-type'=>'error'
                               );
                             return Redirect()->back()->with($notification);
                       }     
            }else{
              $notification=array(
                      'messege'=>'Old Password not matched!',
                      'alert-type'=>'error'
                       );
                     return Redirect()->back()->with($notification);
            }
          }
      
          public function logout()
          {
              Auth::logout();
                  $notification=array(
                      'messege'=>'Successfully Logout',
                      'alert-type'=>'success'
                       );
                   return Redirect()->route('admin.login')->with($notification);
          }

//gallery
public function gallery(){
        
  return view('admin.gallery');
  }

    // handle fetch all eamployees ajax request
public function galleryfetchall() {
$projec = Gallery::all();
$output = '';
if ($projec->count() > 0) {
$output .= '<table id="gallery_table" class="datatables-basic table table-hover-animation">
      <thead>
        <tr>
          <th>ID</th>
          <th>Avatar</th>
          <th>Title</th>
          <th>Category</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>';
foreach ($projec as $Project) {
  
  $output .= '<tr>
          <td>' . $Project->id . '</td>
          <td><img src="/storage/images/' . $Project->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
          <td>' . $Project->title . '</td>
          <td>' . $Project->category . '</td>
          
          <td>
            <a href="#" id="' . $Project->id . '" class="text-success mx-1 GeditIcon"  data-toggle="modal" data-target="#editGalleryModal">
            <i class="fa fa-edit"></i></a>
            
            <a href="#" id="' . $Project->id . '" class="text-danger mx-1 GdeleteIcon">
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

public function gallerystore(Request $request) {
   
$file = $request->file('avatar');
$fileName = time() . '.' . $file->getClientOriginalExtension();

$resize = Image::make($file)->resize(366,467);
$resize->save('storage/images/'. $fileName);

    $projectData = [
     'title' => $request->title, 'category' => $request->category, 'avatar' => $fileName ];
     Gallery::create($projectData);

    return response()->json([
      'status' => 200,
    ]);

  }

// handle edit an employee ajax request
public function galleryedit(Request $request) {
$id = $request->id;
$project = Gallery::find($id);
return response()->json($project);
}


// handle update an employee ajax request
public function galleryupdate(Request $request) {
$fileName = '';

$project = Gallery::find($request->gallery_id);
  
if ($request->hasFile('avatar')) {

$file = $request->file('avatar');
$fileName = time() . '.' . $file->getClientOriginalExtension();
 
$resize = Image::make($file)->resize(366,467);
$resize->save('storage/images/'. $fileName);

if ($project->avatar) {
  Storage::delete('public/images/' . $project->avatar);
}
} else {
$fileName = $request->project_avatar;
}

  $projectData = ['title' => $request->title, 'category' => $request->category, 'avatar' => $fileName ];

$project->update($projectData);
return response()->json([
'status' => 200,
]);
}


public function gallerydelete(Request $request) {
$id = $request->id;
$cus = Gallery::find($id);
  Gallery::destroy($id);
// if (Storage::delete('/storage/images/' . $cus->avatar)) {
// 	Roughblock::destroy($id);
// }
}


//Project
public function project(){
        
  return view('admin.project');
  }

    // handle fetch all eamployees ajax request
public function projectfetchall() {
$projec = Project::all();
$output = '';
if ($projec->count() > 0) {
$output .= '<table id="gallery_table" class="datatables-basic table table-hover-animation">
      <thead>
        <tr>
          <th>ID</th>
          <th>Avatar</th>
          <th>Title</th>
          <th>Category</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>';
foreach ($projec as $Project) {
  
  $output .= '<tr>
          <td>' . $Project->id . '</td>
          <td><img src="/storage/images/' . $Project->avatar . '" width="50" class="img-thumbnail rounded-circle"></td>
          <td>' . $Project->title . '</td>
          <td>' . $Project->category . '</td>
          
          <td>
            <a href="#" id="' . $Project->id . '" class="text-success mx-1 GeditIcon"  data-toggle="modal" data-target="#editGalleryModal">
            <i class="fa fa-edit"></i></a>
            
            <a href="#" id="' . $Project->id . '" class="text-danger mx-1 GdeleteIcon">
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


public function projectstore(Request $request)
{
    $file = $request->file('avatar');
    $fileName = time() . '.' . $file->getClientOriginalExtension();

    // Save the image without resizing
    $file->move('storage/images/', $fileName);

    $projectData = [
        'title' => $request->title,
        'category' => $request->category,
        'avatar' => $fileName,
    ];

    Project::create($projectData);

    return response()->json([
        'status' => 200,
    ]);
}


// handle edit an employee ajax request
public function projectedit(Request $request) {
$id = $request->id;
$project = Project::find($id);
return response()->json($project);
}

public function projectupdate(Request $request, $category)
{
    $project = Project::where('category', $category)->first();
    $category = $request->category;

    if (!$project) {
        return response()->json([
            'status' => 404,
            'message' => 'Project not found',
        ], 404);
    }

    $fileName = $request->hasFile('avatar')
        ? time() . '.' . $request->file('avatar')->getClientOriginalExtension()
        : $project->avatar;

    if ($request->hasFile('avatar')) {
        $request->file('avatar')->move('storage/images/', $fileName);
    }

    $projectData = [
        'title' => $request->title,
        'category' => $category,
        'avatar' => $fileName,
    ];

    $project->update($projectData);

    return response()->json($project);
}



public function projectdelete(Request $request) {
$id = $request->id;
$cus = Project::find($id);
  Project::destroy($id);
// if (Storage::delete('/storage/images/' . $cus->avatar)) {
// 	Roughblock::destroy($id);
// }
}



        }
