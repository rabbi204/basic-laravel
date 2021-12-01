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
            'desc'  => $request -> description,
            'image'  => $last_img,
        ]);
        return redirect()-> route('home.slider') -> with("success",'Slider Added Successful');
    }
    /**
     * Edit slider
     */
    public function editSlider($id)
    {
        $sliders = Slider::find($id);
        return view('admin.slider.edit', compact('sliders'));
    }
    /**
     *  update slider
     */
    public function updateSlider(Request $request, $id)
    {
        $sliders = Slider::find($id);

        $slider_img = $request -> file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($slider_img -> getClientOriginalExtension());
        $img_name = $name_gen.".". $img_ext;
        $up_location = 'image/slider/';
        $last_img = $up_location.$img_name;
        $slider_img -> move($up_location,$img_name);

        $data = $request -> old_image;
        unlink($data);

        //updatedata
        $sliders -> title = $request -> title;
        $sliders -> desc = $request -> desc;
        $sliders -> image =   $last_img;
        $sliders -> update();
        return redirect()-> back() -> with("success",'Slider Updated Successful');
    }

    /**
     *  slider delete
     */
    public function deleteSlider($id)
    {
        $slider_data = Slider::find($id);
        $old_image = $slider_data -> image;
        unlink($old_image);

        Slider::find($id) ->delete();
        return redirect()-> route('home.slider') -> with("success",'Slider deleted Successful');
    }




}
