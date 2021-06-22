<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\CreateProjectRequest;
use App\Http\Requests\UpdateProjectRequest;


class ProjectController extends Controller
{

    public function index()
    {
      $active_projects = "active";
      $title = 'Admin - Projects';
      return view('backend.projects.index', compact('active_projects', 'title'))
                ->with('projects', Project::latest()->paginate(7));
    }

    public function show($id)
    {
      $active_projects = "active";
      $project = Project::findOrFail($id);
      return view('backend.projects.show')
              ->with('project', $project)
              ->with('active_projects', $active_projects);
    }

    public function create()
    {
      $active_projects = "active";
      return view('backend.projects.create', compact('active_projects'));
    }

    public function store(CreateProjectRequest $request)
    {
        $project = new Project();

        $input = $request->only(['project_title', 'project_description', 'project_location']);
        // dd($input);
        $input['project_description'] = preg_replace('/<span[^>]+\>/i', '', $input['project_description']);

        $image_one = $request->file('project_image_one');
        $image_two = $request->file('project_image_two');
        $image_three = $request->file('project_image_three');
          
        if($image_one OR $image_two OR $image_three) {
            $input['project_image_one'] = uploadImage($image_one, 870, 382);
            $input['project_image_two'] = uploadImage($image_two, 870, 382);
            $input['project_image_three'] = uploadImage($image_three, 870, 382);
        }

        $project = $project->create($input);

        if($project) {
           session()->flash('success', 'Project added Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.projects');
    }

    public function edit($id)
    {
      $active_projects = "active";
      $project = Project::findOrFail($id);
      return view('backend.projects.create')
              ->with('project', $project)
              ->with('active_projects', $active_projects);

    }

    public function update(UpdateProjectRequest $request, $id)
    {
      $project = Project::findOrFail($id);
      $input = $request->only(['project_title', 'project_location','project_description']);
      $input['project_description'] = preg_replace('/<span[^>]+\>/i', '', $input['project_description']);

      $image_one = $request->file('project_image_one');
      $image_two = $request->file('project_image_two');
      $image_three = $request->file('project_image_three');

      $input['project_image_one'] = updateNewImageOrKeepOld($image_one, $project->project_image_one, 870, 382);
      $input['project_image_two'] = updateNewImageOrKeepOld($image_two, $project->project_image_two, 870, 382);
      $input['project_image_three'] = updateNewImageOrKeepOld($image_three, $project->project_image_three, 870, 382);

      $result = $project->update($input);

        if($result) {
             session()->flash('success', 'Project Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.projects');

    }

    public function destroy($id)
    {
      $project = Project::findOrFail($id);
      $result = $project->delete();
      
      if($result) {
             session()->flash('success', 'Project deleted Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.projects');
    }
        

}