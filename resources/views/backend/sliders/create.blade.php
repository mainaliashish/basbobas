@extends('backend.layouts.base')
{{-- {{dd($slider->is_featured)}} --}}
@section('main-content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Add Slider Images</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Images</li>
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
          @if($slider ?? '')
		        {!! Form::model($slider ?? '', ['method'=>'PATCH', 'route' => ['backend.sliders.update', $slider->id], 'files'=>true]) !!}
	      	@else
			    {!! Form::open(array('method'=>'POST','route' => 'backend.sliders.store', 'files'=>true)) !!}
		      @endif
            <div class="form-group">
              {!! Form::label('slider_title', 'Slider Title : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('slider_title', $slider->slider_title ?? '' , ['class' => 'form-control','placeholder'=>'Enter slider title']) !!}
            </div>
            

            <div class="form-group">
			      {!! Form::label('slider_description', 'Project Description : ', ['class' => ' font-weight-bold']) !!}
              <textarea id="summernote" name="slider_description" placeholder="Write about project..">
                {{ $slider->slider_description ?? '' }}
              </textarea>
            </div>

             @if($slider->slider_image ?? '')
              <div class="form-group">
                <img src="{{ asset(imagePath($slider->slider_image)) }}" alt="" style="width: auto;" height="300px">
              </div>
              @endif
           
           {!! Form::label('image', 'Slider Image :', ['class' => 'font-weight-bold']) !!}

           <div class="custom-file mb-2">
                <input type="file" name="slider_image" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Image</label>
            </div>

            <div class="form-group">
                <div class="form-check">
                  @if($slider ?? '')
                  <input class="form-check-input" type="checkbox" name="is_featured"  {{ $slider->is_featured ? 'checked' : ''}}>
                  @else
                  <input class="form-check-input" type="checkbox" name="is_featured">
                  @endif
                  <label class="form-check-label"><b>Featured Image</b></label>
                </div>
            </div>


            @if($slider ?? '')
            <div class="form-group col-md-3 col-sm-3">
              <input type="submit" class="btn btn-primary btn-block mt-4" value="Update Slider">
            </div>
            @else
            <div class="form-group col-md-3 col-sm-3">
              <input type="submit" class="btn btn-primary btn-block mt-4" value="Create Slider">
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