@extends('layouts.default')
@section('content')



<div class="container">
<a href="/upload" class="btn btn-info" role="button" style="float:right">Upload</a>
  <table class="table table-striped">
    <thead>

      <tr>
        <div class="row">
            <div class="col-sm-1" >
              <th>Id</th>
            </div>
            <div class="col-sm-3" >
               <th>Title</th>
            </div>
              <div class="col-sm-1" >
               <th>User Id</th>
              </div>
              <div class="col-sm-3" >
               <th>Image</th>
              </div>
              <div class="col-sm-4" >
             <th>Action</th>
           </div>
        </div>
      </tr>

    </thead>
    <tbody>
@foreach($manages as $manage)
      <tr>
        <div class="row">
            <div class="col-sm-1" >
                <td style="word-wrap: break-word;">{{$manage->id}}</td>
            </div>
            <div class="col-sm-2" >
                 <td style="word-wrap: break-word;;">{{$manage->title}}</td>
            </div>
              <div class="col-sm-1" >
                <td style="word-wrap: break-word;">{{$manage->user_id}}</td>
              </div>
              <div class="col-sm-2 manageimage " >
                 <td style="word-wrap: break-word;"> <img src="/{{$manage->image}}"  class="img-rounded" alt="Cinque Terre" height="50" width="50" ></td>
              </div>
              <div class="col-sm-2" >
               <td class="tabledata"> <a href="#" >edit</a>
               <a href="/delete/{{$manage->id}}"  style="float:right">delete</a></td>
           </div>
        </div>
      </tr>
      @endforeach


    </tbody>
  </table>
</div>

@endsection
