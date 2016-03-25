@extends('layouts.master')

@section('title')
    Lorem Ipsum Generator
@stop

@section('content')
<hr />
<h1 class="text-center"> Lorem Ipsum Generator </h1>

<div class="center">
    <form action="{{ url('lorem/show') }}" method="GET">
        <p>Number of Lorem Ipsum paragraphs to generate: (max: 50)</p>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="text-center" name="paras" type="text"> <br /><br />
        <input name="submit" type="submit">
    </form>
</div>
@stop
