@extends('layouts.master')

@section('title')
    Lorem Ipsum Generator
@stop

@section('content')
<hr />
<h1 class="text-center"> Lorem Ipsum Generator </h1>
<div class='text-center'>
    <button onclick="goBack()" class='btn btn-primary block-center'>Go Back</button><br />
</div>
<br />
<div class="col-md-8 col-md-offset-2">
    <p>
    <?php
        $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($paras);
        echo implode('<p>', $paragraphs);
    ?>
</div>

@stop

@section('body')
    <script>
        function goBack() {
            window.history.back();
        }
        </script>
@stop
