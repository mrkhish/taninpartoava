<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\aboutcompany;


use Illuminate\Support\Facades\DB;
use Morilog\Jalali\Jalalian;
use RealRashid\SweetAlert\SweetAlertServiceProvider;
use Illuminate\Support\Facades\Storage;
class ContactUsController extends Controller
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
        
        $abouts= aboutcompany::orderBy('id', 'DESC')->get();
        
        return view('contactus',compact('abouts'));
        
    }
   
 
}

