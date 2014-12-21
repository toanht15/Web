@extends('layouts.default')
@section('title')
Thông tin cá nhân
@stop
@section('content')
<div class="container">
	@include('users.sidebar')
	<div class="col-md-9">
		<form action="{{asset('/edit-profile')}}" method="POST" role="form">
			<legend>Chỉnh sửa thông tin cá nhân</legend>

			<div class="form-group">
				<div class="row">
					<div class="col-md-6">
						<label>Username</label>
						<input type="text" class="form-control" id="" value="{{Auth::user()->username}}" readonly>
					</div>	
					<div class="col-md-6">
						<label>Email</label>
						<input type="text" class="form-control" id="" value="{{Auth::user()->email}}" readonly>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<label>Họ</label>
						<input type="text" class="form-control" name="firstname" value="{{Auth::user()->firstname}}" id="" placeholder="Họ" >
					</div>
					
					<div class="col-md-6">
						<label>Tên</label>
						<input type="text" class="form-control" name="lastname" value="{{Auth::user()->lastname}}" id="" placeholder="Tên" >
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<label>Số điện thoại</label>		
						<input type="text" class="form-control" name="phonenumber" value="{{Auth::user()->phonenumber}}" id="" placeholder="Số điện thoại" >
					</div>
					<div class="col-md-6">
						<label>Địa chỉ</label>
						<input type="text" class="form-control" name="address" value="{{Auth::user()->address}}" id="" placeholder="Địa chỉ" >
					</div>
				</div>
				<div style="text-align:center">
					<button style="width:10em " type="submit" class="btn btn-primary pull-right ">Lưu</button>
				</div>
			</form>
		</div> 
	</div>
</div>
@stop