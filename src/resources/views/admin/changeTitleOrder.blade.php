@extends('layouts.adminLayout')

@section('title', 'change_title_order')

@section('content')
  <ul>
    @foreach($items as $item)
      <li>{{$item->title()}}</li>
    @endforeach
  </ul>
@endsection
