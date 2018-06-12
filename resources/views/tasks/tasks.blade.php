@extends('layouts.app')
@section('content')
<!-- this is a space fpr contents for index -->
<h1>メッセージ一覧</h1>

(Auth::check())
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>status</th>
                    <th>text</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($tasks as $task)
             <tr><td> </td>
                <td>  {{ $task->status }} </td>
                <td> {{ $task->content }} </td>
           </tr>
            @endforeach
        </tbody>
        </table>
            
 
    <br>
  {!! link_to_route('tasks.create', '新規メッセージの投稿', null, ['class'=>'btn btn-warning']) !!}

@endsection


