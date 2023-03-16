@extends('layouts.kuizy')

@section('title', $title)

@section('script',)
  <script src="{{ asset('/js/quiz.js') }}" defer></script>


@section('content')
  @foreach($items as $question)
    <section class="question_container">
      <h1 class="title">{{$loop->iteration}}. この地名はなんと読む？</h1>
      <div class="img_container">
        @if($question->default)
          <img src=/img/{{$question->img()}}.png>
        @else
          <img src="{{ asset('storage/img/'.$question->img())}}">
        @endif
      </div>
      <ul class="choice_box">
        @foreach($question->Choices as $choice)
          <li class="choice choice-{{$choice->value()}}">{{$choice->choice()}}</li>
        @endforeach
      </ul>
      <div class="result_box hidden">
        <h2 class="result_box__title"></h2>
        <p class="result_box__message"></p>
      </div>
    </section>
  @endforeach
@endsection
