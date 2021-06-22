@extends('backend.layouts.base')

@section('main-content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Add News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">News</li>
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
          @if($news ?? '')
		        {!! Form::model($news ?? '', ['method'=>'PATCH', 'route' => ['backend.news.update', $news->id], 'files'=>true]) !!}
	      	@else
			    {!! Form::open(array('method'=>'POST','route' => 'backend.news.store', 'files'=>true)) !!}
		      @endif
            <div class="form-group">
              {!! Form::label('news_title', 'News Title : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('news_title', $news->news_title ?? '' , ['class' => 'form-control','placeholder'=>'Enter news title']) !!}
            </div>
            <!-- Content Wrapper. Contains page content -->

            <div class="form-group">
			      {!! Form::label('news_description', 'News Description : ', ['class' => ' font-weight-bold']) !!}
              <textarea id="summernote" name="news_description" placeholder="Write about news..">
                {{ $news->news_description ?? '' }}
              </textarea>
            </div>

             @if($news->news_image ?? '')
              <div class="form-group">
                <img src="{{ asset(imagePath($news->news_image)) }}" alt="" style="width: auto;" height="300px">
              </div>
              @endif
           
           {!! Form::label('news_image', 'News Image :', ['class' => 'font-weight-bold']) !!}

           <div class="custom-file mb-2">
                <input type="file" name="news_image" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Image</label>
            </div>

            <div class="form-group">
              {!! Form::label('news_author', 'News Author : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('news_author', $news->news_author ?? '' , ['class' => 'form-control','placeholder'=>'Enter news Author']) !!}
            </div>
            
            @if($news ?? '')
            <div class="form-group col-md-3 col-sm-3">
              <input type="submit" class="btn btn-primary btn-block mt-4" value="Update news">
            </div>
            @else
            <div class="form-group col-md-3 col-sm-3">
              <input type="submit" class="btn btn-primary btn-block mt-4" value="Create news">
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