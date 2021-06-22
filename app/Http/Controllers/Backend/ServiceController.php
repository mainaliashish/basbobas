<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Service;
use App\Http\Requests\CreateServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    public function index()
    {
      $active_services = "active";
      $title = 'Admin - Services';
      return view('backend.services.index', compact('active_services', 'title'))
              ->with('services', Service::paginate(8));
    }

    public function show($id)
    {
      $active_services = "active";

      $service = Service::findOrFail($id);
      return view('backend.services.show')
              ->with('service', $service)
              ->with('active_services', $active_services);
    }

    public function create()
    {
      $active_services = "active";

      return view('backend.services.create')
              ->with('active_services', $active_services);
  
    }

    public function store(CreateServiceRequest $request)
    {
        $service = new Service;

        $input = $request->only(['service_title', 'service_description']);
        $input['service_slug'] = Str::slug($input['service_title']);
        // dd($input);
        $input['service_description'] = preg_replace('/<span[^>]+\>/i', '', $input['service_description']);

        $image = $request->file('service_image');
        // dd($image);
      
        if($image) {
            $input['service_image'] = uploadImage($image, 870, 382);
        }
        
        $service = $service->create($input);

        if($service) {
           session()->flash('success', 'Service added Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.services');
        
    }

    public function edit($id)
    {
      $active_services = 'active';
      $service = Service::findOrFail($id);
      return view('backend.services.create')
            ->with('service', $service)
              ->with('active_services', $active_services);

    }

    public function update(UpdateServiceRequest $request, $id)
    {
        $service = Service::findOrFail($id);

        $input = $request->only(['service_title', 'service_description']);
        $input['service_slug'] = Str::slug($input['service_title']);
        $input['service_description'] = preg_replace('/<span[^>]+\>/i', '', $input['service_description']);
        // dd($test);
        $image = $request->file('service_image');
        
        $input['service_image'] = updateNewImageOrKeepOld($image, $service->service_image, 870, 382);
        // dd($input['service_image']);
        $result = $service->update($input);

        if($result) {
             session()->flash('success', 'Service Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.services');
    }

    public function destroy($id)
    {
      $service = Service::findOrFail($id);
      $result = $service->delete();
      
      if($result) {
             session()->flash('success', 'Service deleted Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.services');
    }
}