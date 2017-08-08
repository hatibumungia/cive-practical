@extends('layouts.app')

@section('title', 'Task')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="row">
        		<div class="col-sm-6">{{ $task->title }}</div>
        		<div class="col-sm-6">
        			<a href="/tasks" class="pull-right">All Tasks</a>
        		</div>
        	</div>
        </div>

        <div class="panel-body">
           <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                        <td ><label for="task">Task Title: </label></td>
                        <td>{{ $task->title }}</td>
                        </tr>
                        <tr>
                        <td ><label for="body">Task Body: </label></td>
                        <td>{{ $task->body }}</td>
                        </tr>
                        <tr>
                        <td ><label for="task">Task Status: </label></td>
                        <td>
                            @if($task->status == false)
                                Incomplete
                            @else
                                Complete
                            @endif
                        </td>
                        </tr>
                        <tr>
                        <td ><label for="task">Created Date: </label></td>
                        <td>{{ $task->created_at->diffForHumans() }}</td>
                        </tr>
                        <tr>
                        <td ><label for="task">Updated Date: </label></td>
                        <td>{{ $task->updated_at->diffForHumans() }}</td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
@endsection
