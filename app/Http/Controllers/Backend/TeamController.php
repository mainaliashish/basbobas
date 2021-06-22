<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UpdateTeamRequest;

use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $active_teams = "active";
        $title = "Admin - Teams";
        return view('backend.teams.index', compact('active_teams', 'title'))
                ->with('teams', Team::all());
    }

    public function create()
    {
        $active_teams = "active";

        return view('backend.teams.create', compact('active_teams'));
    }

    public function store(CreateTeamRequest $request)
    {
        $team = new Team;

        $input = $request->only(['team_name','team_contact', 'team_address']);
        $image = $request->file('team_image');
      
        if($image) {
            $input['team_image'] = uploadImage($image,260,348);
        }
        
        $team = $team->create($input);

        if($team) {
           session()->flash('success', 'Team added Successfully!');
        } else {
           session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.teams');
    }

    public function show($id)
    {
        $active_teams = "active";
        $team = Team::findOrFail($id);
        return view('backend.teams.show')
                ->with('team', $team)
                ->with('active_teams', $active_teams);
    }

    public function edit($id)
    {
        // dd('Hi');
        $active_teams = "active";
        $team = Team::findOrFail($id);
        return view('backend.teams.create')
                ->with('team', $team)
                ->with('active_teams', $active_teams);


    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $input = $request->only(['team_name', 'team_address', 'team_contact']);
        
        $image = $request->file('team_image');
        
        $input['team_image'] = updateNewImageOrKeepOld($image, $team->team_image,260,348);
        $result = $team->update($input);

        if($result) {
             session()->flash('success', 'Team Updated Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.teams');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $result = $team->delete();
              
        if($result) {
             session()->flash('success', 'Team member deleted Successfully!');
        } else {
             session()->flash('error', 'Something went wrong.');
        }

        return redirect() -> route('backend.teams');
    }
}
