@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Receipt From Rietutors Nigeria',
        'level' => 'h1',
    ])


    @include('beautymail::templates.sunny.contentStart')
    <h3>Dear {{$name}},</h3>
    <h3>Your payment of NGN{{ number_format((int) filter_var($eprofile, FILTER_SANITIZE_NUMBER_INT))  }} for {{substr($eprofile , 0, -9)}} was successful and has been received.</h3>
    <br><hr><br>
    <p>Best Regards</p>
    <p>Rieltutors</p>

    @include('beautymail::templates.sunny.contentEnd')

    @include('beautymail::templates.sunny.button', [
    'title' => 'Trainings',
    'link' => 'http://localhost/riel/public/training/session'
    ])

@stop