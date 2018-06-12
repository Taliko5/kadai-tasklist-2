@extends('layouts.app')

@section('content')
<div class="text-left">
    <h2> Log in</h2>
</div>

<div class="col-md-3 col-md-offset-4">
     {!! Form::open(['route' => 'login.post']) !!}
     <div class="form-group">
         {!! Form::label('email', 'Email') !!}
         {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
         
     </div>
     <div class="form-group">
         {!! Form::label('password', 'Password') !!}
         {!! Form::password('password',['class' => 'form-control']) !!}
         
     </div>
     
      {!! Form::submit('Log in' , ["class" => 'btn btn-warning btn-block']) !!}
      {!! Form::close() !!}
   
   <p> New user? {!! Link_to_route('signup.get','Sign up here!') !!}
</div>
</div>
@endsection
