@extends('layouts.master')

@section('title')
    Persona Generator
@stop

@section('content')
<hr />
<h1 class="text-center"> Persona Generator </h1>
<div class='text-center'>
    <button onclick="goBack()" class='btn btn-primary block-center'>Go Back</button><br />
</div>
<br />
<div class="col-md-8 col-md-offset-2">
    <p>

</div>

@stop

@section('body')
    <script>
        function goBack() {
            window.history.back();
        }
        </script>
@stop
