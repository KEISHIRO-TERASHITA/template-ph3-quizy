@extends('layouts.adminLayout')

@section('title', 'big_question')

@section('content')
  <ul>
    @foreach($items as $item)
      <li>
        <a href="/admin/show/{{$item->id()}}">{{$item->title()}}</a>
        <button>
          <a href="/admin/edit_title/{{$item->id()}}">edit</a>
        </button>
        <button>
          <a href="/admin/delete_big_question/{{$item->id()}}">delete</a>
        </button>
      </li>
    @endforeach
  </ul>
  <button>
    <a href="/admin/create_big_question">create big question</a>
  </button>
@endsection
