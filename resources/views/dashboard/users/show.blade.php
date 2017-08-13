@extends('layouts.app')

@section('title', 'User')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
        	<div class="row">
        		<div class="col-sm-6">{{ $user->name }}</div>
        		<div class="col-sm-6">
        			<a href="/users" class="pull-right">All Users</a>
        		</div>
        	</div>
        </div>

        <div class="panel-body">
           <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                        <td ><label for="user">Full Name: </label></td>
                        <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                        <td ><label for="body">Email Address: </label></td>
                        <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                        <td ><label for="created">Created Date: </label></td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        </tr>
                        <tr>
                        <td ><label for="updated">Updated Date: </label></td>
                        <td>{{ $user->updated_at->diffForHumans() }}</td>
                        </tr>
                    </tbody>
                </table>
            </div> 
        </div>
    </div>
@endsection
