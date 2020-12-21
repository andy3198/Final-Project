<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Learner;

class LearnerController extends Controller
{
    public function index(){
        $learners = Learner::join('users', 'users.id', '=', 'learners.user_id')->select('users.lname', 'users.fname', 'learners.*')
        ->orderByRaw('lname', 'fname')->get();
        return view('learners.index', ['learners'=>$learners]);
    }

    public function create(){
        return view('learners.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'user_id' => 'required|numeric',
            'level' => 'required',
            'status' => 'required',
        ]);

        Learner::create($request->all());

        return redirect('/learners')->with('info', 'New learner has been Added.');
    }

    public function edite($id){
        $learners = Learner::find($id);

        return view('learners.edite', ['learners'=>$learners]);
    }

    public function update(Request $request, $id){
        $learners = Learner::find($id);

        $learners->update($request->all());

        return redirect('/learners')->with('info', "The record of Learner: $learners->id has been updated.");
    }

    public function delete(Request $request){
        $learnerId = $request['learner_id'];
        $learners =  Learner::find($learnerId);
        $name = $learners->level . "\n" . $learners->status;
        
        $learners->delete();

        return redirect('/learners')->with ('info', "The learner $learners->id \n $name been deleted.");
    }
}
