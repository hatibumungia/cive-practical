@extends('layouts.app')

@section('title', 'Update Task')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="row">
        		<div class="col-sm-6">Update Task</div>
        		<div class="col-sm-6">
        			<a href="/tasks" class="pull-right">All Tasks</a>
        		</div>
        	</div>
        </div>

        <div class="panel-body">
            <form action="/tasks/{{ $task->id }}" method="POST" role="form" class="form-horizontal">

            	{{ csrf_field() }}
                {{ method_field('PATCH') }}
            
            	@include('dashboard.tasks._form')

            	<div class="form-group">
            		<div class="col-sm-3 col-sm-offset-3">
            			<button type="submit" class="btn btn-primary">Update Task</button>
            		</div>
            	</div>

            </form>
        </div>
    </div>
@endsection
