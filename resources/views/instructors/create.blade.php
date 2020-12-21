@extends('base')

@section('content')

@section('create')

<div class="background">
<br> 
    <div class="container">
        <div class="float-right">
            <a href="{{url('/instructors')}}" class="btn btn-primary btn-sm">
                Back
            </a>
        </div>

        <h2>Create New Instructor</h2>

        <div class="row">
            <div class="col-md-5">
            
                {!!  Form::open(['url'=>'/instructors', 'method'=>'post']) !!}

                    @include('instructors._form')

                    <div class="form-group">
                        <button class="btn btn-primary float-right">Add Instructor</button>
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