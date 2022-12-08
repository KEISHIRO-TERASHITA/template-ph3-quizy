<?php
$questions = [
  '1' =>
  [
    ['たかなわ', 'たかわ', 'こうわ'],
    ['かめいど', 'かめと', 'かめど'],
    ['こうじまち', 'おかとまち', 'かゆまち'],
  ],
  '2' =>
  [
    ['むかいなだ', 'むきひら', 'むこうひら'],
  ]
];

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/sanitize.css" />
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <script src="{{ asset('/js/quiz.js') }}" defer></script>
  <title>Document</title>
</head>

<body>
  <main>
    @if($big_question_id === '0')
      <ul>
        <li>
          <a href="/quiz/1">ガチで東京の人しか解けない！ #東京の難読地名クイズ</a>
        </li>
        <li>
          <a href="/quiz/2">広島県民なら解けて当然？ #広島県の難読地名クイズ</a>
        </li>
      </ul>
    @else
      @foreach($questions[$big_question_id] as $question)
      <section class="question_container">
        <h1 class="title">{{$loop->iteration}}. この地名はなんと読む？</h1>
        <div class="img_container">
          <img src=/img/{{$big_question_id}}-{{$loop->iteration}}.png alt="">
        </div>
        <ul class="choices">
          @foreach($question as $choice)
            <li class="choice choice-{{$loop->iteration}}">{{$choice}}</li>
          @endforeach
        </ul>
        <div class="result_box hidden">
          <h2 class="result_box__title"></h2>
          <p>正解は「{{$question[0]}}」です！</p>
        </div>
      </section>
      @endforeach
    @endif
  </main>
</body>

</html>