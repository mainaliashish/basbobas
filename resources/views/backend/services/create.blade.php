@extends('backend.layouts.base')

@section('main-content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Add Service</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Service</li>
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
          @if($service ?? '')
		        {!! Form::model($service ?? '', ['method'=>'PATCH', 'route' => ['backend.services.update', $service->id], 'files'=>true]) !!}
	      	@else
			    {!! Form::open(array('method'=>'POST','route' => 'backend.services.store', 'files'=>true)) !!}
		      @endif
            <div class="form-group">
              {!! Form::label('service_title', 'Service Title : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('service_title', $service->service_title ?? '' , ['class' => 'form-control','placeholder'=>'Enter service title']) !!}
            </div>
            <!-- Content Wrapper. Contains page content -->

            <div class="form-group">
			      {!! Form::label('service_description', 'Service Description : ', ['class' => ' font-weight-bold']) !!}
              <textarea id="summernote" name="service_description" placeholder="Write about service..">
                {{ $service->service_description ?? '' }}
              </textarea>
            </div>

             @if($service->service_image ?? '')
              <div class="form-group">
                <img src="{{ asset(imagePath($service->service_image)) }}" alt="" style="width: auto;" height="300px">
              </div>
              @endif
           
           {!! Form::label('service_image', 'Service Image :', ['class' => 'font-weight-bold']) !!}

           <div class="custom-file mb-2">
                <input type="file" name="service_image" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Image</label>
            </div>
            
            @if($service ?? '')
            <div class="form-group col-md-3 col-sm-3">
              <input type="submit" class="btn btn-primary btn-block mt-4" value="Update Service">
            </div>
            @else
            <div class="form-group col-md-3 col-sm-3">
              <input type="submit" class="btn btn-primary btn-block mt-4" value="Create Service">
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