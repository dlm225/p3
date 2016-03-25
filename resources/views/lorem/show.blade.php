@extends('layouts.master')

@section('title')
    Lorem Ipsum Generator
@stop

@section('content')
<hr />
<h1 class="text-center"> Lorem Ipsum Generator </h1>

<div class="col-md-8 col-md-offset-2">
    <?php
        $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($paras);
        echo implode('<p>', $paragraphs);
    ?>
</div>
<br /><br /><br /><br /><br /><br /><br />
@stop
