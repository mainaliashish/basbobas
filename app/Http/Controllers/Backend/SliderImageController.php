<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;


class SliderImageController extends Controller
{
    public function sliderImage()
    {
      $active_slider = "active";
      $title = 'Admin - Slider Image';
      return view('backend.sliders.index', compact('active_slider', 'title'))
              ->with('sliders', Slider::paginate(8));
    }

    public function createImage()
    {
      $active_slider = "active";
      $title = 'Admin - Slider Image';
      return view('backend.sliders.create', compact('active_slider', 'title'));   
    }

    public function storeImage(CreateSliderRequest $request)
    {
        $slider = new Slider;

        $input = $request->only(['slider_title', 'slider_description', 'is_featured']);
        
        if($request->is_featured) {
          $input['is_featured'] = 1;
        } else {
          $input['is_featured'] = 0;
        }
        $image = $request->file('slider_image');
        
        if($image) {
            $input['slider_image'] = uploadImage($image, 1920, 900);
        }
        $slider = $slider->create($input);

        if($slider) {
           session()->flash('success', 'Slider added Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.sliders');
        
    }

    public function showImage($id)
    {
      $active_slider = "active";

      $slider = Slider::findOrFail($id);
      return view('backend.sliders.show')
              ->with('slider', $slider)
              ->with('active_slider', $active_slider);
    }

 public function editImage($id)
    {
      $active_sliders = 'active';
      $slider = slider::findOrFail($id);
   
      return view('backend.sliders.create')
            ->with('slider', $slider)
              ->with('active_sliders', $active_sliders);

    }

    public function updateImage(UpdateSliderRequest $request, $id)
    {
        // dd($input['is_featured']);
        $slider = Slider::findOrFail($id);

        $input = $request->only(['slider_title', 'slider_description', 'is_featured']);
        
        if($request->is_featured) {
          $input['is_featured'] = 1;
        } else {
          $input['is_featured'] = 0;
        }
        $image = $request->file('slider_image');
        
        $input['slider_image'] = updateNewImageOrKeepOld($image, $slider->slider_image, 1920, 900);
     
        $result = $slider->update($input);

        if($result) {
             session()->flash('success', 'Slider Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.sliders');
    }

    public function destroyImage($id)
    {
      $slider = Slider::findOrFail($id);
      $result = $slider->delete();
      
      if($result) {
             session()->flash('success', 'Slider deleted Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.sliders');
    }

}
