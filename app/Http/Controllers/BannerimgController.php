<?php

namespace App\Http\Controllers;

use App\Models\Bannerimg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerimgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bannerimg = Bannerimg::all();
        return view('backend.carousselB',compact('bannerimg'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bannerimg = new Bannerimg();
        $bannerimg->src = $request->file('src')->hashName();
        $bannerimg->save();
        $request->file('src')->storePublicly('img','public');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bannerimg  $bannerimg
     * @return \Illuminate\Http\Response
     */
    public function show(Bannerimg $bannerimg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bannerimg  $bannerimg
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bannerimg = Bannerimg::find($id);
        return view('backend.carousselBE',compact('bannerimg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bannerimg  $bannerimg
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $bannerimg = Bannerimg::find($id);
        Storage::disk('public')->delete('img/'.$bannerimg->src);
        $bannerimg->src = $request->file('src')->hashName();

        $bannerimg->save();
        $request->file('src')->storePublicly('img','public');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bannerimg  $bannerimg
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Bannerimg::find($id);
        $delete->delete();
        Storage::disk('public')->delete('img/'.$delete->src);
        return redirect()->back();
    }
}
