@extends('layouts.default')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-5 col-xs-offset-4">

<form action="/admin/post/create" method="post" enctype="multipart/form-data">
   {{ csrf_field() }}
  <textarea  type="text" name="title" id="title" placeholder="Place your Title here...">

  </textarea>

    <input type="file" name="image" id="image">
    <input type="submit" value="upload" >
</form>
 </div>
</div>
</div>




  @endsection
