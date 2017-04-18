<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Challange;
use Auth;
use App\Answer;
use App\Question;

class ChallangeController extends Controller
{
    
    public function index() {
        $questions = Question::all();
        $answers = Answer::all();
        return Challange::all();
        return view('challange', compact(['questions', 'answers']));
    }
    
    public function store() 
    {
        //dd(request()->all());
        $myRadio = array('question-1', 'question-2');
        $challange = new Challange;
        $challange->user_id = Auth::user()->id;
        $challange->user_name = Auth::user()->name;
        $challange->user_email = Auth::user()->email;
        $challange->answers = json_encode(request($myRadio));
        $challange->save();
        return redirect('/challange');
    }
}
