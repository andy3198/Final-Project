@extends('base')

@section('content')

@include('info')
<br>


<div class="float-right">
    <a href="{{url('/courses/create')}}" class="btn btn-secondary btn-sm">
        Add New Courses
    </a>
</div>


<h1>
    Course
</h1>

<table class="table table-bordered table-striped table-sm">
    <thead class="thead-dark">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Tags</th>
            <th>Start</th>
            <th>End</th>
            <th>Option</th>
        </tr>
    </thead>

    <tbody>
        @foreach($courses as $course)
            <tr>
                <td>{{$course->name}}</td>
                <td>{{$course->description}}</td>
                <td>{{$course->tags}}</td>
                <td>{{$course->start}}</td>
                <td>{{$course->end}}</td>
                <td>
                    <a href="{{url('/courses/edite', ['name'=>$course]) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-check"></i> Edite
                    </a>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>

@stop