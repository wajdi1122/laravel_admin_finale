<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;

class SponsorContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Sponsor=sponsor::all();
        
        return view ('admin.sponsors',compact('Sponsor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fo=new Sponsor();
        $fo->src=$request->src;
        $fo->alt=$request->alt;
        $fo->order=$request->order;
        $fo->save();
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fo=Sponsor::find($id);
        $fo->src=$request->src;
        $fo->alt=$request->alt;
        $fo->order=$request->order;
        $fo->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fo=Sponsor::find($id);
        $fo->delete();
        return back();
    }
}
