@extends('beautymail::templates.sunny')

@section('content')

    @include ('beautymail::templates.sunny.heading' , [
        'heading' => 'A Student Registered for an Exam ! ',
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
            {{$examRegister->payment_status == '1' ? 'YES, Payment was made in full' : 'NO, payment wasnt made' }}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Exam Type</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$examRegister->test_type}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Date of Birth</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$examRegister->dob}}
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
            {{$examRegister->phone}}
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
            {{$examRegister->email}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr><tr>
        <td class="title">
            <h4 style="font-weight: bold">Street Address</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
      {{$examRegister->street_address}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">City</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
           {{$examRegister->city}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">State Of Origin</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
           {{$examRegister->state}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr><tr>
        <td class="title">
            <h4 style="font-weight: bold">Zip Code</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
          {{$examRegister->zip_code}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr><tr>
        <td class="title">
            <h4 style="font-weight: bold">Gender</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$examRegister->gender}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>

{{--begin--}}
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">PassPort Id</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$examRegister->passport_number}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>

{{--end--}}


    {{--begin--}}
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Test Date</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$examRegister->test_date}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>

    {{--end--}}
    {{--begin--}}
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Test Location</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$examRegister->test_location}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>

    {{--end--}}{{--begin--}}
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Coaching</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
           {{$examRegister->coaching}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>

    {{--end--}}{{--begin--}}
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Your Highest Qualification</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$examRegister->qualification}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>

    {{--end--}}{{--begin--}}
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Desired Field Of Study</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$examRegister->field_of_study}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>

    {{--end--}}{{--begin--}}
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Desired Country of Study</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
           {{$examRegister->country_of_study}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>

    {{--end--}}

    {{--begin--}}
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">First Choice of Institution</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
           {{$examRegister->first_choice}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>

    {{--end--}}


    {{--begin--}}
    <tr>
        <td class="title">
            <h4 style="font-weight: bold">Second Choice of Institution</h4>
        </td>
    </tr>
    <tr>
        <td width="100%" height="10"></td>
    </tr>
    <tr>
        <td class="paragraph">
            {{$examRegister->second_choice}}
            <hr>
        </td>

    </tr>

    <tr>
        <td width="100%" height="25"></td>
    </tr>

    {{--end--}}




    @include('beautymail::templates.sunny.contentEnd')

    {{--@include('beautymail::templates.sunny.button', [--}}
        	{{--'title' => 'Click Here',--}}
        	{{--'link' => 'http://localhost/riel/'--}}
    {{--])--}}

@stop