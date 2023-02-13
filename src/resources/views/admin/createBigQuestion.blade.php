@extends('layouts.adminLayout')

@section('title', 'create_big_Q')


@section('content')
  <form action="/admin/create_big_question" method="post">
    @csrf
    <p>write your new title</p>
    <input type="text" name="big_q_title">
    <button>submit</button>
  </form>
@endsection
