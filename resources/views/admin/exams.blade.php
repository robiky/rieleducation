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

                            <form class="form-group" method="post" action="{{route('inter.store')}}" enctype="multipart/form-data">

                                {{csrf_field()}}

<h2>exams</h2>
                                <br>
                                <input class="form-control" type="text" name="title" >
                                <input class="form-control" type="file" name="exams_image" >
                                <br>

                                <input class="form-control" type="text" name="price" >


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
