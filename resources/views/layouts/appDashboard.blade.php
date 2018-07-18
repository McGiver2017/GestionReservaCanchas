<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('Assets.cssDashboard')
</head>
<body class="blog-posts sidebar-collapse">
    @include('layouts.sections.Navigation')
    <div class="main main-raised">
        @yield('content')
    </div>
    @include('layouts.sections.Footer')
    @include('Assets.jsDashboard')
</body>
</html>
