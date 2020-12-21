@extends('base')

@section('content')

@include('info')
<br>

<div class="float-right">
    <a href="{{url('/instructors/create')}}" class="btn btn-secondary btn-sm">
        Add New Instructor
    </a>
</div>

<h1>List of Instructors</h1>

<table class="table table-bordered table-striped table-sm">
    <thead class="thead-dark">
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Expertise</th>
            <th>Rating</th>
            <th>Option</th>
        </tr>
    </thead>

    <tbody>
        @foreach($instructors as $ins)

            <tr>
                <td>{{$ins->lname}}</td>
                <td>{{$ins->fname}}</td>
                <td>{{$ins->aoe}}</td>
                <td>{{$ins->rating}}</td>
                <td>
                    <a href="{{url('/instructors/edite', ['lname'=>$ins]) }}" class="btn btn-primary btn-sm">
                        <i class="fa fa-check"></i> Edite
                    </a>
                </td>
            </tr>

        @endforeach
    </tbody>
</table>


@stop