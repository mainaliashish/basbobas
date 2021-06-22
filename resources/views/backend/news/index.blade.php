@extends('backend.layouts.base')

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
            <h1>News</h1>
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
        <div class="card-header">
          <h3 class="card-title">News</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 12%">
                          Title
                      </th>
                      <th style="width: 20%" class="text-center">
                          News Image
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
                @foreach ($all_news as $single_news)
                  <tr>
                      <td>
                          {{ $single_news->news_title }}
                      </td>
                      <td>
                        <img alt="Avatar" class="img img-rounded" width="100%" height="120px" src="{{ asset(imagePath($single_news->news_image)) }}">     
                      </td>
                      <td class="project_progress">
                          {!! Str::limit($single_news->news_description, 100, $end="......") !!}
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="{{ route('backend.news.show', $single_news->id) }}">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="{{ route('backend.news.edit', $single_news->id) }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" href="{{ route('backend.news.destroy', $single_news->id) }}" onclick="return confirm('Are you sure you want to delete this item?');">
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
     <div class="card-footer clearfix">
          {{ $all_news->links() }}  
      </div>
  
    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
@endsection