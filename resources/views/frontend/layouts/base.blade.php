<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title ?? 'Basobas Developer' }}</title>
    @include('frontend/partials/header')
    <style>
        .header-bennar-area {
            background: url({{ asset(imagePath($about->banner_image)) }});
        }
    </style>
</head>
<body>
    @section('main-content')
    @show
    @include('frontend/partials/footer')
</html>