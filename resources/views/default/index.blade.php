
@extends('layouts.default')
@section('content')

<div class="container-fluid">
      <div class="row">
            <div class="col-sm-6 col-xs-offset-3" >
              @foreach($images as $imag)
                  <div class="workingdiv">
                    <h3>  {{$imag->title}}</h3>
                      <div class="img-rounded">
                        <div class="textdiv">
                            <a href="/disp/{{$imag->id}}" target="_blank">  <img src="/{{$imag->image}}" class="img-rounded" alt="Cinque Terre" ></a>
                        </div>
                      </div>
                    </div>
             <hr>
                  @endforeach
            </div>
    </div>
</div>
@endsection
