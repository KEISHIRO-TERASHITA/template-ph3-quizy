<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/sanitize.css" />
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <script src="{{ asset('/js/quiz.js') }}" defer></script>
  <title>{{$items[0]->title ?? 'kuizy'}}</title>
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
      @foreach($items as $item)
        @if ($loop->iteration % 3 === 1)
          <section class="question_container">
            <h1 class="title">{{$loop->index / 3 + 1}}. この地名はなんと読む？</h1>
            <div class="img_container">
              <img src="/img/{{$item->image}}.png" alt="">
            </div>
              <ul class="choice_box">
        @endif
                <li class="choice choice-{{$item->value}}">{{$item->choice}}</li>
        @if ($loop->iteration % 3 === 0)
              </ul>
              <div class="result_box hidden">
                <h2 class="result_box__title"></h2>
                <p>正解は「{{$item->choice}}」です！</p>
              </div>
          </section>
        @endif
      @endforeach
    @endif
  </main>
</body>

</html>