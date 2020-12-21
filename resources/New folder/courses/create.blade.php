@extends('base')

@section('content')

@section('create')

<div class="background">
<br> 
    <div class="container">
        <div class="float-right">
            <a href="{{url('/courses')}}" class="btn btn-primary btn-sm">
                Back
            </a>
        </div>

        <h2>Create New Course</h2>

        <div class="row">
            <div class="col-md-5">
            
                {!!  Form::open(['url'=>'/courses', 'method'=>'post']) !!}

                    @include('courses._form')

                    <div class="form-group">
                        <button class="btn btn-primary float-right">Add Course</button>
                    </div>

                {!!  Form::close() !!}
            
            </div>

            <div class="col-md-7">
                @include('errors')
            </div>
        </div>
    </div>
</div>
@endsection