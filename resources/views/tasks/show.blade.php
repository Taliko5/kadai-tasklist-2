@extends('layouts.app')

@section('content')
<h1>id = {{ $task->id }} のメッセージ詳細ページ</h1>


<table class="table table-bordered table-dark">
<tr>
    <th>職業</th>
    <td>{{ $task->status }}</td>
</tr>
<tr>
    <th>テキスト</th>
    <td>{{ $task->content }}</td>
</tr>
</table>
    
    {!! link_to_route('tasks.edit', 'このメッセージを編集', ['id' => $task->id], ["class"=> "btn btn-warning"]) !!}
    
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
 {!! Form::submit('削除', ['class' => 'btn btn-primary'] ) !!}
    {!! Form::close() !!}

@endsection