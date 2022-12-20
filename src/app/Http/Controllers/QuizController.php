<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    //
    public function index($big_question_id = '0') {
        $items = DB::table('big_questions')
        ->leftJoin('questions', 'big_questions.id', '=', 'questions.big_question_id')
        ->leftJoin('choices', 'questions.id', '=', 'choices.question_id')
        ->where('big_question_id', $big_question_id)
        ->get();
        return view('quiz', compact('big_question_id', 'items'));
    }
}
