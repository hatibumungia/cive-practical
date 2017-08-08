@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="row">
        		<div class="col-sm-6">Add Task</div>
        		<div class="col-sm-6">
        			<a href="/tasks" class="pull-right">All Tasks</a>
        		</div>
        	</div>
        </div>

        <div class="panel-body">
            <form action="/tasks" method="POST" role="form" class="form-horizontal">

            	{{ csrf_field() }}
            
            	@include('dashboard.tasks._form')

            	<div class="form-group">
            		<div class="col-sm-3 col-sm-offset-3">
            			<button type="submit" class="btn btn-primary">Add Task</button>
            		</div>
            	</div>

            </form>
        </div>
    </div>
@endsection
