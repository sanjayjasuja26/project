@extends('layouts.default')
@section('content')
<div class="row centered-form">
   <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
     <div class="panel panel-default">
       <div class="panel-heading">
         <h3 class="panel-title">Please sign up here<small></small></h3>
       </div>
       <div class="panel-body">
         <form role="form" action="/signUp" method="post" >
           {{ csrf_field() }}
           @include('errors.error')
           <div class="row">
             <div class="form-group">
               <div class="form-group">
                 <input type="text" name="name" id="name" class="form-control input-sm" placeholder=" Name">
               </div>
             </div>

           </div>
          <div class="row">

           <div class="form-group">
             <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
           </div>
         </div>

           <div class="row">
             <div class="form-group">
               <div class="form-group">
                 <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
               </div>
             </div>

           </div>

          <div class="row">
           <div class="form-group">
             <div class="form-group">
               <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password">
             </div>
           </div>
         </div>

           <input type="submit" value="signUp" class="btn btn-info btn-block">

         </form>
       </div>
     </div>
   </div>
 </div>
</div>


@endsection
