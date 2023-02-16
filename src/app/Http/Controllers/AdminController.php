<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Big_question;
use App\Question;
use App\Choice;
use DateTime;

class AdminController extends Controller
{
    // 大問系！！！
    public function index () {
        $items = Big_question::show()->get();
        return view('admin/bigQuestions', compact('items'));
    }

    public function create_big_question () {
        return view('admin/createBigQuestion');
    }

    public function store_big_question_title (Request $request) {
        DB::table('big_questions')->insert(
            [
                [
                'title' => $request['big_q_title'],
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                ],
            ]
        );
        return(redirect('/admin'));
    }

    public function delete_big_question ($big_question_id) 
    {
        $item = Big_question::selectById($big_question_id);
        return view('admin.deleteBigQuestionCheck', compact('item'));
    }

    public function edit_title($big_question_id)
    {
        $big_question = Big_question::where('id', $big_question_id)->first();
        return view('admin.editTitle', compact('big_question'));
    }
    public function store_edited_title($big_question_id, Request $request)
    {
        $big_question = Big_question::where('id', $big_question_id)->first();
        $big_question->title = $request['title'];
        $big_question->updated_at = new DateTime('now');
        $big_question->save();

        return(redirect('/admin'));
    }

    public function delete_title($big_question_id)
    {
        $big_question = Big_question::where('id', $big_question_id)->first();
        $big_question->deleted_at = new DateTime('now');
        $big_question->updated_at = new DateTime('now');

        $big_question->save();

        return(redirect('/admin'));
    }

    public function change_title_order(){
        $items = Big_question::show()->get();
        return view('admin/changeTitleOrder', compact('items'));
    }
    public function post_changed_title_order(Request $request){
        $big_questions = Big_question::show()->get();
        foreach($big_questions as $big_question){
            $big_question->order = $request['order_' . $big_question->id()];
            $big_question->updated_at = new DateTime('now');
            $big_question->save();
        }
        return(redirect('/admin'));
    }

    // 小問ここから
    public function show_questions($big_question_id){
        
    }
}
