@extends('layouts.adminLayout')

@section('title', 'delete question')

@section('content')
  <form action="" method="post">
    @csrf
    @if($item->default)
      <img src=/img/{{$item->img()}}.png>
    @else
      <img src="{{ asset('storage/img/'.$item->img())}}" style="width: 50vw;">
    @endif
    <p>Are you sure to delete this question?</p>
    <button type="submit">
      yes
    </button>
    <button type="button">
      <a href="/admin/edit_question/{{$item->id}}">no</a>
    </button>
  </form>
@endsection