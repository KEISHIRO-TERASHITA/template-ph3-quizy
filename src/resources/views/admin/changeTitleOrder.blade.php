@extends('layouts.adminLayout')

@section('title', 'change_title_order')

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
  <form action="" method="post">
    @csrf
    <div class="box">
      @foreach($items as $item)
      <section class="item">
        <div>{{$item->title()}}</div>
        <select class="pulldown" name="order_{{$item->id()}}">
          @foreach($items as $datum)
            @if($datum->id() === $item->id())
              <option value="{{$loop->iteration}}" selected>{{$loop->iteration}}番目</option>
            @else
              <option value="{{$loop->iteration}}">{{$loop->iteration}}番目</option>
            @endif
          @endforeach
        </select>
      </section>
      @endforeach
    </div>
    <button>submit</button>
  </form>
@endsection
