<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('script')
  @yield('style')
  <title>@yield('title')</title>
</head>
<body>
  <main>@yield('content')</main>
</body>
</html>