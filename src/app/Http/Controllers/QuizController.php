<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    public function index($big_question_id = '0') {
        return view('quiz', compact('big_question_id'));
    }
}
