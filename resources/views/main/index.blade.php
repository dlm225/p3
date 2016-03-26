@extends('layouts.master')

@section('title')
    Dev's Best Friend - Index
@stop

@section('content')
<div class="container">
    <div class="col-md-6 backgray" style="float:left;">
            <h3 class="text-center">Lorem Ipsum</h3>
            Lorem Ipsum has been the dummy text of the printing and typesetting industry since the 1500s.
            It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged.<br /><br />
            <div class="fancyboxsilver">
                <h4>Example:</h4>
                <p>
                    Vivamus per curabitur cras aptent habitant diam ornare libero, elementum sollicitudin metus
                    luctus aliquet id curae non, risus litora at varius sapien at taciti. Lobortis nullam pellentesque
                    neque nam quis dictumst posuere, curabitur libero ac diam non pretium aliquam, facilisis iaculis
                    sem gravida lacus iaculis. <br /><br /> Consectetur maecenas donec eu nisl fermentum sit imperdiet purus ac
                    donec senectus est cras netus interdum, pretium leo convallis sit neque tristique a taciti fusce
                    neque turpis pulvinar erat. Aptent habitasse est sollicitudin mi mauris metus litora habitasse
                    cras curae nunc magna inceptos, felis vivamus senectus suspendisse etiam inceptos donec fames vel
                    sapien ante.
                </p>
            </div>
        <br />
        <div class="text-center"><button onclick="location.href='/lorem'" class="btn btn-primary">Generate Ipsum Lorem</button></div>
    </div>
    <div class="col-md-6 backgray" style="float:right;">
            <h3 class="text-center">Random User</h3>
            The Random User Generator creates up to 50 random personas, complete with first and last name,
            full mailing address, phone number, email address, place of employment and profile image.<br /><br />
            <div class="fancyboxsilver">
                <h4>Example:</h4>
                <?php
                    require_once '../vendor/fzaninotto/faker/src/autoload.php';
                    $faker = Faker\Factory::create('en_US');
                    echo '<div class="profiletextdiv2">';
                    echo '<h4>'.$faker->name.'</h4>';
                    echo 'DOB: '.$faker->dayOfMonth().' '.$faker->monthName().' '.$faker->year($max = '1996').'<br />';
                    echo $faker->streetAddress.'<br />';
                    echo $faker->city.', '.$faker->stateAbbr.' '.$faker->postcode.'<br />';
                    echo $faker->phoneNumber.'<br />';
                    echo $faker->email.'<br />';
                    echo 'Works at: '.$faker->company.'<br /></div>';
                    echo '<div class="profilepicdiv2"><img class="profilepic2" alt="Profile image" src='.$faker->imageUrl($width = 640, $height = 480).'></div>' // 'http://lorempixel.com/640/480/'
                ?>
            </div>
        <br />
        <div class="text-center"><button onclick="location.href='/user'" class="btn btn-primary">Generate Fake Persona</button></div>
    </div>
</div>
@stop
