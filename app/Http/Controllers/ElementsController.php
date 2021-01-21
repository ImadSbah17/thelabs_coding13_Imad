<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Contact;
use App\Models\Elements;
use App\Models\Homelabs;
use Illuminate\Http\Request;

class ElementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Homelabs::all();
        $banner = Banner::all();
        $contact = Contact::all();
        return view('pages.elements',compact('datas','banner','contact'));
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
     * @param  \App\Models\Elements  $elements
     * @return \Illuminate\Http\Response
     */
    public function show(Elements $elements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Elements  $elements
     * @return \Illuminate\Http\Response
     */
    public function edit(Elements $elements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Elements  $elements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Elements $elements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Elements  $elements
     * @return \Illuminate\Http\Response
     */
    public function destroy(Elements $elements)
    {
        //
    }
}
