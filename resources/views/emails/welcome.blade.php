@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'Thank You For Purchasing ! '. strtoupper($purchase_book).' BOOK',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')
<h3>Dear {{$purchase_name}},</h3>
    <h3>Please Kindly Download The PDF file on the Attachment.</h3>
    <br><hr><br>
    <p>Best Regards</p>
    <p>Rieltutors</p>

    @include('beautymail::templates.sunny.contentEnd')

    {{--@include('beautymail::templates.sunny.button', [--}}
        	{{--'title' => 'Click Here To Download',--}}
        	{{--'link' => ''--}}
    {{--])--}}

@stop