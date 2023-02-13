@extends('layouts.adminLayout')

@section('title', 'editTitle')

@section('content')
<form action="" method="post">
  @csrf
  <input type="text" value="{{$big_question->title()}}" name="title">
  <button>submit</button>
</form>