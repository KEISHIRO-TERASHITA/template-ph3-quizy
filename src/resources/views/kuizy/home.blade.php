@extends('layouts.kuizy')

@section('title', 'kuizy')

@section('content')
<ul>
  @foreach($items as $item)
  <li>
    <a href="/quiz/{{$loop->iteration}}">{{$item->title()}}</a>
  </li>
  @endforeach
</ul>
@endsection