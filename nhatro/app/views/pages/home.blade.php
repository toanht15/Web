@extends('layouts.default')
@section('content')
<head>
	
</head>
<body>
	<div class=" container">
		<!-- Body -->
		<div class="row" >
			<!-- Tin tuc -->
			<div class="col-md-9">
				<div class="panel panel-info">
					<div class="panel-heading">
						<strong>Tin</strong>
					</div>
				</div>

				@if(Session::has("message"))
				<div class="alert alert-warning">{{ Session::get('message') }}</div>
				<?php Session::forget("message") ?>
				@endif
				<!-- Danh sach tin -->
				<div>
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-info">
								<div class="panel-heading">
									<div class="panel-title">Tin 3
										<div style="float:right">Lưu &raquo
											<input type="checkbox" id="checkbox1" class="checkbox style-2 pull-right"/>
										</div>
									</div>
								</div>
								<div class="panel-body">
									<p>Tin cho thue 1</p>
								</div>
								<div class="panel-footer">
									
								</div>
							</div>
						</div>
						<!-- /.col-md-12 -->
						
						<div class="col-md-6">
							<div class="panel panel-info">
								<div class="panel-heading">
									<div class="panel-title">Tin 3
										<div style="float:right">Lưu &raquo
											<input type="checkbox" id="checkbox1" class="checkbox style-2 pull-right"/>
										</div>
									</div>
								</div>
								<div class="panel-body">
									<p>Tin cho thue 2</p>
								</div>
								<div class="panel-footer">
									
								</div>
							</div>
						</div>
						<!-- /.col-md-12 --> 
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-info">
								<div class="panel-heading">
									<div class="panel-title">Tin 3
										<div style="float:right">Lưu &raquo
											<input type="checkbox" id="checkbox1" class="checkbox style-2 pull-right"/>
										</div>
									</div>
								</div>
								<div class="panel-body">
									<p>Tin cho thue 3</p>
								</div>
								<div class="panel-footer">
									
								</div>
							</div>                               
						</div>

						<div class="col-md-6">
							<div class="panel panel-info">
								<div class="panel-heading">
									<div class="panel-title">Tin 3
										<div style="float:right">Lưu &raquo
											<input type="checkbox" id="checkbox1" class="checkbox style-2 pull-right"/>
										</div>
									</div>
								</div>
								<div class="panel-body">
									<p>Tin cho thue 3</p>
								</div>
								<div class="panel-footer">
									
								</div>
							</div>                               
						</div>					
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-info">
								<div class="panel-heading">
									<div class="panel-title">Tin 3
										<div style="float:right">Lưu &raquo
											<input type="checkbox" id="checkbox1" class="checkbox style-2 pull-right"/>
										</div>
									</div>
								</div>
								<div class="panel-body">
									<p>Tin cho thue 3</p>
								</div>
								<div class="panel-footer">
									
								</div>
							</div>                               
						</div>

						<div class="col-md-6">
							<div class="panel panel-info">
								<div class="panel-heading">
									<div class="panel-title">Tin 3
										<div style="float:right">Lưu &raquo
											<input type="checkbox" id="checkbox1" class="checkbox style-2 pull-right"/>
										</div>
									</div>
								</div>
								<div class="panel-body">
									<p>Tin cho thue 3</p>
								</div>
								<div class="panel-footer">
									
								</div>
							</div>                               
						</div>
					</div>					
				</div>
			</div>
			<!-- Khung tim kiem -->
			<div class="col-md-3">
				<div class="panel panel-info">
					<div class="panel-heading">
						<strong>Tìm kiếm</strong>
					</div>
				</div>
				<!-- dropdown tinh thanh -->
				<div class="form-group">
					<select name="tinh" id="tinh" onchange="populate(this.id,'huyen')" class="form-control">
						<option value="">Chọn Tỉnh/Thành</option>
						<option value="1">Hà Nội</option>
						<option value="2">Hồ Chí Minh</option>
					</select>
				</div>
				<!-- ./dropdown tinh thanh -->
				<!-- dropdown quan huyen -->
				<div class="form-group">
					<select name="huyen" id="huyen" class="form-control">
						<option value="">Chọn Quận/Huyện</option>				
					</select>
				</div>
				<!-- ./dropdown quan huyen -->
				<!-- dropdown muc gia -->
				<div class="form-group">
					<select class="form-control">
						<option selected="selected">Chọn Diện tích</option>
						<option> <10m2</option>
						<option>10-20m2</option>
						<option>>=30m2</option>
					</select>
				</div>
				<!-- ./dropdown muc gia -->
				<!-- dropdown dien tich -->
				<div class="form-group">
					<select class="form-control">
						<option selected="selected">Chọn Giá</option>            	
						<option> <1trieu</option>
						<option>1-1.5 trieu</option>
						<option>1.5-2 trieu</option>
						<optgroup>> 2trieu</optgroup>
					</select>
				</div>
				<!-- ./dropdown dien tich -->
				<button class="btn btn-info col-sm-3 pull-right" type="submit">Tìm</button>
			</div>
			<!-- ./Khung tim kiem -->
		</div>
	</div>

</body>
@stop