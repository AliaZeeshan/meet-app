@extends('layouts.frontend')
@section('title')
    contact
@endsection
@section('content')
    <h1> if you have any problem you may contact this number</h1>
@endsection
<button type="submit">
    submit
</button>
<style>
    h1{
        text-align: center;
        background-color: orange;

    }
    h1:hover{
        background-color: deeppink;
    }

    button{
        color: deeppink;
        background-color: orange;
    }
    button:hover{
        color: white;
        background-color: blue;
    }
</style>
