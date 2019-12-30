@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">

                            <form class="form-group" method="post" action="{{route('timetable.store')}}" enctype="multipart/form-data">

                                {{csrf_field()}}


                                events:<br>
                               name <input class="form-control" type="text" name="name" >
                             days   <input class="form-control" type="text" name="days" >

                           period     <input class="form-control" type="text" name="periods" >

                                <br>
                                <input class="form-control" type="submit" value="submit" >
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
