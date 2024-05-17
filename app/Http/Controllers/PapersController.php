<?php

namespace App\Http\Controllers;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use App\Models\papers;
use App\Models\aboutcompany;

use Illuminate\Support\Facades\DB;
use Morilog\Jalali\Jalalian;
use RealRashid\SweetAlert\SweetAlertServiceProvider;
use Illuminate\Support\Facades\Storage;
class PapersController extends Controller
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

public function sluggable(): array{
return [
    'slug' =>[
               'source' => 'title'
    ]
    ];
}
   
     public function index()
    {
        
        $news = papers::orderBy('id', 'DESC')->get();
        $imageUrl=Storage::url('public/media');
         $abouts= aboutcompany::orderBy('id', 'DESC')->get();
        return view('papers.main' , compact('news','imageUrl','abouts'));
        
    }
    public function detail(Request $request ,$slug)
    {
       
           $detail=papers::where('slug',$slug)->firstOrFail();
           $news = papers::orderBy('id', 'DESC')->where('slug' ,'!=', $slug)->take(5)->get();
            $abouts= aboutcompany::orderBy('id', 'DESC')->get();
           $imageUrl=Storage::url('');
          // $Date = $news-> createDate;
          // $jDate = jdate($Date)->format('Y-m-d');
         
        

           return view('papers.detail',  compact('detail','news','imageUrl','abouts'));
    }
    public function Papers()
    {
         $papers = papers::orderBy('id', 'DESC')->get();
        $imageUrl=Storage::url('public/media');
       $abouts= aboutcompany::orderBy('id', 'DESC')->get();
        return view('papers.main' , compact('papers','imageUrl','abouts'));
         
    }
   
   
  
 
}
/*return view('home');*/
