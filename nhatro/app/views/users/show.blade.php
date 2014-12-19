@extends('layouts.default')
@section('content')

<div class="container">
	<div class="row">
		@include('users.sidebar')
		<div class="col-md-12">
			<form action="" class="redesign" method="POST" role="form">
				<legend>Chỉnh sửa thông tin cá nhân</legend>

				<div class="form-group">

					<input type="text" class="form-control" id="" value="{{Auth::user()->username}}" readonly>

					<input type="text" class="form-control" id="" value="{{Auth::user()->email}}" readonly>

					<input type="text" class="form-control" id="" placeholder="Họ" >


					<input type="text" class="form-control" id="" placeholder="Tên" >

					<input type="text" class="form-control" id="" placeholder="Số điện thoại" >
				</div>



				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div> 
	</div>
</div>

@stop