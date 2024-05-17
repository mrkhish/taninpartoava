<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Morilog\Jalali\Jalalian;
use RealRashid\SweetAlert\SweetAlertServiceProvider;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductController extends Controller
{
    public function sluggable(): array{
return [
    'slug' =>[
               'source' => 'title'
    ]
    ];
}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ProductLists = products::orderBy('id', 'DESC')->get();
       // $imageUrlProduct=Storage::url('public/media');
        
        return view('product.product' , compact('ProductLists'));
    }

    /**
     * Show the form for creating a new resource.
     */
     public function detail(Request $request ,$slug)
    {
       
           $detail=products::where('slug',$slug)->firstOrFail();
           $products = products::orderBy('id', 'DESC')->where('slug' ,'!=', $slug)->take(5)->get();
          // $imageUrlProduct=Storage::url('');
          // $Date = $news-> createDate;
          // $jDate = jdate($Date)->format('Y-m-d');
         
        

           return view('product.detail',  compact('detail','products'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(products $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(products $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, products $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(products $product)
    {
        //
    }
}
