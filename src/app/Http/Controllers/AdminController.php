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
    public function index()
    {
        $items = Big_question::show()->get();
        return view('admin/bigQuestions', compact('items'));
    }

    public function create_big_question()
    {
        return view('admin/createBigQuestion');
    }

    public function store_big_question_title(Request $request)
    {
        DB::table('big_questions')->insert(
            [
                [
                    'title' => $request['big_q_title'],
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
            ]
        );
        return (redirect('/admin'));
    }

    public function delete_big_question($big_question_id)
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

        return (redirect('/admin'));
    }

    public function delete_title($big_question_id)
    {
        $big_question = Big_question::where('id', $big_question_id)->first();
        $big_question->deleted_at = new DateTime('now');
        $big_question->updated_at = new DateTime('now');

        $big_question->save();

        return (redirect('/admin'));
    }

    public function change_title_order()
    {
        $items = Big_question::show()->get();
        return view('admin/changeTitleOrder', compact('items'));
    }
    public function post_changed_title_order(Request $request)
    {
        $big_questions = Big_question::show()->get();
        foreach ($big_questions as $big_question) {
            $big_question->order = $request['order_' . $big_question->id()];
            $big_question->updated_at = new DateTime('now');
            $big_question->save();
        }
        return (redirect('/admin'));
    }

    // 小問ここから
    // 小問一覧
    public function show_questions($big_question_id)
    {
        $items = Question::show()->where('big_question_id', $big_question_id)->get();
        return view('admin/showQuestions', compact('items'));
    }
    // 小問追加
    public function create_question($big_question_id)
    {
        $big_question = Big_question::find($big_question_id);
        return view('admin/createQuestion',compact('big_question_id', 'big_question'));
    }
    public function post_question($big_question_id, Request $request)
    {
        $request->file('image')->storeAs('public/img', $request['img_name']);
        $question_id = DB::table('questions')->insertGetId(
            [
                'big_question_id' => $big_question_id,
                'image' => $request['img_name'],
                'default' => false,
                'created_at' => new DateTime(),
            ]
        );
        for($i = 0; $i<3; $i++){
            DB::table('choices')->insert(
                [
                    [
                        'question_id' => $question_id,
                        'choice' => $request['choice_' . ($i+1) ],
                        'value' => intval($request['choice_value']) === $i,
                        'created_at' => new DateTime(),
                    ],
                ]
            );
        }
        return (redirect('/admin/show/' . $big_question_id));
    }

    // 小問順序変更
    public function change_questions_order($big_question_id, Request $request)
    {
        $items = Question::show()->where('big_question_id', $big_question_id)->get();
        foreach($items as $item)
        {
            $item->order = $request['order_' . $item->id];
            $item->updated_at = new DateTime('now');
            $item->save();
        }
        return redirect('/admin/show/'. $big_question_id);
    }
    // 小問修正
    public function edit_question ($question_id)
    {
        $item = Question::find($question_id);
        $big_questions = Big_question::show()->get();
        return view('admin/editQuestion', compact('item', 'big_questions'));
    }
    // 修正確定
    public function store_edited_question($question_id, Request $request)
    {
        $item = Question::find($question_id);
        $item->big_question_id = $request['big_question_id'];
        if($request['img'])
        {
            $request->file('img')->storeAs('public/img', $request['img_name']);
            $item->image = $request['img_name'];
            $item->default = false;
        }
        $item->save();
        foreach($item->choices as $choice)
        {
            $choice->choice = $request['choice_' . $choice->id];
            $choice->updated_at = new DateTime('now');
            if($choice->id === intval($request['choice_value'])){
                $choice->value = true;
            } else {
                $choice->value = false;
            }
            $choice->save();
        }
        return redirect('admin/edit_question/'. $question_id);
    }

    // 小問削除確認
    public function delete_check_question($question_id){
        $item = Question::find($question_id);
        return view('admin/deleteQuestion', compact('item'));
    }
    // 小問削除
    public function delete_question($question_id)
    {
        $item = Question::find($question_id);
        $item->deleted_at = new DateTime('now');
        $item->save();
        return redirect('/admin/show/' . $item->big_question_id);
    }
}
