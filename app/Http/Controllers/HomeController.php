<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;

class HomeController extends Controller
{
    //slider for homepage
    public function homeSlider()
    {
        $sliders = Slider::latest() -> get();
        return view('admin.slider.index', compact('sliders'));
    }
    /**
     *  add slider
     */
    public function addSlider()
    {
        return view('admin.slider.create');
    }

    // store slider
    public function storeSlider(Request $request)
    {
        $Slider_image = $request -> file('image');
        $name_gen = hexdec(uniqid()).'.'. $Slider_image -> getClientOriginalExtension();
        Image::make($Slider_image) -> resize(1920,1088) -> save('image/slider/'.$name_gen);
        $last_img = 'image/slider/'. $name_gen;

        Slider::create([
            'title'  => $request -> title,
            'description'  => $request -> description,
            'image'  => $last_img,
        ]);
        return redirect()-> route('home.slider') -> with("success",'Slider Added Successful');
    }
}
