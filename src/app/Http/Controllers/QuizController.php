<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Big_question;
use App\Question;
use App\Choice;

class QuizController extends Controller
{
    //
    public function index()
    {
        $items = Big_question::show()->get();
        return view('kuizy.home', compact('items'));
    }
    public function quiz($big_question_id)
    {
        $title = Big_question::find($big_question_id)->title;
        $items = Question::show()->where('big_question_id', $big_question_id)->get();
        return view('kuizy.quiz', compact('big_question_id', 'title', 'items'));
    }
}
