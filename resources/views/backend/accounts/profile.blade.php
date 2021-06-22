@extends('backend.layouts.base')
{{-- {{ dd($team) }} --}}
@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('backend.partials.content_header', ['content_header'=> 'Profile'])

   <!-- Main content -->
    <section class="content">
      
      <!-- Default box -->
      <div class="card">
        <div class="col-12 col-md-12 col-sm-12 center">
            {!! Form::model($user, ['method'=>'PATCH', 'route' => ['backend.profile.update', $user->id],'files'=>true]) !!}
		        <div class="form-group">
              {!! Form::label('name', 'Company Name : ', ['class' => 'font-weight-bold']) !!}
              {!! Form::text('name', $user->name ?? '' , ['class' => 'form-control','placeholder'=>'Enter User name']) !!}
                </div>
           {!! Form::label('image', 'Profile Image :', ['class' => 'font-weight-bold']) !!}
            @if(isset($user->profile_image))
            <div class="form-group">
              <img src="{{ asset(imagePath($user->profile_image)) }}" class="img img-circle" alt="" style="width: 120px;height:120px">
            </div>
            @endif

           <div class="custom-file mb-2">
                <input type="file" name="profile_image" class="custom-file-input" id="chooseFile">
                <label class="custom-file-label" for="chooseFile">Select Profile Image</label>
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