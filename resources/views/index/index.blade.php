@extends('layouts.master')

@section('title')
    Dev's Best Friend - Index
@stop

@section('content')
<nav class="text-center">
    <ul>
        <li><a href='/lorem'>Generate Lorem Ipsum</a></li>
        <li><a href='/user'>Generate Random User</a></li>
    </ul>
</nav>
<br />
<div class="container">
    <div class="col-md-6 backgray">
        <p>
            <h3 class="text-center">Lorem Ipsum</h3>
            Lorem Ipsum has been the dummy text of the printing and typesetting industry since the 1500s.
            It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.
            <br /><br />
            Fun fact: Richard McClintock, a Latin professor in Virginia,
            looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
            and going through the cites of the word in classical literature, discovered
            Lorem Ipsum comes from "The Extremes of Good and Evil" by Cicero, written in 45 BC. (Source: http://www.lipsum.com)
        </p>
    </div>
    <div class="col-md-6 backgray">
        <p>
            <h3 class="text-center">Random User</h3>
            The Random User Generator creates up to 100 random user identities.
        </p>
    </div>
</div>
@stop
