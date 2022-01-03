@extends('layouts.app')

@section('header')
    Dashboard
@endsection

@section('content')
<br>
<br>
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($template as $item)
        <div class="col">
            <div class="card">
              <img src="{{ url('thumb/'.$item->image) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <a href="{{ route('detail_template', ['id'=>$item->id]) }}" class="card-title">{{$item->name}}</a>
                <p class="card-text">{{$item->description}}</p>
              </div>
            </div>
          </div>
        @endforeach



      </div>
</div>
@endsection
