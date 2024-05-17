<?php

namespace App\Http\Controllers;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\aboutcompany;

use Illuminate\Support\Facades\DB;
use Morilog\Jalali\Jalalian;
use RealRashid\SweetAlert\SweetAlertServiceProvider;
use Illuminate\Support\Facades\Storage;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


   
     public function index()
    {
        
        $menus = menu::orderBy('id', 'DESC')->get();
        
        
        return view('menu' , ['menu'=>$menus]);
        
    }
  
   
  
 
}

