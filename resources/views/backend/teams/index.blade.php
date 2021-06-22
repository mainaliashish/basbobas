@extends('backend.layouts.base')
{{-- {{ dd($teams) }} --}}
@section('headerelements')
@endsection

@section('main-content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Teams</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Teams</li>
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
          <h3 class="card-title">Teams</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 12%">
                          Team Name
                      </th>
                      <th style="width: 20%" class="text-center">
                          Team Image
                      </th>
                      <th style="width:12%" class="text-center">
                         Address
                      </th>
                      <th style="width:12%" class="text-center">
                         Contact
                      </th>
                      <th class="text-center">
                          Actions
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($teams as $team)
                  <tr>
                      <td>
                          {{ $team->team_name }}
                      </td>
                      <td>
                        <img alt="Avatar" class="img img-rounded" width="100%" height="120px" src="{{ asset(imagePath($team->team_image)) }}">     
                      </td>
                     <td class="project_progress text-center">
                          {!! $team->team_address !!}
                      </td>
                      <td class="project_progress text-center">
                          {!! $team->team_contact !!}
                      </td>
                      <td class="project-actions text-center">
                          <a class="btn btn-primary btn-sm" href="{{ route('backend.teams.show', $team->id) }}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('backend.teams.edit', $team->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('backend.teams.destroy', $team->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
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

          
        <!-- /.card-body -->
      </div>
  
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
@endsection