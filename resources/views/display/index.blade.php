@extends('layouts.default')
@section('content')


<div class="container-fluid">
      <div class="row">
        <div class="col-sm-1" ></div>
            <div class="col-sm-6" >

    @foreach($displays as $getdisplay)
              <div class="workingdiv">
                <h4>  {{$getdisplay->title}} </h4>

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

             </div>
                 @endforeach
             <hr>



            </div>
            <div class="col-sm-4" >


            </div>
    </div>
</div>

@endsection
