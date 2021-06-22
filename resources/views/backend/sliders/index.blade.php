@extends('backend.layouts.base')
{{-- {{ dd($sliders) }} --}}
@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider Images</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Slider Images</li>
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
          <h3 class="card-title">Slider Images</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped sliders">
              <thead>
                  <tr>
                      <th style="width: 12%">
                          Title
                      </th>
                      <th style="width: 20%" class="text-center">
                          Slider Image
                      </th>
                      <th style="width:35%" class="text-center">
                         Description
                      </th>
                      <th class="text-center">
                          Actions
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($sliders as $slider)
                  <tr>
                      <td>
                          {{ $slider->slider_title }}
                      </td>
                      <td>
                        <img alt="Avatar" class="img img-rounded" width="100%" height="120px" src="{{ asset(imagePath($slider->slider_image)) }}">     
                      </td>
                      <td class="slider_progress text-center">
                          {!! Str::limit($slider->slider_description, 100, $end="......") !!}
                      </td>
                      <td class="slider-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{ route('backend.sliders.show', $slider->id) }}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('backend.sliders.edit', $slider->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('backend.sliders.destroy', $slider->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
      </div>
      <!-- /.card -->

      <div class="card-footer clearfix">
           {{ $sliders->links() }}
         </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection