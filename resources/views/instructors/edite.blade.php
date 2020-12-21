@extends('base')

@section('edite')

    <script>
        $('.addAttr').click(function() {s
        var id = $(this).data('id');   
        $('#id').val(id); 
        } );
    </script>


    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete instructor</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">X</button>
                </div>

                {!! Form::open(['url'=>'/instructors', 'method'=>'delete']) !!}
                    <div class="modal-body">
                        Are you sure want to this instructor?
                        {{Form::hidden('instructor_id', $instructors->id)}}
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
                <a href="{{url('/instructors')}}" class="btn btn-primary btn-sm">
                    Back
                </a>
            </div>
            <h2>Edit Instructor: [{{ $instructors->id }}]</h2>

            <div class="row">
                <div class="col-md-5">

                    {!!  Form::model($instructors, ['url'=>"/instructors/$instructors->id", 'method'=>'patch']) !!}

                        @include('instructors._form')

                        <div class="form-group">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal">
                                Delete
                            </button>

                            <button class="btn btn-primary float-right">
                                Update Instructor
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