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

                <img src="/{{$getdisplay->image}}" class="img-rounded" alt="Cinque Terre" >
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


                 @endforeach
             <hr>


             <form action="#" method="POST">
               {{ csrf_field() }}
            

                 <textarea type="text" class="textdiv" name="title" id="title" placeholder="Title" required>
                 </textarea>


                 <input type="submit" value="comment" name="comment">
             </form>
             <hr>


            </div>
            </div>
            <div class="col-sm-4" >


            </div>
    </div>
</div>

@endsection
