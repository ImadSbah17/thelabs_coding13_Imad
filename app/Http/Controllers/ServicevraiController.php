<?php

namespace App\Http\Controllers;

use App\Models\Servicevrai;
use Illuminate\Http\Request;

class ServicevraiController extends Controller
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
        $servicevrai = Servicevrai::all();
        return view('backend.serviceVraiB_HOME',compact('servicevrai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicevrai = new Servicevrai();
        $servicevrai->icon = $request->icon;
        $servicevrai->titre = $request->titre;
        $servicevrai->texte = $request->texte;

        $servicevrai->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicevrai  $servicevrai
     * @return \Illuminate\Http\Response
     */
    public function show(Servicevrai $servicevrai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicevrai  $servicevrai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicevrai = Servicevrai::find($id);
        return view('backend.serviceVraiBE_HOME',compact('servicevrai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicevrai  $servicevrai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $servicevrai = Servicevrai::find($id);
        $servicevrai->icon = $request->icon;
        $servicevrai->titre = $request->titre;
        $servicevrai->texte = $request->texte;

        $servicevrai->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicevrai  $servicevrai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicevrai = Servicevrai::find($id);
        $servicevrai->delete();
        return redirect()->back();
    }
}
