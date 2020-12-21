@extends('base')

@section('edite')

    <script>
        $('.addAttr').click(function() {
        var id = $(this).data('id');   
        $('#id').val(id); 
        } );
    </script>

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Courses</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
                </div>

                {!! Form::open(['url'=>'/courses', 'method'=>'delete']) !!}
                    <div class="modal-body">
                        Are you sure want to this Course?
                        {{Form::hidden('course_id', $courses->id)}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>



    <div class="background-edit">
    <br>
        <div class="container">
            <div class="float-right">
                <a href="{{url('/courses')}}" class="btn btn-primary btn-sm">
                    Back
                </a>
            </div>
            <h2>Edit Course: [{{ $courses->id }}]</h2>

            <div class="row">
                <div class="col-md-5">

                    {!!  Form::model($courses, ['url'=>"/courses/$courses->id", 'method'=>'patch']) !!}

                        @include('courses._form')

                        <div class="form-group">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal">
                                Delete
                            </button>

                            <button class="btn btn-primary float-right">
                                Update Course
                            </button>
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