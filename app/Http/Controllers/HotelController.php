<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Http\Requests\StoreHotelRequest;
use App\Http\Requests\UpdateHotelRequest;
use Intervention\Image\Facades\Image;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( )
    {
        $hotels = Hotel::all();
        return view('home',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('crud');

        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHotelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHotelRequest $request)
    {
        $this->authorize('crud');

        $data = $request->validated();
        $imagepath = request('image')->store('image','public');

        $image = Image::make(public_path("storage/{$imagepath}"))->fit(960 , 540);
        $image->save();
        
        $imageArray = ['image' => $imagepath];
        
        Hotel::create(array_merge(
            $data,
            $imageArray,
        ));
        
        return redirect()->route('hotel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('show',compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        $this->authorize('crud');

        return view('edit',compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHotelRequest  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHotelRequest $request, Hotel $hotel)
    {
        $this->authorize('crud');

        $data = $request->validated();
        
        if(request('image'))
        {
            $imagepath = request('image')->store('image','public');
    
            $image = Image::make(public_path("storage/{$imagepath}"))->fit(960 , 540);
            $image->save();
            $imageArray = ['image' => $imagepath];
        }
        else{
            $imagepath = $hotel->image;
            $imageArray = ['image' => $imagepath];
        }
        
        $hotel->update(array_merge(
            $data,
            $imageArray,
        ));
        
        return redirect()->route('hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        $this->authorize('crud');

        $hotel->delete();

        return redirect()->route('hotel.index');
    }
}
