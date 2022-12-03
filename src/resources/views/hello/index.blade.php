@extends('layouts.helloapp')

@section('title', 'index')

@section('content')
<p>{{$data ?? ''}}</p>
<p>クエリパラメータ id = {{$id ?? ''}}</p>
<p>{{$msg}}</p>
<form action="/hello" method="POST">
  <!-- アドレスが同じでも、method が違えばルーティングを区別できる -->
  @csrf
  <!-- formはこれがないとダメ -->
  @error('name')
    <p>{{$message}}</p>
  @enderror
  <input type="text" name="name" value="{{old('name')}}"><br>
  @if ($errors->has('email'))
    @foreach ($errors->get('email') as $error)
      <p>{{$error}}</p>
    @endforeach
  @endif
  <input type="text" name="email" value="{{old('email')}}"><br>
  @if ($errors->has('age'))
    @foreach ($errors->get('age') as $error)
      <p>{{$error}}</p>
    @endforeach
  @endif
  <input type="text" name="age" value="{{old('age')}}"><br>
  <input type="submit">
</form>
@endsection