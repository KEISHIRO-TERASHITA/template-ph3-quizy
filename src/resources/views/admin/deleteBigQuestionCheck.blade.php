@extends('layouts.adminLayout')

@section('title', 'delete')

@section('content')

<h1>{{$item->title()}}</h1>
<p>Are you sure to delete this Big_question?</p>
<button>
  <a href="/admin/delete_title/{{$item->id()}}">yes</a>
</button>
<button>
  <a href="/admin">no</a>
</button>
