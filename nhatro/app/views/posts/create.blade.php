@extends('layouts.default')
@section('content')

<div class="container-fluid">
	<h3></h3>
	<div class="col-md-9">
		<div class="panel panel-info">
			<div class="panel-heading"><strong>Đăng tin</strong></div>
		</div>
		<div>
			<form role="form">
				<div class="form-group">
        			<label>Tiêu đề</label>
        			<input type="text" class="form-control">
				</div>
			</form>
		</div>
		<div>
			<form role="form">
      			<div class="form-group">
        			<label>Nội dung</label>
        			<textarea class="form-control" rows="8" id="comment"></textarea>
      			</div>
    		</form>
		</div>
		<div>
			<form role="form">
				<label>Khu vực cho thuê</label>
				<div class="form-group">
					<div class="col-md-6">
						<label>Tỉnh/Thành</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-6">
						<label>Quận/Huyện</label>
						<select class="form-control">
							<option>Hoan Kiem</option>
							<option>Hai Ba Trung</option>
						</select>
					</div>
					<div class="col-md-12">
						<label>Địa chỉ chi tiết</label>
						<input type="text" class="form-control">
					</div>				
				</div>
			</form>			
		</div>
		<div>
			<form role="form">
			<div class="row">
				<div class="form-group">
					<div class="col-md-4">
						<label>Diện tích</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-4">
						<label>Giá phòng</label>
						<input type="text" class="form-control">
					</div>
					<div class="col-md-4">
						<label>Số điện thoại</label>
						<input type="text" class="form-control">
					</div>
				</div>
			</div>
			</form>			
		</div>
		<div>
			<button type="submit" class="btn btn-info pull-right">Dang tin</button>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-info">
			<div class="panel-heading">
				<strong>Hướng dẫn đăng tin</strong>
			</div>
		</div>
	</div>
</div>
@stop