<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Support\Facades\Session;

use auth;

class AboutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $active_about = "active";
        $title = 'Admin - Update About';
        // session()->flash('success', 'About Us updated Successfully!');
        return view('backend.about', compact('active_about', 'title'))->with('about', About::first());
    }

    public function createAbout(request $request)
    {
        //
    }

    public function updateAbout(UpdateAboutRequest $request)
    {
        // dd($request->all());
        $model = new About;
        $input = $request->all();

        $image = $request->file('image');
        
        if($image) {
            $input['company_logo'] = uploadImage($image, 180, 70);
        }

        $about_image = $request->file('about_image');
        
        if($about_image) {
            $input['company_about_image'] = uploadImage($about_image, 403, 448);
        }

        $banner_image = $request->file('banner_image');
        
        if($banner_image) {
            $input['banner_image'] = uploadImage($banner_image, 1920, 275);
        }
        
        $about = About::first();
        $about = $about->update($input);

        if($about) {
           session()->flash('success', 'About us updated Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.about');

    }
}