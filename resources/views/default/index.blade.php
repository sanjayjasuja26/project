
@extends('layouts.default')
@section('content')

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-1" ></div>
            <div class="col-sm-6" >

              @foreach($images as $imag)

              <div class="workingdiv">
                <h4>  {{$imag->title}}</h4>

                <div class="img-rounded">
                  <div class="textdiv">



              <a href="/disp/{{$imag->id}}" target="_blank">  <img src="/{{$imag->image}}" class="img-rounded" alt="Cinque Terre" ></a>

            </div>
                </div>
                <div><span>Points </span> <span class="badge">4</span>
                    <span> comments</span> <span class="badge">2</span>
                </div>
                <div>
                  <span class="glyphicon glyphicon-thumbs-up" style="margin-left:10px"></span>


                  <span class="glyphicon glyphicon-thumbs-down" style="margin-left:10px" ></span>


                  <div class="socialdiv" style="margin-bottom:20px;">
                  <i class="fa fa-facebook-square" style="font-size:24px"></i>
                  <a class="btn btn-social-icon btn-twitter">
                 <span class="fa fa-twitter"></span>
               </a>
                 </div>
               </div>

             </div>
             <hr>
             @endforeach


            </div>
            <div class="col-sm-4" >
                <div class="img-rounded">
          
                 </div>

            </div>
    </div>
</div>
@endsection
