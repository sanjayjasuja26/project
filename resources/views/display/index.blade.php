@extends('layouts.default')
@section('content')


<div class="container-fluid">
      <div class="row">
        <div class="col-sm-1" ></div>
            <div class="col-sm-6" >

    @foreach($displays as $getdisplay)
      <h2>  {{$getdisplay->title}} </h2>
              <div class="workingdiv">


                <div class="img-rounded">
                  <div class="textdiv">

                <img src="/{{$getdisplay->image}}" class="img-rounded" alt="Cinque Terre" >
              </div></div>
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


                 @endforeach
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

                   <div class="col-sm-2" >  <img src="/images/gaming.jpeg" class="img-rounded" alt="Cinque Terre" ></div>
                     <div class="col-sm-6" >
                       {{$comment->comment}}</div>
                       <div class="col-sm-2" ></div>



               </div>
                     <hr>

                  @endforeach





            </div>
            </div>
            <div class="col-sm-4" >


            </div>
    </div>
</div>

@endsection
