<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Quarry;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    
    public function gallery(){
        $gallery =	DB::table('galleries')->orderBy('id', 'desc')->paginate(9);
        
        $projectcount =	DB::table('galleries')->count();
        return view('gallery', compact('gallery'));
        }
    public function faq()
    {
        return view('faq');
    }
     public function clients()
    {
        return view('clients');
    }
     public function projects()
    {
        $project =	DB::table('projects')->orderBy('id', 'desc')->paginate(9);
        $projectcount =	DB::table('projects')->count();
        return view('projects', compact('project'));
    }

    public function fetchProjectsByCategory($category){
    $projects = Project::where('category', $category)->get();

    if (!$projects) {
        return response()->json([
            'status' => 404,
            'message' => 'Projects not found',
        ], 404);
    }

    return response()->json($projects);
}

    
      
    public function services()
    {
        return view('services');
    }

    public function quarry()
    {
        return view('quarry');
    }
    public function quarryview($id){
        $quarry =	DB::table('quarries')->where('quarries.id',$id)->first();
        $quarryy =	DB::table('quarries')->get();
        
        return view('quarry-detail', compact('quarry', 'quarryy'));
    }


  
}
