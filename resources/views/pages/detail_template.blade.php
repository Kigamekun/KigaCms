@extends('layouts.app')

@section('header')
    Detail
@endsection

@section('content')
<br>
<br>
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($data as $item)
        <div class="col">
            <div class="card">

              <div class="card-body">
                <a href="{{ route('edit_sub_template', ['id'=>$item->id]) }}" class="card-title">{{$item->name}}</a>

              </div>
            </div>
          </div>
        @endforeach



      </div>
</div>
@endsection
