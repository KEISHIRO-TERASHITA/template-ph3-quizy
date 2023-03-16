@extends('layouts.kuizy')

@section('title', 'kuizy')

@section('content')
<ul>
  @foreach($items as $item)
  <li>
    <a href="/quiz/{{$item->id}}">{{$item->title()}}</a>
  </li>
  @endforeach
</ul>
@endsection