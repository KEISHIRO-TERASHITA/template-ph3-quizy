<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;

class HelloController extends Controller
{
    //
    public function index (Request $request) {
        // viewの第二引数は、そのままテンプレートに渡される。下の形だと、例えばテンプレート内で var_dump($data) とかできる
        // $request->data は、HelloMiddleware 内で定義
        // 他で特に定義していない$request->id は、クエリパラメータ。なければnullで、エラーにならなかった
        $data = [
            'data' => $request->data,
            'id' => $request->id,
            'msg' => 'お名前を入力してください'
        ];
        return view ('hello.index', $data);
    }

    public function post (HelloRequest $request) {
        $data = ['msg' => '正しく入力されました！'];
        return view('hello.index', $data);
    }
}
