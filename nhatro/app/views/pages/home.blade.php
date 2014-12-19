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
				<div >
				<div align="center"> {{ $posts->links()}}</div>
				@foreach ($posts as $post)
					
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-info">
								<div class="panel-heading">
									<div class="panel-title">{{$post->title}}
									<div class="pull-right">{{HTML::linkRoute('posts.show','Xem chi tiết',$post->post_id,['target'=>'_blank'])}}
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
										    <li><i class="fa fa-square fa-fw"></i>Diện tích: {{ $post->area}} m2</li					>
										</ul>
									</div>
									<div class="col-md-4">
										<ul>
										    <li><i class="fa fa-user fa-fw"></i> Người đăng:
										     </li>
										    
										    <li><i  class="fa fa-home fa-fw"></i>Địa chỉ: {{ $post->district}}- {{ $post->city}}</li>
										</ul>
									</div>
									<div class="col-md-4">
										<ul>
										    <li><i class="fa fa-upload fa-fw"></i>Ngày đăng: {{ date('d/M/Y', strtotime($post->created_at)) }}</li>
										</ul>
									</div>
								</div>
							</div>
						</div>					
						<!-- <div>{{ $post->title }}</div> -->
						<!-- <a href="{{ URL::to('posts/'.$post->post_id)}}">link to post</a> -->
					<!-- 	{{HTML::linkRoute('posts.show','View details',$post->post_id,['target'=>'_blank'])}} -->
					</div>
				@endforeach					
				<div align="center"> {{ $posts->links()}}</div>
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
					<select class="form-control">
						<option selected="selected">Chọn Tỉnh/Thành</option>
						<option>Ha Noi</option>
						<option>TP.Ho Chi Minh</option>
					</select>
				</div>
				<!-- ./dropdown tinh thanh -->
				<!-- dropdown quan huyen -->
				<div class="form-group">
					<select class="form-control">
						<option selected="selected">Chọn Quận/Huyện</option>				
						<option>ABC</option>
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