
@extends('layouts.default')
@section('content')

<div class="container-fluid">
      <div class="row">
          @foreach($posts as $post)
        <div class="col-sm-8 col-xs-offset-2">
          <div class="row">
            <div class="col-sm-8">
              <div class="manage-title">
            <h3>{{$post->title}}</h3>
          </div>
            </div>
            <div class="col-sm-8">
              <div class="manageimage">
          <img src="{{$post->image}}">
        </div>
            </div>
          </div>
    </div>
      @endforeach
</div>
@endsection
