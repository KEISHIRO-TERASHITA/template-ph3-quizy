@extends('layouts.adminLayout')

@section('title', 'create question')

@section('content')
  <form method="POST" action="" enctype="multipart/form-data">
    @csrf
    <h1>小問追加</h1>
    <p>{{$big_question->title}}</p>
    <h2>画像追加(.png)</h2>
    <input type="file" name="image" accept=".png">
    <label for="img_name">画像の名前（拡張子を除く）</label>
    <input type="text" name="img_name" id="img_name">
    <h2>選択肢</h2>
    <ul>
      <li>
        <input type="text" name="choice_1">
        <label for="choice_value_1">正解</label>
        <input type="radio" name="choice_value" id="choice_value_1" value=0 checked>
      </li>
      <li>
        <input type="text" name="choice_2">
        <label for="choice_value_2">正解</label>
        <input type="radio" name="choice_value" id="choice_value_2" value=1>
      </li>
      <li>
        <input type="text" name="choice_3">
        <label for="choice_value_3">正解</label>
        <input type="radio" name="choice_value" id="choice_value_3" value=2>
      </li>
    </ul>
    <button>submit</button>
  </form>
  <button><a href="/admin/show/{{$big_question_id}}">back</a></button>
@endsection
