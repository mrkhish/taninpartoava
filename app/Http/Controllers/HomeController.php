<?php

namespace App\Http\Controllers;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Http\Request;
use App\Models\last_news_main;
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

public function sluggable(): array{
return [
    'slug' =>[
        
               'source' => 'title'
    ]
    ];
}
   
     public function index()
    {
        
        $news = last_news_main::orderBy('id', 'DESC')->get();
        $imageUrl=Storage::url('public/media');
         $abouts= aboutcompany::orderBy('id', 'DESC')->get();
        return view('main' , compact('news','imageUrl','abouts'));
        
    }
    public function detail(Request $request ,$slug)
    {
       
           $detail=last_news_main::where('slug',$slug)->firstOrFail();
           $news = last_news_main::orderBy('id', 'DESC')->where('slug' ,'!=', $slug)->take(5)->get();
            $abouts= aboutcompany::orderBy('id', 'DESC')->get();
           $imageUrl=Storage::url('');
          // $Date = $news-> createDate;
          // $jDate = jdate($Date)->format('Y-m-d');
         
        

           return view('news.detail',  compact('detail','news','imageUrl','abouts'));
    }
    public function Projects()
    {
         $projects = last_news_main::orderBy('id', 'DESC')->get();
        $imageUrl=Storage::url('public/media');
       $abouts= aboutcompany::orderBy('id', 'DESC')->get();
        return view('news.main' , compact('projects','imageUrl','abouts'));
         
    }
   
   
  
 
}
/*return view('home');*/
