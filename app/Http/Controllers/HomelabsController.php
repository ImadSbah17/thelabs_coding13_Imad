<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Bannerimg;
use App\Models\Contacthome;
use App\Models\Homelabs;
use App\Models\PresentationFoMyHome;
use App\Models\Ready;
use App\Models\Service;
use App\Models\Servicevrai;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomelabsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //* c'est ici que je renvoi la page home *//
    public function index()
    { 
        $datas = Homelabs::all();
        $banner = Banner::all();
        $bannerimg = Bannerimg::all();
        $service = Service::all()->random(3);
        $presentation = PresentationFoMyHome::all();
        $testimonial = Testimonial::all();
        $servicevrai = Servicevrai::orderBy('id','desc')->paginate(9)
        ;
        $ready = Ready::all();
        $contacthome = Contacthome::all();
        $video = Video::all();

        // $titre = $presentation[0]->titre;
        // $before = Str::before($titre, '(');
        // $after = Str::after($titre,')');
        // $between = Str::between($titre, '(', ')');


        

        return view('pages.home_Labs',compact('datas','banner','bannerimg','service','presentation','testimonial','servicevrai','ready','contacthome','video'));
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
     * @param  \App\Models\Homelabs  $homelabs
     * @return \Illuminate\Http\Response
     */
    public function show(Homelabs $homelabs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homelabs  $homelabs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = Homelabs::find($id);
        return view('backend.homeBACK',compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homelabs  $homelabs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       $update = Homelabs::find($id); 

       $update->liens1 = $request->liens1;
       $update->liens2 = $request->liens2;
       $update->liens3 = $request->liens3;
       $update->liens4 = $request->liens4;

       $update->save();




       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homelabs  $homelabs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homelabs $homelabs)
    {
        //
    }
}
