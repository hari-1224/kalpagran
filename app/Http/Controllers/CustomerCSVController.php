<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 
use App\Exports\CustomersExport;
 
use App\Imports\CustomersImport;
 
use Maatwebsite\Excel\Facades\Excel;
 
use App\Models\Customer;

class CustomerCSVController extends Controller
{
    

    public function index()
    {
       return view('customers');
    }
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function importExcelCSV(Request $request) 
    {
        $validatedData = $request->validate([
 
           'file' => 'required',
 
        ]);
 
        Excel::import(new CustomersImport,$request->file('file'));
 
            
        return redirect('customer-excel-csv-file')->with('status', 'The file has been excel/csv imported to database in laravel 8');
    }
 
    /**
    * @return \Illuminate\Support\Collection
    */
    public function exportExcelCSV($slug) 
    {
        return Excel::download(new CustomersExport, 'users.'.$slug);
    }
}
