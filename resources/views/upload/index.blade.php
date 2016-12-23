@extends('layouts.default')
@section('content')


<div class="row centered-form">
   <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
     <div class="panel panel-default">
       <div class="panel-heading">
         <h3 class="panel-title">  Select image to upload:<small></small></h3>
       </div>
       <div class="panel-body">
         <form action="#" method="post">

             <input type="text" name="title" id="title">
             <input type="submit" value="title" name="submit">
         </form>

<form action="/image" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}

    <input type="file" name="image" id="image">
    <input type="submit" value="Upload Image" name="submit">
</form>
</div>
</div>
</div>
</div>
</div>


@endsection
