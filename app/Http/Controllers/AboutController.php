<?php

namespace App\Http\Controllers;

use App\Models\HomeAbout;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function homeAbout()
    {
        $abouts = HomeAbout::latest() -> get();
        return view('admin.about.index', compact('abouts'));
    }
    // add about
    public function addAbout()
    {
        return view('admin.about.create');
    }
    // store about
    public function storeAbout(Request $request)
    {
       HomeAbout::create([
           'title'      => $request -> title,
           'short_desc'      => $request -> short_desc,
           'long_desc'      => $request -> long_desc
       ]);
       return redirect() -> route('home.about') -> with('success', 'About Us added successful');
    }
    //edit about
    public function editAbout($id)
    {
        $abouts = HomeAbout::find($id);
        return view('admin.about.edit', compact('abouts'));
    }
    // update about us section
    public function updateAbout(Request $request )
    {
        $id = $request -> id;
        HomeAbout::find($id) -> update([
            'title'      => $request -> title,
            'short_desc'      => $request -> short_desc,
            'long_desc'      => $request -> long_desc
        ]);
        return redirect() -> back() -> with('success', 'About Us updated successful');
    }
    // delete about 
    public function deleteAbout($id)
    {
        $abouts = HomeAbout::find($id);
        $abouts -> delete();
        return redirect() -> back() -> with('success', 'About Us deleted successful');
    }
}
