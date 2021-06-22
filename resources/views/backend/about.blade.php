@extends('backend.layouts.base')

@section('main-content')
<div class="content-wrapper">
    @include('backend.partials.content_header', ['content_header'=> 'About Us'])
    
    <!-- Main content -->
    <section class="content">
      
      <!-- Default box -->
      <div class="card">
        <div class="col-12 col-md-12 col-sm-12 center">
            {!! Form::model($about, ['method'=>'POST', 'route' => ['backend.about.update', $about->id],'files'=>true]) !!}
		        <div class="form-group">
              {!! Form::label('company_name', 'Company Name : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('company_name', $about->company_name ?? '' , ['class' => 'form-control','placeholder'=>'Enter site name']) !!}
            </div>
            <!-- Content Wrapper. Contains page content -->

            <div class="form-group">
			      {!! Form::label('company_description', 'Company Description : ', ['class' => ' font-weight-bold']) !!}
              <textarea id="summernote" name="company_description">
                {{ $about->company_description ?? 'Write about company' }}
              </textarea>
            </div>

            <div class="form-group">
			      {!! Form::label('company_mission', 'Company Mission : ', ['class' => ' font-weight-bold']) !!}
              <textarea id="summernote_1" name="company_mission">
                {!! $about->company_mission ?? 'Write about company mission' !!}
              </textarea>
            </div>
           
           {!! Form::label('image', 'Company Logo :', ['class' => 'font-weight-bold']) !!}
            @if(isset($about->company_logo))
            <div class="form-group">
              <img src="{{ asset(imagePath($about->company_logo)) }}" class="img img-rounded" alt="" style="width: auto;height:100%">
            </div>
            @endif

           <div class="custom-file mb-2">
                <input type="file" name="image" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select logo</label>
            </div>
            
            <div class="form-group">
			      {!! Form::label('company_location', 'Company Location : ', ['class' => 'font-weight-bold']) !!}
			      {!! Form::text('company_location', $about->company_location ?? '' , ['class' => 'form-control','placeholder'=>'Enter site name']) !!}
		       </div>

           <div class="form-group">
			      {!! Form::label('company_address', 'Company Address : ', ['class' => 'font-weight-bold']) !!}
			      {!! Form::text('company_address', $about->company_address ?? '' , ['class' => 'form-control','placeholder'=>'Enter site name']) !!}
		       </div>

           {!! Form::label('image', 'Company About :', ['class' => 'font-weight-bold']) !!}
            @if(isset($about->company_about_image))
            <div class="form-group">
              <img src="{{ asset(imagePath($about->company_about_image)) }}" class="img img-rounded" alt="" style="width: auto;height:100%">
            </div>
            @endif
            <div class="custom-file mb-2">
                <input type="file" name="about_image" class="custom-file-input" id="chooseFile1">
                <label class="custom-file-label" for="chooseFile1">Select About Image</label>
            </div>
            

           <div class="form-group">
			      {!! Form::label('phone_number_one', 'Phone 1 : ', ['class' => 'font-weight-bold']) !!}
			      {!! Form::text('phone_number_one', $about->phone_number_one ?? '' , ['class' => 'form-control','placeholder'=>'Enter site name']) !!}
		       </div>

           <div class="form-group">
			      {!! Form::label('phone_number_two', 'Phone 2 : ', ['class' => 'font-weight-bold']) !!}
			      {!! Form::text('phone_number_two', $about->phone_number_two ?? '' , ['class' => 'form-control','placeholder'=>'Enter site name']) !!}
		       </div>

          <div class="form-group">
			      {!! Form::label('phone_number_three', 'Phone 3 : ', ['class' => 'font-weight-bold']) !!}
			      {!! Form::text('phone_number_three', $about->phone_number_three ?? '' , ['class' => 'form-control','placeholder'=>'Enter site name']) !!}
		       </div>

          <div class="form-group">
			      {!! Form::label('phone_number_four', 'Phone 4 : ', ['class' => 'font-weight-bold']) !!}
			      {!! Form::text('phone_number_four', $about->phone_number_four ?? '' , ['class' => 'form-control','placeholder'=>'Enter site name']) !!}
		       </div>

          <div class="form-group">
			      {!! Form::label('company_email', 'Company Email : ', ['class' => 'font-weight-bold']) !!}
			      {!! Form::text('company_email', $about->company_email ?? '' , ['class' => 'form-control','placeholder'=>'Enter site name']) !!}
		       </div>

          <div class="form-group">
			      {!! Form::label('company_fax', 'Company Fax : ', ['class' => 'font-weight-bold']) !!}
			      {!! Form::text('company_fax', $about->company_fax ?? '' , ['class' => 'form-control','placeholder'=>'Enter site name']) !!}
		       </div>

           {!! Form::label('image', 'Company banner :', ['class' => 'font-weight-bold']) !!}
            @if(isset($about->banner_image))
            <div class="form-group">
              <img src="{{ asset(imagePath($about->banner_image)) }}" class="img img-rounded" alt="" style="width: 100%;height:200px;">
            </div>
            @endif
            <div class="custom-file mb-2">
                <input type="file" name="banner_image" class="custom-file-input" id="chooseFile1">
                <label class="custom-file-label" for="chooseFile1">Select banner Image</label>
            </div>

            
            <div class="form-group col-md-3 col-sm-3">
              <input type="submit" class="btn btn-primary btn-block mt-4" value="Update">
            </div>
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
    $('#summernote_1').summernote({
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