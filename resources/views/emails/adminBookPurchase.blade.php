@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'A Student Purchased for a Material ! ',
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
            <h4 style="font-weight: bold">Book Type</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$purchase_book}}
            <hr>
        </td>

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
            {{$purchase_name}}
            <hr>
        </td>

    </tr>
    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Phone</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$phone}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr><tr>
        <td class="title">
            <h4 style="font-weight: bold">Amount</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$amount}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Email Address</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$email}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr><tr>
        <td class="title">
            <h4 style="font-weight: bold">Send Via Courier</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$cCourier}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Courier</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$courier}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Address</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$address}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr><tr>
        <td class="title">
            <h4 style="font-weight: bold">Quantity</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$quantity}}
            <hr>
        </td>

    </tr>






    @include('beautymail::templates.sunny.contentEnd')

    {{--@include('beautymail::templates.sunny.button', [--}}
    {{--'title' => 'Click Here',--}}
    {{--'link' => 'http://localhost/riel/'--}}
    {{--])--}}

@stop