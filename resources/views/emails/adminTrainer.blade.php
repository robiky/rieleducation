@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'A Student Registered for a Training ! ',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Payment Status</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$paid == '1' ? 'YES, Payment was made in full' : 'NO, payment wasnt made' }}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Training Type</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$eprofile}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Name</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$name}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr><tr>
        <td class="title">
            <h4 style="font-weight: bold">Phone Number</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$number}}
            <hr>
        </td>

    </tr>




    @include('beautymail::templates.sunny.contentEnd')

    {{--@include('beautymail::templates.sunny.button', [--}}
    {{--'title' => 'Click Here',--}}
    {{--'link' => 'http://localhost/riel/'--}}
    {{--])--}}

@stop