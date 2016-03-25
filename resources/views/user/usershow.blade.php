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
<div class="container">
    <p>
        @for ($i = 0; $i < 10; $i++)
            <div class="fancybox">
                <?php
                    require_once '../vendor/fzaninotto/faker/src/autoload.php';
                    $faker = Faker\Factory::create('en_US');
                    echo '<table><tr><td>';
                    echo '<h2>'.$faker->name.'</h2><br />';
                    echo $faker->streetAddress.'<br />';
                    echo $faker->city.', '.$faker->stateAbbr.' '.$faker->postcode.'<br />';
                    echo $faker->phoneNumber.'<br />';
                    echo $faker->email.'<br />';
                    echo $faker->company.'<br /></td>';
                    echo '<td><img class="profilepic" src='.$faker->imageUrl($width = 640, $height = 480).'></td><tr></table>' // 'http://lorempixel.com/640/480/'
                ?>
            </div>
            <br />
        @endfor
    </p>
</div>

@stop

@section('body')
    <script>
        function goBack() {
            window.history.back();
        }
        </script>
@stop
