<?php

namespace App\Http\Controllers;

use App\Models\Contacthome;
use Illuminate\Http\Request;

class ContacthomeController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contacthome  $contacthome
     * @return \Illuminate\Http\Response
     */
    public function show(Contacthome $contacthome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contacthome  $contacthome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacthome = Contacthome::find($id);

        return view('backend.contactBE_HOME',compact('contacthome'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contacthome  $contacthome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contacthome = Contacthome::find($id);
        $contacthome->titre = $request->titre;
        $contacthome->texte = $request->texte;
        $contacthome->contact1 = $request->contact1;
        $contacthome->contact2 = $request->contact2;
        $contacthome->contact3 = $request->contact3;

        $contacthome->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contacthome  $contacthome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacthome $contacthome)
    {
        //
    }
}
