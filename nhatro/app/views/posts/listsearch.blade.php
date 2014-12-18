@extends('layouts.default')
@section('content')

	<div class=" container">
		<!-- Body -->
		<div class="row" >
			<!-- Tin tuc -->
			<div class="col-md-9">
				<div class="panel panel-info">
					<div class="panel-heading">
						<strong>Kết quả tìm kiếm</strong>
					</div>
				</div>

				@if(Session::has("message"))
				<div class="alert alert-warning">{{ Session::get('message') }}</div>
				<?php Session::forget("message") ?>
				@endif
				<!-- Danh sach tin -->
				<div >
				@foreach ($posts as $post)
					
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-info">
								<div class="panel-heading">
									<div class="panel-title">{{$post->title}}
									<div class="pull-right">{{HTML::linkRoute('posts.show','Xem chi tiết',$post->id,['target'=>'_blank'])}}
									&raquo
									</div>
										<!-- <div style="float:right">Lưu &raquo
											<input type="checkbox" id="checkbox1" class="checkbox style-2 pull-right"/>
										</div> -->
									</div>
								</div>
								<div class="panel-body">
									<!-- <p>{{ $post->content }}</p> -->
									<div class=" col-md-4">
										<ul>
										    <li><i class="fa fa-money fa-fw"></i> Giá: {{ $post->price}} VND</li>
										    <li><i class="fa fa-square fa-fw"></i>Diện tích: {{ $post->area}} m2</li>
										</ul>
									</div>
									<div class="col-md-4">
										<ul>
										    <li><i class="fa fa-user fa-fw"></i> Người đăng: {{$user=DB::table('users')->where('id',$post->user_id)->pluck('username')}} </li>
										    <li><i  class="fa fa-home fa-fw"></i>Địa chỉ: {{ $post->district}} - {{ $post->city}}</li>
										</ul>
									</div>
									<div class="col-md-4">
										<ul>
										    <li><i class="fa fa-upload fa-fw"></i>Ngày đăng: {{ date('d/m/Y', strtotime($post->created_at)) }}</li>
										</ul>
									</div>
								</div>
							</div>
						</div>					

					</div>
				@endforeach					

				</div>
			</div>
				<!-- Khung tim kiem -->
				<div class="col-md-3">
					<div class="panel panel-info">
						<div class="panel-heading">
							<strong>Tìm kiếm</strong>
						</div>
					</div> 
					<!-- dropdown tinh thanh-->
					<form action="{{Asset('/search')}}" method="POST" role="form">


						<div class="form-group">
							<select name="tinh" id="tinh"  onchange="populate(this.id,'huyen')"  class="form-control">
								<option value="">Chọn Tỉnh/Thành</option>
								<option value="Hà Nội">Hà Nội</option>
								<option value="Hồ Chí Minh">Hồ Chí Minh</option>
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
							<select name="area" id="area" class="form-control">
								<option value="" selected="selected">Chọn Diện tích</option>
								<option value="1"> <15m2</option>
								<option value="2">15-30m2</option>
								<option value="3">>=30m2</option>
							</select>
						</div>
						<!-- ./dropdown muc gia -->
						<!-- dropdown dien tich -->
						<div class="form-group">
							<select name="price" id="price" class="form-control">
								<option selected="selected">Chọn Giá</option>            	
								<option value="1"> dưới 1 triệu</option>
								<option value="2">từ 1 đến 2 triệu</option>
								<option value="3"> trên 2 triệu</option>
							</select>
						</div>
						<!-- ./dropdown dien tich -->
						<button class="btn btn-info col-sm-3 pull-right" type="submit">Tìm</button>
					</form>
				</div>
				<!-- ./Khung tim kiem -->
			</div>
		</div>
@stop