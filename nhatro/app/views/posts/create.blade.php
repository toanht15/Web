@extends('layouts.default')
@section('content')

<div class="container-fluid">
	<div class="col-md-9">
		<div class="panel panel-info">
			<div class="panel-heading"><strong>Đăng tin</strong></div>
		</div>
		@if(Session::has("message"))
		<div class="alert alert-warning">{{ Session::get('message') }}</div>
		<?php Session::forget("message") ?>
		@endif
		<div>
			<form action="{{asset('posts/create')}}" method="POST" role="form">
				<div class="form-group">
					<label>Tiêu đề (*)</label>
					<input type="text" name="title" id="title_id" class="form-control">
				</div>

			</div>
			<div>

				<div class="form-group">
					<label>Nội dung (*)</label>
					<textarea class="form-control" rows="8"  name="content" id="content_id"></textarea>
				</div>

			</div>
			<div>

				<label>Khu vực cho thuê</label>
				<div class="form-group">
					<div class="col-md-6">
						<select name="tinh" id="tinh"  onchange="populate(this.id,'huyen')"  class="form-control">
							<option value="">Chọn Tỉnh/Thành</option>
							<option value="Hà Nội">Hà Nội</option>
							<option value="Hồ Chí Minh">Hồ Chí Minh</option>
						</select>
					</div>
				<!-- ./dropdown tinh thanh -->
				<!-- dropdown quan huyen -->
					<div class="col-md-6">
						<select name="huyen" id="huyen" class="form-control">
							<option value="">Chọn Quận/Huyện</option>				
						</select>
					</div>
				</div>
				<!-- ./dropdown quan huyen -->
				<div class="col-md-12">
					<label style="margin-top:10px">Địa chỉ chi tiết(*)</label>
					<input type="text" name="address" id="name_address" class="form-control">
				</div>				
			</div>

		<div>

			<div class="row" >
				<div class="form-group" >
					<div class="col-md-4">
						<label style="margin-top:10px">Diện tích m2 (*)</label>
						<input type="text" name="area" id="area_id" class="form-control">
					</div>
					<div class="col-md-4">
						<label style="margin-top:10px">Giá phòng VNĐ (*)</label>
						<input type="text" name="price" id="price" class="form-control">
					</div>
					<div class="col-md-4">
						<label style="margin-top:10px">Số điện thoại</label>
						<input type="text" name="phonenumber" id="phonenumber_id"class="form-control">
					</div>
				</div>
			</div>

		</div>
		<div>
			<button type="submit" class="btn btn-info pull-right" style="margin-top:15px">Đăng tin</button>
		</div>
	</form>
</div>
<!-- ./tin -->
<!-- huong dan -->
<div class="col-md-3">
	<div class="panel panel-info">
		<div class="panel-heading">
			<strong>Hướng dẫn đăng tin</strong>
		</div>
		<div class="panel-body">
			<ul>
				<li>Phần có dấu * là bắt buộc</li>
				<li> Tiêu đề nên rõ ràng, ngắn gọn</li>
				<li>Nội dung tin không qúa 1000 từ 	</li>
				<li>Sử dụng tiếng Việt có dấu, không viết tắt</li>
				<li>Không đăng lại tin đã có </li>
			</ul>
		</div>
	</div>
</div>
<!-- ./huong dan -->
</div>
@stop