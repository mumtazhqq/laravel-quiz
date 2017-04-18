<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Challange;
use Auth;
use App\Answer;
use App\Question;
use App\User;
use DB;
class ChallangeController extends Controller
{

    public function index() {
        $questions = Question::all();
        $answers = Answer::all();
        $users = User::all();
        $corrects = Answer::where('is_right', 1)->get();
        $challanges = Challange::all();
        //return Challange::all();
        return view('challange', compact(['questions', 'answers', 'users', 'corrects', 'challanges']));
    }

    public function store()
    {
        //dd(request()->all());
        //$myRadio = array('question-1', 'question-2');
        $challange = new Challange;
        $user = new User;
        $challange->user_id = Auth::user()->id;
        $challange->user_name = Auth::user()->name;
        $challange->user_email = Auth::user()->email;
        $challange->answers = request('question-1');
        // increment voted by 1 when save
        $challange->save();
        return redirect('/challange');
    }

}
