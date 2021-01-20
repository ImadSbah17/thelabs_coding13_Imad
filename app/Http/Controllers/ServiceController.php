<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Homelabs;
use App\Models\Service;
use App\Models\Servicerapide;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        $serviceleft = Service::orderBy('id','desc')->take(3)->get();
        $serviceright = Service::orderBy('id','desc')->skip(3)->take(3)->get();
        $service = Servicerapide::all();
    
        
        return view('pages.services',compact('banner','datas','serviceleft','serviceright','service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Servicerapide::find($id);
        return view('backend.serviceBE_SERVICE',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $service = Servicerapide::find($id);
        $service->titre = $request->titre;
        $service->bouton = $request->bouton;

        $service->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
