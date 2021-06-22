@extends('backend.layouts.base')
{{-- {{ dd($team) }} --}}
@section('main-content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Add Team</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Team</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- Main content -->
    <section class="content">
      
      <!-- Default box -->
      <div class="card">
        <div class="col-12 col-md-12 col-sm-12 center">
          @if($team ?? '')
		        {!! Form::model($team ?? '', ['method'=>'PATCH', 'route' => ['backend.teams.update', $team->id], 'files'=>true]) !!}
	      	@else
			    {!! Form::open(array('method'=>'POST','route' => 'backend.teams.store', 'files'=>true)) !!}
		      @endif
            <div class="form-group">
              {!! Form::label('team_name', 'Team Name : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('team_name', $team->team_name ?? '' , ['class' => 'form-control','placeholder'=>'Enter team name']) !!}
            </div>
            
            <div class="form-group">
              {!! Form::label('team_contact', 'Team Contact : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('team_contact', $team->team_contact ?? '' , ['class' => 'form-control','placeholder'=>'Enter team contact']) !!}
            </div>

            <div class="form-group">
              {!! Form::label('team_address', 'Team Address : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('team_address', $team->team_address ?? '' , ['class' => 'form-control','placeholder'=>'Enter team address']) !!}
            </div>
            
             @if($team->team_image ?? '')
              <div class="form-group">
                <img src="{{ asset(imagePath($team->team_image)) }}" alt="" style="width: auto;" height="300px">
              </div>
              @endif
           
           {!! Form::label('image', 'Team Image :', ['class' => 'font-weight-bold']) !!}

           <div class="custom-file mb-2">
                <input type="file" name="team_image" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Image</label>
            </div>
            
            @if($team ?? '')
            <div class="form-group col-md-3 col-sm-3">
              <input type="submit" class="btn btn-primary btn-block mt-4" value="Update Team">
            </div>
            @else
            <div class="form-group col-md-3 col-sm-3">
              <input type="submit" class="btn btn-primary btn-block mt-4" value="Create Team">
            </div>
            @endif
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('headelements')
@endsection

@section('footerelements')

@endsection