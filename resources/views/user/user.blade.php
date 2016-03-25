@extends('layouts.master')

@section('title')
    Persona Generator
@stop

@section('content')
<hr />
<h1 class="text-center"> Persona Generator </h1>
<form method='POST' action='/user/show' >
    <div class='form-group center'>
        <p>Number of fake personas to generate: (max: 50)</p>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <input type='text' class='text-center' name='users' value='{{ old('users') }}'> <br /><br />
        {{ $errors->first('users') }}<br />
        <button type="submit" class="btn btn-primary">Generate</button><br />
    </div>
</form>
@stop
