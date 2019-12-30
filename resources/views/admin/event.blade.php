@extends('layout.app')

@section('content')
@if(count($errors) > 0)

    <ul class="list-group">
        @foreach($errors->all() as $error)
          <li class="list-group-item text-danger'">
              {{$error}}
          </li>

        @endforeach

    </ul>

    @endif
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

                            <form class="form-group" method="post" action="{{route('events.store')}}" enctype="multipart/form-data">

                                {{csrf_field()}}


                                events:<br>
                                <input class="form-control" type="text" name="title" >
                                <input class="form-control" type="file" name="featured" >
<br>

                                <textarea class="form-control" type="text" name="contents" ></textarea>

                                <select class="form-control"  name="category_id" >
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach

                                </select>

                                <select class="form-control"  name="timetable_id" >
                                    @foreach($timetables as $timetable)
                                        <option value="{{$timetable->id}}">{{$timetable->name}}</option>
                                    @endforeach

                                </select>
                                <input class="form-control" type="text" name="location" >
                                <input class="form-control" type="date" name="date" >
                                <input class="form-control" type="time" name="time" >
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
