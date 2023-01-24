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
        $items = Big_question::all();
        return view('kuizy.home', compact('items'));
    }
    public function quiz($big_question_id)
    {
        $items = Big_question::selectById($big_question_id);
        return view('kuizy.quiz', compact('big_question_id', 'items'));
    }
}
