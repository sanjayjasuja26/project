@extends('layouts.adminlayout')
@section('content')
<div class="container">
  <a href="/admin/post/create" style="float:right" class="btn btn-primary">Create Post</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td><img src="/{{$post->image}}" height="60" width="60"></td>
                <td> <a href="/admin/post/edit/{{$post->id}}" >edit</a> | <a href="/admin/post/delete/{{$post->id}}" >delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
    @endsection
