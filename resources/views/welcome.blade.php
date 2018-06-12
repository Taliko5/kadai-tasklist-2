@extends('layouts.app')

@section('content')

<div class-"col=xs=md-4">

</div>
 

 
 <div class="center fluid jumbotron">
     <div class="text-center">
         <h3>Tasklist</h3>
         {!! link_to_route('signup.get', 'Sign up here', null, ['class' => 'btn btn-lg btn-success']) !!}
     </div>
     <br>
     <div class="text-center">
         {!! link_to_route('login', ' Login ', null, ['class' => 'btn btn-lg btn-primary']) !!}
     </div>
 </div>

@endsection
