<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoughblockController;
use App\Http\Controllers\QuarryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\QCuttingController;
use App\Http\Controllers\StockdtlController;
use App\Http\Controllers\QpaymentsController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BlockEntryController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\PolishingController;
use App\Http\Controllers\DailyReportController;
use App\Http\Controllers\EpoxyController;
use App\Http\Controllers\DispatchController;
use App\Http\Controllers\FinishedController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\getintouchController;
use App\Http\Controllers\CustomerCSVController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('pages.test');
});
// Route::get('/admin/login,', function () {
//     return view('home');
// });
Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('login');
Route::get('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Admin\LoginController::class, 'login']);

 Route::get('/products', [ProductController::class, 'productshow'])->name('products.index');
 Route::get('/products', [ProductController::class, 'search'])->name('products.search');

 Route::get('/get-product-image', [ProductController::class, 'getProductImage'])->name('get-product-image');

 Route::get('/show-all-images', [ProductController::class, 'showAllImages'])->name('show-All-Images');




 Route::post('/getintouch', [getintouchController::class, 'store'])->name('form.store');
 Route::post('/', [getintouchController::class, 'store'])->name('form.store');
 

 Route::get('/projects', function () {
    return view('projects');
 });

 Route::get('/getintouch', function () {
    return view('getintouch');
 });
Route::get('/home', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('layouts/iclude/logo', function () {
    return view('layouts/iclude/logo');
});
Route::get('/our-process', function () {
    return view('our-process');
});

Route::get('/quarry', function () {
    return view('quarry');
});
// Route::get('/products', function () {
//     return view('products');
// });
Route::get('admin/product', function () {
    return view('admin/product');
});

Route::get('quarry/{id}', [App\Http\Controllers\HomeController::class, 'quarryview'])->name('quarry');
Route::get('/contact', function () { return view('contact'); });
Route::post('/add_contact/store', [ContactController::class,'add_contact'])->name('add_contact.store');

Route::get('/fetch-projects/{category}', [HomeController::class, 'fetchProjectsByCategory']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/faq', [App\Http\Controllers\HomeController::class, 'faq'])->name('faq');
Route::get('/clients', [App\Http\Controllers\HomeController::class, 'clients'])->name('clients');
Route::get('/projects', [App\Http\Controllers\HomeController::class, 'projects'])->name('projects');
Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

//Admin Routes
Route::middleware(['auth:admin'])->group(function () {

Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

// Route::get('/save-atten', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

Route::post('/admin/save-atten', [AttendanceController::class, 'save_atten'])->name('save-atten');
Route::post('/admin/update-atten', [AttendanceController::class, 'update_atten'])->name('update-atten');

Route::get('/admin/attendance', [AttendanceController::class, 'index'])->name('attendance');
Route::get('/admin/quarryfetchall_emp', [AttendanceController::class, 'quarryfetchall'])->name('quarryfetchall_emp');
Route::get('/admin/quarryfetchall_emp_dynamic', [AttendanceController::class, 'quarryfetchall_emp_dynamic'])->name('quarryfetchall_emp_dynamic');

Route::get('/admin/add_attendance/{date?}', [AttendanceController::class, 'add_attendance'])->name('add_attendance');
Route::get('/admin/edit_attendance/{date}', [AttendanceController::class, 'edit_attendance'])->name('edit_attendance');
Route::get('/admin/checkedit', [AttendanceController::class, 'checkedit'])->name('checkedit');

Route::get('/admin/employee', [AdminController::class, 'employee'])->name('employee');
Route::get('/admin/employee-add', [AdminController::class, 'employeeAdd'])->name('employee-add');
Route::post('/admin/employee-add/store', [AdminController::class,'employee_store'])->name('employee_store.store');
Route::get('/admin/delete/employee/{id}', [AdminController::class, 'Deleteemployee']);
Route::get('/admin/employee/edit/{id}', [AdminController::class, 'employeeEdit']);
Route::post('/admin/employee/update/{id}', [AdminController::class, 'Updateemployee']);


// Route::get('/admin/rough-block', [App\Http\Controllers\AdminController::class, 'roughblock'])->name('roughblock');
// Route::post('/admin/rough-block-add/store', [App\Http\Controllers\AdminController::class,'roughblock_store'])->name('roughblock_store.store');

//Blockentry

Route::get('/admin/add-entry', [BlockEntryController::class, 'addentry']);
Route::get('/admin/m-blockentry', [BlockEntryController::class, 'blockentry']);
Route::post('/admin/m-blockentry', [BlockEntryController::class, 'addblockentry']);
Route::get('/admin/edit-blockentry/{id}', [BlockEntryController::class, 'blockentryEdit']);
Route::post('/admin/update-blockentry/{id}', [BlockEntryController::class, 'Updateblockentry']);


//Production

Route::get('/admin/m-production', [ProductionController::class, 'production']);
Route::get('/admin/add-production', [ProductionController::class, 'addproduction']);
Route::post('/admin/m-production', [ProductionController::class, 'addproduct']);
Route::get('/admin/edit-production/{id}', [ProductionController::class, 'productionEdit']);
Route::post('/admin/update-production/{id}', [ProductionController::class, 'Updateproduction']);



//Polishing

Route::get('/admin/m-polishing', [PolishingController::class, 'polishing']);
Route::get('/admin/add-polishing', [PolishingController::class, 'addpolishing']);
Route::post('/admin/m-polishing', [PolishingController::class, 'addpolish']);
Route::get('/admin/edit-polishing/{id}', [PolishingController::class, 'polishingEdit']);
Route::post('/admin/update-polishing/{id}', [PolishingController::class, 'Updatepolishing']);


//Dailyreport

Route::get('/admin/m-dailyreport', [DailyReportController::class, 'dailyreport']);
Route::get('/admin/add-dailyreport', [DailyReportController::class, 'adddailyreport']);
Route::post('/admin/m-dailyreport', [DailyReportController::class, 'addreport']);
Route::get('/admin/edit-dailyreport/{id}', [DailyReportController::class, 'dailyreportEdit']);
Route::post('/admin/update-dailyreport/{id}', [DailyReportController::class, 'Updatedailyreport']);


//Epoxy

Route::get('/admin/m-epoxy', [EpoxyController::class, 'epoxy']);
Route::get('/admin/add-epoxy', [EpoxyController::class, 'addepoxy']);
Route::post('/admin/m-epoxy', [EpoxyController::class, 'addepoxyrep']);
Route::get('/admin/edit-epoxy/{id}', [EpoxyController::class, 'epoxyEdit']);
Route::post('/admin/update-epoxy/{id}', [EpoxyController::class, 'Updateepoxy']);


//Dispatch

Route::get('/admin/m-dispatch', [DispatchController::class, 'dispatchrepo']);
Route::get('/admin/add-dispatch', [DispatchController::class, 'adddispatch']);
Route::post('/admin/m-dispatch', [DispatchController::class, 'adddispatched']);
Route::get('/admin/edit-dispatch/{id}', [DispatchController::class, 'dispatchEdit']);
Route::post('/admin/update-dispatch/{id}', [DispatchController::class, 'Updatedispatch']);


//Finished

Route::get('/admin/m-finished', [FinishedController::class, 'finished']);
Route::get('/admin/add-finished', [FinishedController::class, 'addfinished']);
Route::post('/admin/m-finished', [FinishedController::class, 'addfinishedgood']);
Route::get('/admin/edit-finished/{id}', [FinishedController::class, 'finishedEdit']);
Route::post('/admin/update-finished/{id}', [FinishedController::class, 'Updatefinished']);



//customer

Route::get('/admin/customer', [CustomerController::class, 'customer']);
Route::post('/admin/customerstore', [CustomerController::class, 'customerstore'])->name('customerstore');
Route::get('/admin/customerfetchall', [CustomerController::class, 'customerfetchall'])->name('customerfetchall');
Route::get('/admin/customeredit', [CustomerController::class, 'customeredit'])->name('customeredit');
Route::post('/admin/customerupdate', [CustomerController::class, 'customerupdate'])->name('customerupdate');
Route::delete('/admin/customerdelete', [CustomerController::class, 'customerdelete'])->name('customerdelete');



//customer excel Routes
Route::get('customer-excel-csv-file', [CustomerCSVController::class, 'index']);
Route::post('customer-import-excel-csv-file', [CustomerCSVController::class, 'importExcelCSV']);
Route::get('customer-export-excel-csv-file/{slug}', [CustomerCSVController::class, 'exportExcelCSV']);



//quarry block cutting block
Route::get('/admin/qbcblock', [QCuttingController::class, 'qbcblock']);
Route::post('/admin/qbcblockstore', [QCuttingController::class, 'qbcblockstore'])->name('qbcblockstore');
Route::get('/admin/qbcblockfetchall', [QCuttingController::class, 'qbcblockfetchall'])->name('qbcblockfetchall');
Route::get('/admin/qbcblockedit', [QCuttingController::class, 'qbcblockedit'])->name('qbcblockedit');
Route::post('/admin/qbcblockupdate', [QCuttingController::class, 'qbcblockupdate'])->name('qbcblockupdate');
Route::delete('/admin/qbcblockdelete', [QCuttingController::class, 'qbcblockdelete'])->name('qbcblockdelete');

//quarry block marking block
Route::get('/admin/qbmblock', [QCuttingController::class, 'qbmblock']);
Route::post('/admin/qbmblockstore', [QCuttingController::class, 'qbmblockstore'])->name('qbmblockstore');
Route::get('/admin/qbmblockfetchall', [QCuttingController::class, 'qbmblockfetchall'])->name('qbmblockfetchall');
Route::get('/admin/qbmblockedit', [QCuttingController::class, 'qbmblockedit'])->name('qbmblockedit');
Route::post('/admin/qbmblockupdate', [QCuttingController::class, 'qbmblockupdate'])->name('qbmblockupdate');
Route::delete('/admin/qbmblockdelete', [QCuttingController::class, 'qbmblockdelete'])->name('qbmblockdelete');

//quarry block dressing block
Route::get('/admin/qbdblock', [QCuttingController::class, 'qbdblock']);
Route::post('/admin/qbdblockstore', [QCuttingController::class, 'qbdblockstore'])->name('qbdblockstore');
Route::get('/admin/qbdblockfetchall', [QCuttingController::class, 'qbdblockfetchall'])->name('qbdblockfetchall');
Route::get('/admin/qbdblockedit', [QCuttingController::class, 'qbdblockedit'])->name('qbdblockedit');
Route::post('/admin/qbdblockupdate', [QCuttingController::class, 'qbdblockupdate'])->name('qbdblockupdate');
Route::delete('/admin/qbdblockdelete', [QCuttingController::class, 'qbdblockdelete'])->name('qbdblockdelete');
//quarry block dressing block

Route::get('/admin/qqpayment', [QpaymentsController::class, 'qqpayment']);
Route::post('/admin/qqpblockstore', [QpaymentsController::class, 'qqpblockstore'])->name('qqpblockstore');
Route::get('/admin/qqpblockfetchall', [QpaymentsController::class, 'qqpblockfetchall'])->name('qqpblockfetchall');
Route::get('/admin/qqpblockedit', [QpaymentsController::class, 'qqpblockedit'])->name('qqpblockedit');
Route::post('/admin/qqpblockupdate', [QpaymentsController::class, 'qqpblockupdate'])->name('qqpblockupdate');
Route::delete('/admin/qqpblockdelete', [QpaymentsController::class, 'qqpblockdelete'])->name('qqpblockdelete');
//invoice view quarry
Route::get('admin/quarry/invoice/{id}', [QpaymentsController::class, 'qqpblockinvoice'])->name('quarry.invoice');

//block rough block
Route::get('/admin/rblock', [RoughblockController::class, 'rblock']);
Route::post('/admin/rblockstore', [RoughblockController::class, 'rblockstore'])->name('rblockstore');
Route::get('/admin/rblockfetchall', [RoughblockController::class, 'rblockfetchall'])->name('rblockfetchall');
Route::get('/admin/rblockedit', [RoughblockController::class, 'rblockedit'])->name('rblockedit');
Route::post('/admin/rblockupdate', [RoughblockController::class, 'rblockupdate'])->name('rblockupdate');
Route::delete('/admin/rblockdelete', [RoughblockController::class, 'rblockdelete'])->name('rblockdelete');

//block dressing
Route::get('/admin/bdblock', [RoughblockController::class, 'bdblock']);
Route::post('/admin/bdblockstore', [RoughblockController::class, 'bdblockstore'])->name('bdblockstore');
Route::get('/admin/bdblockfetchall', [RoughblockController::class, 'bdblockfetchall'])->name('bdblockfetchall');
Route::get('/admin/bdblockedit', [RoughblockController::class, 'bdblockedit'])->name('bdblockedit');
Route::post('/admin/bdblockupdate', [RoughblockController::class, 'bdblockupdate'])->name('bdblockupdate');
Route::delete('/admin/bdblockdelete', [RoughblockController::class, 'bdblockdelete'])->name('bdblockdelete');


//block cutting

Route::get('/admin/bcblock', [RoughblockController::class, 'bcblock']);
Route::post('/admin/bcblockstore', [RoughblockController::class, 'bcblockstore'])->name('bcblockstore');
Route::get('/admin/bcblockfetchall', [RoughblockController::class, 'bcblockfetchall'])->name('bcblockfetchall');
Route::get('/admin/bcblockedit', [RoughblockController::class, 'bcblockedit'])->name('bcblockedit');
Route::post('/admin/bcblockupdate', [RoughblockController::class, 'bcblockupdate'])->name('bcblockupdate');
Route::delete('/admin/bcblockdelete', [RoughblockController::class, 'bcblockdelete'])->name('bcblockdelete');

//block polish

Route::get('/admin/bpblock', [RoughblockController::class, 'bpblock']);
Route::post('/admin/bpblockstore', [RoughblockController::class, 'bpblockstore'])->name('bpblockstore');
Route::get('/admin/bpblockfetchall', [RoughblockController::class, 'bpblockfetchall'])->name('bpblockfetchall');
Route::get('/admin/bpblockedit', [RoughblockController::class, 'bpblockedit'])->name('bpblockedit');
Route::post('/admin/bpblockupdate', [RoughblockController::class, 'bpblockupdate'])->name('bpblockupdate');
Route::delete('/admin/bpblockdelete', [RoughblockController::class, 'bpblockdelete'])->name('bpblockdelete');

Route::get('/admin/product', [ProductController::class, 'aproduct']);
Route::post('/admin/productstore', [ProductController::class, 'productstore'])->name('productstore');
Route::get('/admin/productfetchall', [ProductController::class, 'productfetchall'])->name('productfetchall');
Route::get('/admin/productedit', [ProductController::class, 'productedit'])->name('productedit');
Route::post('/admin/productupdate', [ProductController::class, 'productupdate'])->name('productupdate');
Route::delete('/admin/productdelete', [ProductController::class, 'productdelete'])->name('productdelete');
Route::get('/product', [ProductController::class, 'productshow'])->name('productshow');

Route::get('/admin/aquarry', [QuarryController::class, 'aquarry']);
Route::post('/admin/quarrystore', [QuarryController::class, 'quarrystore'])->name('quarrystore');
Route::get('/admin/quarryfetchall', [QuarryController::class, 'quarryfetchall'])->name('quarryfetchall');
Route::get('/admin/quarryedit', [QuarryController::class, 'quarryedit'])->name('quarryedit');
Route::post('/admin/quarryupdate', [QuarryController::class, 'quarryupdate'])->name('quarryupdate');
Route::delete('/admin/quarrydelete', [QuarryController::class, 'quarrydelete'])->name('quarrydelete');


Route::get('/admin/Change/Password', [AdminController::class, 'ChangePassword'])->name('admin.password.change');
Route::post('/admin/password/update', [AdminController::class, 'Update_pass'])->name('admin.password.update');
Route::get('admin/logout',  [AdminController::class, 'logout'])->name('admin.logout');
Route::get('admin/logout',  [AdminController::class, 'logout'])->name('logout');

Route::get('/admin/account-setting', [AdminController::class, 'accountsetting'])->name('accountsetting');
Route::get('/admin/profile-edit', [AdminController::class, 'profileedit'])->name('profileedit');
Route::get('/admin/invoice-add', [AdminController::class, 'invoiceadd'])->name('invoiceadd');
Route::get('/admin/knowledge-base', [AdminController::class, 'knowledgebase'])->name('knowledgebase');
Route::get('/admin/stocks', [AdminController::class, 'stocks'])->name('stocks');

Route::get('/admin/contact', [AdminController::class, 'Contact'])->name('contact');
Route::get('/admin/delete/contact/{id}', [AdminController::class, 'Deletecontact']);





//stock admin
Route::get('/admin/stock', [StockController::class, 'stock']);
Route::post('/admin/stockstore', [StockController::class, 'stockstore'])->name('stockstore');
Route::get('/admin/stockfetchall', [StockController::class, 'stockfetchall'])->name('stockfetchall');
Route::get('/admin/stockedit', [StockController::class, 'stockedit'])->name('stockedit');
Route::post('/admin/stockupdate', [StockController::class, 'stockupdate'])->name('stockupdate');
Route::delete('/admin/stockdelete', [StockController::class, 'stockdelete'])->name('stockdelete');
//purchase request
Route::get('/admin/stockdtedit', [StockController::class, 'stockdtedit'])->name('stockdtedit');
Route::post('/admin/stockdtupdate', [StockController::class, 'stockdtupdate'])->name('stockdtupdate');
//intake
Route::get('/admin/stockinedit', [StockController::class, 'stockinedit'])->name('stockinedit');
Route::post('/admin/stockinupdate', [StockController::class, 'stockinupdate'])->name('stockinupdate');


//stock detail admin
Route::get('/admin/stockdtl', [StockdtlController::class, 'stockdtl']);
Route::post('/admin/stockdtlstore', [StockdtlController::class, 'stockdtlstore'])->name('stockdtlstore');
Route::get('/admin/stockdtlfetchall', [StockdtlController::class, 'stockdtlfetchall'])->name('stockdtlfetchall');
Route::get('/admin/stockdtledit', [StockdtlController::class, 'stockdtledit'])->name('stockdtledit');
Route::post('/admin/stockdtlupdate', [StockdtlController::class, 'stockdtlupdate'])->name('stockdtlupdate');
Route::delete('/admin/stockdtldelete', [StockdtlController::class, 'stockdtldelete'])->name('stockdtldelete');

Route::get('admin/setting', [AdminController::class, 'SiteSetting'])->name('site.setting');
Route::post('sitesetting', [AdminController::class, 'UpdateSiteSetting'])->name('update.sitesetting');


Route::get('/admin/city', [CityController::class, 'city']);
Route::post('/admin/citystore', [CityController::class, 'citystore'])->name('citystore');
Route::get('/admin/cityfetchall', [CityController::class, 'cityfetchall'])->name('cityfetchall');
Route::get('/admin/cityedit', [CityController::class, 'cityedit'])->name('cityedit');
Route::post('/admin/cityupdate', [CityController::class, 'cityupdate'])->name('cityupdate');
Route::delete('/admin/citydelete', [CityController::class, 'citydelete'])->name('citydelete');



//fullcalender
Route::get('/admin/fullcalendareventmaster', [AppointmentController::class, 'index'])->name('index');
Route::post('/admin/fullcalendareventmaster/create', [AppointmentController::class, 'create'])->name('create');
Route::post('/admin/fullcalendareventmaster/update', [AppointmentController::class, 'update'])->name('update');
Route::post('/admin/fullcalendareventmaster/delete', [AppointmentController::class, 'destroy'])->name('destroy');

//gallery
Route::get('/admin/gallery', [AdminController::class, 'gallery']);
Route::post('/admin/gallerystore', [AdminController::class, 'gallerystore'])->name('gallerystore');
Route::get('/admin/galleryfetchall', [AdminController::class, 'galleryfetchall'])->name('galleryfetchall');
Route::get('/admin/galleryedit', [AdminController::class, 'galleryedit'])->name('galleryedit');
Route::post('/admin/galleryupdate', [AdminController::class, 'galleryupdate'])->name('galleryupdate');
Route::delete('/admin/gallerydelete', [AdminController::class, 'gallerydelete'])->name('gallerydelete');


Route::get('/admin/project', [AdminController::class, 'project']);
Route::post('/admin/projectstore', [AdminController::class, 'projectstore'])->name('projectstore');
Route::get('/admin/projectfetchall', [AdminController::class, 'projectfetchall'])->name('projectfetchall');
Route::get('/admin/projectedit', [AdminController::class, 'projectedit'])->name('projectedit');
Route::post('/admin/projectupdate', [AdminController::class, 'projectupdate'])->name('projectupdate');
Route::delete('/admin/projectdelete', [AdminController::class, 'projectdelete'])->name('projectdelete');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/quarry', [QuarryController::class, 'quarryshow'])->name('quarryshow');
