@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
<h1> id:{{$task -> id }} のメッセージ編集ページ</h1>
{!! Form::model($task, ['route' => ['tasks.update', $task->id],'method' =>'put']) !!}
<div class="form-group">
{!! Form::label('status', '職業:') !!}
        {!! Form::text('status', null, ['class'=>'form-control']) !!}
  </div>
 <div class="form-group">
     {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content', null, ['class'=>'form-control']) !!}
    </div>
{!! Form::submit('更新', ['class'=> 'btn btn-warning'])!!}

</div>
</div>
 {!! Form::close() !!}
@endsection