<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    /*public function index(){
        $courses = Course::join('instructors', 'instructors.id', '=', 'courses.instructor_id')->select('instructors.aoe', 'instructors.rating', 'courses.*')
        ->orderByRaw('aoe', 'rating')->get();
        return view('courses.index', ['courses'=>$courses]);
    }*/

    public function index(){
        $courses = Course::get();
        return view('courses.index', ['courses'=>$courses]);
    }

    public function create(){
        return view('courses.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            
            'name'          => 'required',
            'description'   => 'required',
            'tags'          => 'required',
            'start'         => 'required|numeric',
            'end'           => 'required|numeric',
            'instructor_id' => 'required|numeric',
        ]);

        Course::create($request->all());

        return redirect('/courses')->with('info', 'New courses has been Added.');
    }

    public function edite($id){
        $courses = Course::find($id);

        return view('courses.edite', ['courses'=>$courses]);
    }

    public function update(Request $request, $id){
        $courses = Course::find($id);

        $courses->update($request->all());

        return redirect('/courses')->with('info', "The record of Course: $courses->id has been updated.");
    }

    public function rules(){
        return [
            'name'          => 'required',
            'description'   => 'required',
            'start'         => 'required|before:end',
            'end'           => 'required|after:start',
            'tags'          => 'required',
            'instructor_id' => 'required|numeric',
        ];
    }


    public function delete(Request $request){
        $courseId = $request['course_id'];
        $courses =  Course::find($courseId);
        $name = $courses->name . "\n" . $courses->description . "\n" . $courses->start . "\n" . $courses->end;
        
        $courses->delete();

        return redirect('/courses')->with ('info', "The Course $courses->id \n $name has been deleted.");
    }

}

