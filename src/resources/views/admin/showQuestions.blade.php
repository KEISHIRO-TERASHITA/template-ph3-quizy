@extends('layouts.adminLayout')

@section('title', 'questions')

@section('script')
  <script src="{{asset('/js/order.js')}}" defer></script>
@endsection

@section('style')
  <style>
    .item{
      display: flex;
    }
  </style>
@endsection

@section('content')
  <form action="" method="post" >
    <button>save order</button>
    <button type="button"><a href="/admin">back</a></button>
    @csrf
    <div class="box">
      @foreach($items as $item)
      <section class="item">
        <div class="imgBox" style="width: 100%;">
          <a href="/admin/edit_question/{{$item->id}}">
            @if($item->default)
              <img src=/img/{{$item->img()}}.png>
            @else
              <img src="{{ asset('storage/img/'.$item->img())}}" style="width: 100%;">
            @endif
          </a>
        </div>
        <select class="pulldown" name="order_{{$item->id}}">
          @foreach($items as $datum)
            @if($datum->id === $item->id)
              <option value="{{$loop->iteration}}" selected>{{$loop->iteration}}番目</option>
            @else
              <option value="{{$loop->iteration}}">{{$loop->iteration}}番目</option>
            @endif
          @endforeach
        </select>
      </section>
      @endforeach
    </div>
  </form>
  <button style="height: 40px;">
    <a href="/admin/create_question/{{$items[0]->big_question_id}}">create question</a>
  </button>
  <style>
    main{
      display: flex;
      justify-content: center;
      width: 60vw;
      margin: 0 auto;
      max-width: 500px;
    }
    .imgBox{
      width: 80%;
    }
  </style>
@endsection