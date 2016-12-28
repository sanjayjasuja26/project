@extends('layouts.default')
@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-6 col-sm-offset-3" >
              @foreach($displays as $getdisplay)
               <h2>  {{$getdisplay->title}} </h2>
                  <div class="workingdiv">
                    <div class="img-rounded">
                        <div class="textdiv">
                          <img src="/{{$getdisplay->image}}" class="img-rounded" alt="Cinque Terre" >
                        </div>
                    </div>
              @endforeach
                  <hr>
                      <div>
                        <span> comments</span> <span class="badge">  {{$comments->count()}}</span>

                        @foreach($displays as $getdisplay)
                          @if($likes)
                            <a href="/dislike/{{Auth::user()->id}}" > <span> dislike</span></a>
                          @else
                            <a href="/like/{{$getdisplay->id}}" > <span> like</span></a>
                          @endif
                            <span class="badge"> {{$getdisplay->like->count()}} </span>
                        @endforeach
                      </div>
                  <hr>
                      <form action="/disp" method="POST">
                      {{ csrf_field() }}
                        <textarea type="text" class="textdiv" name="comment" id="comment" placeholder="Title" required>
                        </textarea>
                      @foreach($displays as $getdisplay)
                        <input type="hidden" name="upload_id" id="upload_id" value="{{$getdisplay->id}}">
                      @endforeach
                        <input type="submit" value="submit">
                      </form>

                  <hr>
                      @foreach($comments as $comment)
                          <div class="row" style="margin-top:20px" >
                              <div class="col-sm-2" >  <img src="/images/gaming.jpeg" class="img-rounded" alt="Cinque Terre" >
                             </div>
                            <div class="col-sm-8" >
                              <strong>{{$comment->user->name}}</strong> 

                              @if((Auth::check()) && Auth::user()->id==$comment->user_id)<span style="float:right"><a href="/delete/{{$comment->id}}">delete</a></span>@endif
                            </br>
                             {{$comment->comment}}
                            </div>
                          </div>
                      @endforeach
                  <hr>
                  </div>

            </div>
        </div>
    </div>

@endsection
