@extends('layouts.default')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to continue </h1>
            <div class="account-wall">
              @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
              @endif
                <form class="form-signin" action="/login" method="post">
                  {{ csrf_field() }}
                  @include('errors.error')
                 <input type="text" name="email" class="form-control" placeholder="Email" required autofocus>
                 <input type="password" name="password" class="form-control" placeholder="Password" required>
                 <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
            </div>
      </div>
    </div>
</div>

@endsection
