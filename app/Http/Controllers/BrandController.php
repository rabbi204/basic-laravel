<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as Image;
use App\Models\Brand;
use App\Models\Multipic;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    // constructor
    public function __construct()
    {
        $this -> middleware('auth');
    }

    //for show brand page
    public function allBrand()
    {
        $brands = Brand::latest() -> paginate(5);
        return view('admin.brand.index', compact('brands'));
    }
    // add brand
    public function storeBrand(Request $request)
    {
        $validate = $request -> validate([
            'brand_name' => 'required|unique:brands|min:4',
            'brand_image' => 'required|mimes:jpg,jpeg,png'
        ],
        [
            'brand_name.required' => 'Please Input Brand Name',
            'brand_name.min' => 'Brand longer then 4 Chars'
        ]);

        $brand_image = $request -> file('brand_image');
        $name_gen = hexdec(uniqid()).'.'. $brand_image -> getClientOriginalExtension();
        Image::make($brand_image) -> resize(300,200) -> save('image/brand/'.$name_gen);
        $last_img = 'image/brand/'. $name_gen;



        // $name_gen = hexdec(uniqid());
        // $img_ext = strtolower($brand_image -> getClientOriginalExtension());
        // $img_name = $name_gen.".". $img_ext;
        // $up_location = 'image/brand/';
        // $last_img = $up_location.$img_name;
        // $brand_image -> move($up_location,$img_name);

        Brand::create([
            'brand_name'  => $request -> brand_name,
            'brand_image'  => $last_img,
        ]);
        return redirect()-> back() -> with("success",'Brand Added Successful');
    }
    //brand edit
    public function editBrand($id)
    {
        // echo $id . "<br>";
        $brands = Brand::find($id);
        return view('admin.brand.edit', compact('brands'));
    }
    //update brand data
    public function updateBrand(Request $request, $id)
    {
        $validate = $request -> validate([
            'brand_name' => 'required|min:4'
        ],
        [
            'brand_name.required' => 'Please Input Brand Name',
            'brand_name.min' => 'Brand longer then 4 Chars'
        ]);


        $brand_image = $request -> file('brand_image');


        if($brand_image){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($brand_image -> getClientOriginalExtension());
            $img_name = $name_gen.".". $img_ext;
            $up_location = 'image/brand/';
            $last_img = $up_location.$img_name;
            $brand_image -> move($up_location,$img_name);

            $old_image = $request -> old_image;
            //delete old photo
            unlink($old_image);

            Brand::find($id) -> update([
                'brand_name'  => $request -> brand_name,
                'brand_image'  => $last_img,
            ]);
            return redirect()-> back() -> with("success",'Brand Updated Successful');
        }else{
            Brand::find($id) -> update([
                'brand_name'  => $request -> brand_name
            ]);
            return redirect()-> back() -> with("success",'Brand Updated Successful');
        }
    }
    //delete brand data
    public function deleteBrand($id)
    {
        //get data and delete old image
       $brand_data = Brand::find($id);
       $old_image = $brand_data -> brand_image;
       unlink($old_image);

       //delete data
       Brand::find($id) -> delete();
       return redirect()-> route('all.brand') -> with("success",'Brand data deleted Successful');
    }
    // multi image all method
    public function multiPicture()
    {
        $images = Multipic::all();
        return view('admin.multipic.index', compact('images'));
    }

    // add multiple image
    public function storeImage(Request $request)
    {
        $image = $request -> file('image');

        foreach( $image as $multi_img){
            $name_gen = hexdec(uniqid()).'.'. $multi_img -> getClientOriginalExtension();
            Image::make($multi_img) -> resize(300,300) -> save('image/multi/'.$name_gen);
            $last_img = 'image/multi/'. $name_gen;

            Multipic::create([
                'image'  => $last_img,
            ]);
        }


        return redirect()-> back() -> with("success",'Multi Pic Added Successful');

    }

}
