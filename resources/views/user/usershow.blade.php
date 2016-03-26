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
        @for ($i = 0; $i < $users; $i++)
            <div class="fancybox">
                <?php
                    require_once '../vendor/fzaninotto/faker/src/autoload.php';
                    $faker = Faker\Factory::create('en_US');
                    echo '<div class="profiletextdiv">';
                    echo '<h2>'.$faker->name.'</h2>';
                    echo 'DOB: '.$faker->dayOfMonth().' '.$faker->monthName().' '.$faker->year($max = '1996').'<br />';
                    echo $faker->streetAddress.'<br />';
                    echo $faker->city.', '.$faker->stateAbbr.' '.$faker->postcode.'<br />';
                    echo $faker->phoneNumber.'<br />';
                    echo $faker->email.'<br />';
                    echo 'Works at: '.$faker->company.'<br /></div>';
                    echo '<div class="profilepicdiv"><img class="profilepic" src='.$faker->imageUrl($width = 640, $height = 480).'></div>' // 'http://lorempixel.com/640/480/'
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
