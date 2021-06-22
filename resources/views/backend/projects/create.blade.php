@extends('backend.layouts.base')

@section('main-content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Add Project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Project</li>
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
          @if($project ?? '')
		        {!! Form::model($project ?? '', ['method'=>'PATCH', 'route' => ['backend.projects.update', $project->id], 'files'=>true]) !!}
	      	@else
			    {!! Form::open(array('method'=>'POST','route' => 'backend.projects.store', 'files'=>true)) !!}
		      @endif
            <div class="form-group">
              {!! Form::label('project_title', 'Project Title : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('project_title', $project->project_title ?? '' , ['class' => 'form-control','placeholder'=>'Enter Project title']) !!}
            </div>
            
            <div class="form-group">
              {!! Form::label('project_location', 'Project Location : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('project_location', $project->project_location ?? '' , ['class' => 'form-control','placeholder'=>'Enter Project location']) !!}
            </div>

            <div class="form-group">
			      {!! Form::label('project_description', 'Project Description : ', ['class' => ' font-weight-bold']) !!}
              <textarea id="summernote" name="project_description" placeholder="Write about project..">
                {{ $project->project_description ?? '' }}
              </textarea>
            </div>

             @if($project->project_image_one ?? '')
              <div class="form-group">
                <img src="{{ asset(imagePath($project->project_image_one)) }}" alt="" style="width: auto;" height="300px">
              </div>
              @endif
           
           {!! Form::label('image', 'Project Image One (Required) :', ['class' => 'font-weight-bold']) !!}

           <div class="custom-file mb-2">
                <input type="file" name="project_image_one" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Image</label>
            </div>

             @if($project->project_image_two ?? '')
              <div class="form-group">
                <img src="{{ asset(imagePath($project->project_image_two)) }}" alt="" style="width: auto;" height="300px">
              </div>
              @endif
           

            {!! Form::label('image', 'Project Image Two (Optional) :', ['class' => 'font-weight-bold']) !!}

           <div class="custom-file mb-2">
                <input type="file" name="project_image_two" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Image</label>
            </div>

             @if($project->project_image_three ?? '')
              <div class="form-group">
                <img src="{{ asset(imagePath($project->project_image_three)) }}" alt="" style="width: auto;" height="300px">
              </div>
              @endif
           

            {!! Form::label('image', 'Project Image Three (Optional) :', ['class' => 'font-weight-bold']) !!}

           <div class="custom-file mb-2">
                <input type="file" name="project_image_three" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Image</label>
            </div>
            
            
            @if($project ?? '')
            <div class="form-group col-md-3 col-sm-3">
              <input type="submit" class="btn btn-primary btn-block mt-4" value="Update Project">
            </div>
            @else
            <div class="form-group col-md-3 col-sm-3">
              <input type="submit" class="btn btn-primary btn-block mt-4" value="Create Project">
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
  <link rel="stylesheet" href="{{ asset('backend/plugins/summernote/summernote-bs4.min.css') }}">
  @endsection

@section('footerelements')
<script src="{{ asset('backend/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote({
       height: 300,
       toolbar: [
            [ 'style', [ 'style' ] ],
            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
            [ 'fontname', [ 'fontname' ] ],
            [ 'fontsize', [ 'fontsize' ] ],
            [ 'color', [ 'color' ] ],
            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
            [ 'table', [ 'table' ] ],
            [ 'insert', [ 'link'] ],
            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
        ]
    });
  })
</script>

@endsection