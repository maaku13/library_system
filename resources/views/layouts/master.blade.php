<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Library System</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{ url('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ url('/bootstrap/css/agency.css') }}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{ url('/bootstrap/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body id="page-top" class="index">
    
        @include('layouts.partials._navigation')
    
        @include('layouts.partials._header')
    
        @yield('content')
    
        @include('layouts.partials._footer')
    
    </body>
</html>