@include('backend.partials.header')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

@include('backend.partials.sidebar')
@include('backend.partials.messages')

@section('main-content')
@show



@include('backend.partials.footer')