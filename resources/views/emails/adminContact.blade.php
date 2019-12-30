@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'An Enquiries by a client ! ',
        'level' => 'h1',
    ])

    @include('beautymail::templates.sunny.contentStart')
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
            {{$contact_name }}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Email</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$contact_email }}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Subject</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$contact_subject}}
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
            {{$contact_number}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Message</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>

    <tr>
        <td class="paragraph">
            {{$contact_message}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>


    @include('beautymail::templates.sunny.contentEnd')

    {{--@include('beautymail::templates.sunny.button', [--}}
        	{{--'title' => 'Click Here',--}}
        	{{--'link' => 'http://localhost/riel/'--}}
    {{--])--}}

@stop