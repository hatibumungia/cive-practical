@extends('layouts.app')

@section('title', 'All Users')

@section('content')
<div class="panel panel-default">
	<div class="panel-heading">
		<div class="row">
			<div class="col-sm-6">All Users <span class="badge">{{$usersCount}}</span></div>
			<div class="col-sm-6">
				<a href="#" class="pull-right"></a>
			</div>
		</div>
	</div>

	<div class="panel-body">
		@if($users->count())
		<div class="table-responsive">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>SN</th>
						<th>Full Name</th>
						<th>Email Address</th>
						<th>Created Date</th>
						<th>Updated Date</th>
						<th>Make Admin</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
					<tr>
						<td>{{ $counts++ }}</td>
						<td><a href="/users/show-user/{{$user->id}}">{{ $user->name }}</a></td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->created_at->diffForHumans() }}</td>
						<td>{{ $user->updated_at->diffForHumans() }}</td>
						<td>
							@if($user->is_admin == false)
							<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Normal User</a>
							<div class="modal fade" id="modal-id">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">{{$user->name}}</h4>
										</div>
										<div class="modal-body">
											<strong>Are your sure you want make {{$user->name}} Administartor ?</strong>
										</div>
										<div class="modal-footer">
											<form action="/users/{{$user->id}}/is-admin" method="POST" role="form">
												{{csrf_field()}}
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Make Administrator</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							@else
							<a class="btn btn-primary" data-toggle="modal" href='#modal-id'>Administrator</a>
							<div class="modal fade" id="modal-id">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title">{{$user->name}}</h4>
										</div>
										<div class="modal-body">
											<strong>Are your sure you want make {{$user->name}} Administartor ?</strong>
										</div>
										<div class="modal-footer">
											<form action="/users/{{$user->id}}/is-admin" method="POST" role="form">
												{{csrf_field()}}
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Make Normal User</button>
											</form>
										</div>
									</div>
								</div>
							</div>
							@endif
						</td>

					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		@else
		<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>No users has been added.</strong>
		</div>
		@endif
		{{ $users->links() }}
	</div>
</div>
@endsection
