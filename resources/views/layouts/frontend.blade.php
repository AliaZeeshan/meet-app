
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <style>
        h1
        {
        color: red;
        }

    </style>
</head>
<body>
{{--@extends,@yields,@section,@stack,@push,@show,@parent--}}
<div class="container">
    @section('header')
        <h2>this is header tamplate</h2>
        @show
    @yield('content')
</body>
</html>
