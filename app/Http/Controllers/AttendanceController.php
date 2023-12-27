<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\City;
use App\Models\Gallery;
use App\Models\Customer;
use App\Models\Attendance;
// use App\Models\Admin;
use Auth;
use Storage;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;
use Redirect, Response, DB, Config;
use Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;

use RealRashid\SweetAlert\Facades\Alert;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
        //
        $city = Attendance::all();
        return view('admin.attendance', compact('city'));
        // return view('admin.attendance',compact('employee'));
        
    }
    public function add_attendance($date)
    {

        $matchThese = ['date' => $date];
        // $date=date('Y-m-d');
        $emp = Attendance::where($matchThese)->count();
        //         print_r($date);
        // dd($emp==0);
        // print_r($emp);
        if ($emp == 0)
        {
            //  // return 'false';
            

            $emp = Admin::where('role', '!=', '1')->get();
            // dd($emp);
            return view('admin.addattendance', compact('emp'));
        }
        else
        {

            return redirect()
                ->route('edit_attendance', ['date' => $date]);

        }

        //
        // return view('admin.attendance',compact('employee'));
        
    }
    public function edit_attendance($date)
    {
        //
        $matchThese = ['date' => $date];

        // $emp = Attendance::where($matchThese)->get();
        $emp = Attendance::join('admins', 'admins.emp_id', '=', 'attadence.emp_id')->where('attadence.date', $date)->where('admins.role', '!=', '1')
            ->get(['attadence.*', 'admins.name', 'admins.email', 'admins.role']);

        // if($emp->count()){
        return view('admin.edit_attendance', compact('emp'));

        // }
        

        
    }
    public function checkedit(Request $request)
    {
        //
        $matchThese = ['date' => $request->date];

        $emp = Attendance::where($matchThese)->count();
        // dd($emp>0);
        // print_r($emp);
        if ($emp > 0)
        {
            return 'true';

        }
        else
        {
            return 'false';
        }

        // return view('admin.attendance',compact('employee'));
        
    }

    public function quarryfetchall()
    {
        // 		$quarr = Attendance::all();
        // print_r(Carbon::now()->format('Y-m-d'));
        // exit();
        $quarr_all = Attendance::join('admins', 'admins.emp_id', '=', 'attadence.emp_id')->where('date', Carbon::now()
            ->format('Y-m-d'))
            ->get(['attadence.*', 'admins.name','admins.role']);
        $quarr = $quarr_all->where('attadence_status', 1);
        $quarr_absent = $quarr_all->where('attadence_status', 0);
        // dd($quarr);
        $output = '';
        if ($quarr->count() > 0)
        {
            $output .= '<table id="quarry_table" class="datatables-basic table">
            <thead>
              <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Status</th>
              

              </tr>
            </thead>
            <tbody>';
            foreach ($quarr as $quarry)
            {
                if ($quarry->attadence_status == 1)
                {
                    $status = '<button class="btn-icon btn btn-success btn-round btn-sm btn-toggle-sidebar" >
                    <span class="align-middle">Present</span>
                </button>';
                }
                else
                {
                    $status = '<button class="btn-icon btn btn-danger btn-round btn-sm btn-toggle-sidebar">
                    <span class="align-middle">Absent</span>
                </button>';
                }
                if ($quarry->role == 2)
                {
                    $role = '<span>Staff</span>';
                }
                elseif($quarry->role == 3)
                {
                    $role = '<span>Employee</span>';
                }else{
                    $role='';
                }
                $output .= '<tr>
                 <td>' . $quarry->emp_id . '</td>
                <td>' . $quarry->name . '</td>
                <td>' . $role . '</td>
                <td>' . $status . '</td>
                

             

               
              </tr>';
            }
            $output .= '</tbody></table>';
            // 			echo $output;
            
        }
        else
        {
            $output = '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
        $output_absnet = '';
        if ($quarr_absent->count() > 0)
        {
            $output_absnet .= '<table id="quarry_table_absent" class="datatables-basic table">
            <thead>
              <tr>
               
                <th>Employee ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Status</th>


              </tr>
            </thead>
            <tbody>';
            foreach ($quarr_absent as $quarry)
            {
                if ($quarry->attadence_status == 1)
                {
                    $status = '<button class="btn-icon btn btn-success btn-round btn-sm btn-toggle-sidebar" >
                    <span class="align-middle">Present</span>
                </button>';
                }
                else
                {
                    $status = '<button class="btn-icon btn btn-danger btn-round btn-sm btn-toggle-sidebar">
                    <span class="align-middle">Absent</span>
                </button>';
                }
                if ($quarry->role == 2)
                {
                    $role = '<span>Staff</span>';
                }
                elseif($quarry->role == 3)
                {
                    $role = '<span>Employee</span>';
                }else{
                    $role='';
                }
                $output_absnet .= '<tr>
                 <td>' . $quarry->emp_id . '</td>
                <td>' . $quarry->name . '</td>
                <td>' .$role . '</td>
                <td>' . $status . '</td>
                

              </tr>';
            }
            $output_absnet .= '</tbody></table>';
            // 			echo $output;
            
        }
        else
        {
            $output_absnet = '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
        $res = array(
            'res1' => $output,
            'res2' => $output_absnet
        );
        echo json_encode($res);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function quarryfetchall_emp_dynamic(Request $request)
    {
        $matchThese = ['date' => $request->date];

        $quarr_all = Attendance::join('admins', 'admins.emp_id', '=', 'attadence.emp_id')->where($matchThese)->get(['attadence.*', 'admins.name','admins.role']);

        // 		$quarr_all = Attendance::where('date',Carbon::now()->format('Y-m-d'))->get();
        $quarr = $quarr_all->where('attadence_status', 1);
        $quarr_absent = $quarr_all->where('attadence_status', 0);
        // dd($quarr);
        $output = '';
        if ($quarr->count() > 0)
        {
            $output .= '<table id="quarry_table" class="datatables-basic table">
            <thead>
              <tr>
                
                <th>Employee ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Status</th>

              </tr>
            </thead>
            <tbody>';
            foreach ($quarr as $quarry)
            {
                if ($quarry->attadence_status == 1)
                {
                    $status = '<button class="btn-icon btn btn-success btn-round btn-sm btn-toggle-sidebar" >
                    <span class="align-middle">Present</span>
                </button>';
                }
                else
                {
                    $status = '<button class="btn-icon btn btn-danger btn-round btn-sm btn-toggle-sidebar">
                    <span class="align-middle">Absent</span>
                </button>';
                }
                if ($quarry->role == 2)
                {
                    $role = '<span>Staff</span>';
                }
                elseif($quarry->role == 3)
                {
                    $role = '<span>Employee</span>';
                }else{
                    $role='';
                }
                $output .= '<tr>
                <td>' . $quarry->emp_id . '</td>
                <td>' . $quarry->name . '</td>
                <td>' . $role . '</td>
                <td>' . $status . '</td>
                
                
                

             

               
              </tr>';
            }
            $output .= '</tbody></table>';
            // 			echo $output;
            
        }
        else
        {
            $output = '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
        $output_absnet = '';
        if ($quarr_absent->count() > 0)
        {
            $output_absnet .= '<table id="quarry_table_absent" class="datatables-basic table">
            <thead>
              <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Status</th>

              </tr>
            </thead>
            <tbody>';
            foreach ($quarr_absent as $quarry)
            {
                if ($quarry->attadence_status == 1)
                {
                    $status = '<button class="btn-icon btn btn-success btn-round btn-sm btn-toggle-sidebar" >
                    <span class="align-middle">Present</span>
                </button>';
                }
                else
                {
                    $status = '<button class="btn-icon btn btn-danger btn-round btn-sm btn-toggle-sidebar">
                    <span class="align-middle">Absent</span>
                </button>';
                }
                if ($quarry->role == 2)
                {
                    $role = '<span>Staff</span>';
                }
                elseif($quarry->role == 3)
                {
                    $role = '<span>Employee</span>';
                }else{
                    $role='';
                }
                $output_absnet .= '<tr>
                <td>' . $quarry->emp_id . '</td>
                <td>' . $quarry->name . '</td>
                <td>' . $role . '</td>
                <td>' . $status . '</td>
                
                

             

               
              </tr>';
            }
            $output_absnet .= '</tbody></table>';
            // 			echo $output;
            
        }
        else
        {
            $output_absnet = '<h1 class="text-center text-secondary my-5">No record present in the database!</h1>';
        }
        $res = array(
            'res1' => $output,
            'res2' => $output_absnet
        );
        echo json_encode($res);

    }

    public function save_atten(Request $request)
    {
        // dd($request->all());
        //
        //  $matchThese = ['role' => '3'];
        $emp = Admin::where('role', '!=', '1')->pluck('emp_id')
            ->toArray();
        $from_form = $request->emp_id;
        $emp_id_created = Auth::user()->emp_id;
        $name_created = Auth::user()->name;
        foreach ($emp as $val)
        {
            // print_r($val);
            if (isset($from_form))
            {
                if (in_array($val, $from_form))
                {
                    //   echo "Match found";
                    Attendance::create(['emp_id' => $val, 'attadence_status' => 1, 'date' => $request->date, 'created_by' => $name_created . '-' . $emp_id_created, ]);
                }
                else
                {
                    //   echo "Match not found";
                    Attendance::create(['emp_id' => $val, 'attadence_status' => 0, 'date' => $request->date, 'created_by' => $name_created . '-' . $emp_id_created, ]);
                }
            }
            else
            {
                Attendance::create(['emp_id' => $val, 'attadence_status' => 0, 'date' => $request->date, 'created_by' => $name_created . '-' . $emp_id_created, ]);
            }

        }
        return redirect()->route('attendance');

        // dd($request->emp_id);
        
    }

    public function update_atten(Request $request)
    {
        // dd($request->all());
        //
        // Attendance::where('date', $request->date)->delete();
        //  $matchThese = ['role' => '3'];
        $emp = Admin::where('role', '!=', '1')->pluck('emp_id')
            ->toArray();
        $from_form = $request->emp_id;
        // dd($from_form);
        // $emp_id=implode(',',$from_form);
        $users = Attendance::where('date', $request->date)
            ->whereIn('emp_id', $from_form)->update(['attadence_status' => '1']);
        $users = Attendance::whereNotIn('emp_id', $from_form)->where('date', $request->date)
            ->update(['attadence_status' => '0']);

        // dd($users);
        //         $emp_id_created=Auth::user()->emp_id;
        //         $name_created=Auth::user()->name;
        // foreach($emp as $val){
        //                 // print_r($val);
        //                 if(isset($from_form)){
        //                               if (in_array($val, $from_form))
        //                               {
        //                             //   echo "Match found";
        //                             Attendance::create([
        //                                 'emp_id'=>$val,
        //                                 'attadence_status'=>1,
        //                                 'date'=>$request->date,
        //                                 'created_by'=>$name_created.'-'.$emp_id_created,
        //                                 ]);
        //                               }
        //                             else
        //                               {
        //                             //   echo "Match not found";
        //                              Attendance::create([
        //                                 'emp_id'=>$val,
        //                                 'attadence_status'=>0,
        //                                 'date'=>$request->date,
        //                                 'created_by'=>$name_created.'-'.$emp_id_created,
        //                                 ]);
        //                               }
        //                 }else{
        //                       Attendance::create([
        //                                 'emp_id'=>$val,
        //                                 'attadence_status'=>0,
        //                                 'date'=>$request->date,
        //                                 'created_by'=>$name_created.'-'.$emp_id_created,
        //                                 ]);
        //                 }
        //             }
        return redirect()
            ->route('attendance');

        // dd($request->emp_id);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    }
}

