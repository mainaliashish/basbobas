@extends('backend.layouts.base')

{{-- {{ dd($message) }} --}}
@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Message</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Message</li>
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
          <h3 class="card-title">Message Detail</h3>
        </div>
        <div class="card-body">
          <div class="row">
                <div class="col-12">
                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Sender Name :
                      </div>
                      <p style="font-size: 17px;">
                        {{ $message->sender_name }}
                      </p>
                    </div>

                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Sender Mobile Number :
                      </div>
                      <p style="font-size: 17px;">
                        {{ $message->sender_contact }}
                      </p>
                    </div>

                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Sender Email :
                      </div>
                      <p style="font-size: 17px;">
                        {{ $message->sender_email }}
                      </p>
                    </div>

                    <div class="post">
                      <div class="user-block text-bold" style="font-size: 17px;">
                          Message Description :
                      </div>
                    <div class="post clearfix">
                      <p style="font-size: 17px;">
                        {{ $message->message_description }}
                      </p>
                    </div>

                    
                    <div class="post float-end">
                        <div class="row">
                        <a class="btn btn-warning col-md-2 col-sm-2 btn-md ml-1 mr-1" style="color: white" href="{{ route('backend.messages') }}">
                              <i class="fas fa-undo-alt" style="color: white"></i>
                              Back
                          </a>
                          <a class="btn btn-danger btn-md col-md-2 col-sm-2 ml-2" href="{{ route('backend.messages.destroy', $message->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                          </div>
                      </div>
                      </div>
                  
                </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
  </div>
    <!-- /.content -->
@endsection