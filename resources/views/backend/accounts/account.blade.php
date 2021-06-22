@extends('backend.layouts.base')
@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Update Your Admin Password</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        {!! Form::model($user, ['method'=>'PATCH', 'route' => ['backend.account.update', $user->id],'files'=>true]) !!}

        <div class="form-group">
          {!! Form::label('current-password', 'Current password:', ['class' => 'font-weight-bold']) !!}
		      {!! Form::password('current-password', ['class' => 'form-control','placeholder'=>'Enter current password'])!!}
        </div>

        <div class="form-group">
          {!! Form::label('new-password', 'New password:', ['class' => 'font-weight-bold']) !!}
		      {!! Form::password('new-password', ['class'=> 'form-control', 'placeholder' => 'Enter new password']) !!}

        </div>

        <div class="form-group">
          {!! Form::label('new-password_confirmation', 'Confirm password:', ['class' => 'font-weight-bold']) !!}
		      {!! Form::password('new-password_confirmation', ['class' => 'form-control','placeholder'=>'Enter confirm password']) !!}
        </div>

        <div class="form-group right">
          {{ Form::submit('Update Password',['class' => 'btn btn-success'])}}
        </div>
        {!! Form::close() !!}
        </div>
        <!-- /.card-body -->

      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection