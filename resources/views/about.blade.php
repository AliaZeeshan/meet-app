@extends('layouts.frontend')
@section('title')
    About
@endsection
@section('content')
<!--- how to use blade templating engine--->
<p>this page is loaded from view folder</p>
@if($show)
    <h1>{!! $message !!}</h1>
    <h2>{{$name}}</h2>

@endif
@for($i=0; $i<10; $i++)
    {{$i}}
@endfor
    @endsection

