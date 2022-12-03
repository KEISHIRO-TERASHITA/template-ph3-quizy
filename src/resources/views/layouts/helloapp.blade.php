<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
</head>
<body>
  @component('components.header')
    @slot('var')
    変数も使えるよ
    @endslot
  @endcomponent
  <h1>@yield('title')</h1>
  @yield('content')
</body>
</html>