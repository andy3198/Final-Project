<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;


class InstructorController extends Controller
{
    public function index(){
        $instructors = Instructor::join('users', 'users.id', '=', 'instructors.user_id')->select('users.lname', 'users.fname', 'instructors.*')
        ->orderByRaw('lname', 'fname')->get();
        return view('instructors.index', ['instructors'=>$instructors]);
    }

    public function create(){
        return view('instructors.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'user_id' => 'required|numeric',
            'aoe' => 'required',
            'rating' => 'required|numeric',
        ]);

        Instructor::create($request->all());

        return redirect('/instructors')->with('info', 'New instructor has been Added.');
    }

    public function edite($id){
        $instructors = Instructor::find($id);

        return view('instructors.edite', ['instructors'=>$instructors]);
    }

    public function update(Request $request, $id){
        $instructors = Instructor::find($id);

        $instructors->update($request->all());

        return redirect('/instructors')->with('info', "The record of Instructor: $instructors->id has been updated.");
    }

    public function delete(Request $request){
        $instructorId = $request['instructor_id'];
        $instructors =  Instructor::find($instructorId);
        $name = $instructors->aoe . "\n" . $instructors->rating;
        
        $instructors->delete();

        return redirect('/instructors')->with ('info', "The Instructor $instructors->id \n $name has been deleted.");
    }

}
