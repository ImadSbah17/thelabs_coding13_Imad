<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
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
        $testimonial = Testimonial::all();
        return view('backend.testimonialB_HOME',compact('testimonial')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial->temoignage = $request->temoignage;
        $testimonial->nom = $request->nom;
        $testimonial->prenom = $request->prenom;
        $testimonial->fonction = $request->fonction;
        $testimonial->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('img/avatar', 'public'); 

        $testimonial->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('backend.testimonialBE_HOME',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->temoignage = $request->temoignage;
        $testimonial->nom = $request->nom;
        $testimonial->prenom = $request->prenom;
        $testimonial->fonction = $request->fonction;
        $testimonial->src = $request->file('src')->hashName();
        $request->file('src')->storePublicly('img/avatar', 'public'); 

        $testimonial->save();

        return redirect()->back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        return redirect()->back();
    }
}
