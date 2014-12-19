@extends('layouts.default')
@section('content')

<h3>List users</h3>
<div class="panel panel-info">
	<div class="panel-heading">List users</div>
		<div class="panel-body">
			<div class="table-reponsive">
			<table class="table table-striped table-bordered table-hover">
			    <thead>
			    <tr>
			        <th width="300">User id</th>
			        <th width="120">Username</th>
				<th width="120">Email</th>
			        <th width="120">Date join</th>
			        <th width="120">Options</th>
			    </tr>
			    </thead>
			    <tbody>
			        @foreach($users as $user)
			            <tr>
			                <td>{{$user->id}}</td>
			                <td>{{$user->username}}</td>
			                <td>{{$user->email}}</td>
			                <td>{{$user->created_at}}</td>
			                <td></td>
			            </tr>
			        @endforeach
			    </tbody>
			</table>
			</div>
		</div>
</div>
@stop