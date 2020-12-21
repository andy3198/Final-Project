@extends('base')

@section('content')

@include('info')
<br>
<div class="float-right">
    <a href="{{url('courses/create')}}" class="btn btn-secondary btn-sm">
        Add New Course
    </a>
</div>
<h1>List of Courses</h1>

<table class="table table-bordered table-striped table-sm">
    <thead class="thead-dark">
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Start</th>
            <th>End</th>
            <th>Tags</th>
            <th>Instructor ID</th>
            <th>Option</th>
        </tr>
    </thead>

    <tbody>
        @foreach($courses as $crs)

            <tr>
                <td>{{$crs->name}}</td>
                <td>{{$crs->description}}</td>
                <td>{{$crs->start}}</td>
                <td>{{$crs->end}}</td>
                <td>{{$crs->tags}}</td>
                <td>{{$crs->instructor_id}}</td>
                <td>
                    <a href="{{url('/courses/edite', ['name'=>$crs]) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-check"></i> Edite
                    </a>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>


@stop