@extends('layouts.master')

@section('title')
    Lorem Ipsum Generator
@stop

@section('content')
<hr />
<h1 class="text-center"> Lorem Ipsum Generator </h1>
<form method='POST' action='/lorem/show' >
    <div class='form-group center'>
        <p>Number of Lorem Ipsum paragraphs to generate: (max: 50)</p>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <input type='text' class='text-center' name='paras' value='{{ old('paras') }}'> <br /><br />
        {{ $errors->first('paras') }}<br />
        <button type="submit" class="btn btn-primary">Generate</button><br />
    </div>
</form>
@stop
