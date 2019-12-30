@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Receipt From Rietutors Exams Registration',
        'level' => 'h1',
    ])


    @include('beautymail::templates.sunny.contentStart')
    <h3>Dear {{$name}},</h3>
    <h3>Your payment for {{$book}} Examination was successful and has been received. We will contact you ASAP</h3>
    <br><hr><br>
    <p>Best Regards</p>
    <p>Rieltutors</p>

    @include('beautymail::templates.sunny.contentEnd')

    @include('beautymail::templates.sunny.button', [
    'title' => 'Trainings Session',
    'link' => 'http://rieltutors.com/training'
    ])

@stop