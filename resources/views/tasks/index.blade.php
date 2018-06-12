@extends('layouts.app')

@section('content')
<!-- this is a space fpr contents for index -->
<h1>メッセージ一覧</h1>
@foreach ($tasks as $task)
        <table class="table table-bordered table-dark">
            <thead>
               <tr>
                    <th>ID</th>
                    <th>status</th>
                    <th>text</th>
                </tr>
            </thead>
            <tbody>
                 <tr><td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} </td>
                <td>  {{ $task->status }}  </td>
                <td> {{ $task->content }} </span>  </td>
           </tr>
            @endforeach
        </tbody>
        </table>
            
  {!! link_to_route('tasks.create', '新規メッセージの投稿', null, ['class'=>'btn btn-warning']) !!}

@endsection


 