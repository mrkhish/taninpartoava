<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Morilog\Jalali\Jalalian;
use RealRashid\SweetAlert\SweetAlertServiceProvider;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Questions = question::orderBy('id', 'DESC')->get();
      
        return view('questions' , compact('Questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(question $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(question $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, question $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(question $product)
    {
        //
    }
}
