@extends('layouts.adminLayout')

@section('title', 'edit question')

@section('content')
  <section class="question">
    <form action="" method="post" enctype="multipart/form-data">
      @csrf
      <div class="imgBox">
        @if($item->default)
          <img src=/img/{{$item->img()}}.png>
        @else
          <img src="{{ asset('storage/img/'.$item->img())}}" style="width: 50vw;">
        @endif
      </div>
      <div class="about_img">
        <label for="img">問題画像変更</label>
        <input type="file" name="img" id="img">
        <label for="img_name">画像の名前（拡張子を除く）</label>
        <input type="text" name="img_name" id="img_name">
      </div>
      <label for="big_question_id">big question</label>
      <select name="big_question_id" id="big_question_id">
        @foreach ($big_questions as $big_question)
          @if($item->big_question_id === $big_question->id)
            <option value="{{$big_question->id}}" selected>
              {{$big_question->title()}}
            </option>
          @else
            <option value="{{$big_question->id}}">
              {{$big_question->title()}}
            </option>
          @endif
        @endforeach
      </select>
      <p>選択肢</p>
      <ul class="choices">
        @foreach($item->choices as $choice)
          <li class="choice"><input type="text" value="{{$choice->choice()}}" name="choice_{{$choice->id}}"></li>
          <label for="choice_value_{{$choice->id}}">正解</label>
          @if($choice->value)
          <input type="radio" name="choice_value" id="choice_value_{{$choice->id}}" value="{{$choice->id}}" checked>
          @else
          <input type="radio" name="choice_value" id="choice_value_{{$choice->id}}" value="{{$choice->id}}">
          @endif
        @endforeach
      </ul>

      <button>submit</button>
      <button type="button"><a href="/admin/delete_question/{{$item->id}}">delete</a></button>
      <button type="button"><a href="/admin/show/{{$item->big_question_id}}">back</a></button>
    </form>
  </section>
@endsection