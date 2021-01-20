<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use App\Models\PresentationFoMyHome;
use Illuminate\Http\Request;

class PresentationFoMyHomeController extends Controller
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
        $presentation = PresentationFoMyHome::all();

        return view('backend.PresentationB_HOME',compact('presentation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $presentation = new PresentationFoMyHome();
        $presentation->texte = $request->texte;
        $presentation->textebis = $request->textebis;
        $presentation->bouton = $request->bouton;

        $presentation->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PresentationFoMyHome  $presentationFoMyHome
     * @return \Illuminate\Http\Response
     */
    public function show(PresentationFoMyHome $presentationFoMyHome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PresentationFoMyHome  $presentationFoMyHome
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $presentation = PresentationFoMyHome::find($id);
        return view('backend.PresentationBE_HOME',compact('presentation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PresentationFoMyHome  $presentationFoMyHome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $presentation = PresentationFoMyHome::find($id);
        $presentation->texte = $request->texte;
        $presentation->textebis = $request->textebis;
        $presentation->bouton = $request->bouton;

        $presentation->save();
        return redirect()->back(); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PresentationFoMyHome  $presentationFoMyHome
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $presentation = Presentation::find($id);
        $presentation->delete();
        return redirect()->back();
    }
}
