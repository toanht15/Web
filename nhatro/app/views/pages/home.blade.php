@extends('layouts.default')
@section('title')
Trang chủ
@stop
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
						<strong>Danh sách tin</strong>		
					</div>
				</div>

				@if(Session::has("message"))
				<div class="alert alert-warning">{{ Session::get('message') }}</div>
				<?php Session::forget("message") ?>
				@endif
				<!-- Danh sach tin -->
				<div >
					<div align="center"> {{ $posts->links()}}</div>
					<div class="pull-right">
						<select name="tinh" id="tinh"  onchange="populate(this.id,'huyen')"  class="form-control">
							<option value="Hà Nội">Mới nhất</option>
							<option value="Hồ Chí Minh">Lượt xem</option>
						</select>
					</div>
					@foreach ($posts as $post)

					<div class="col-md-12 redraw">
						{{$post->title}}
						<div class="pull-right">{{HTML::linkRoute('posts.show','Xem chi tiết',$post->id,['target'=>'_blank'])}}
							&raquo
						</div>
						<div style="float:right">Lưu &raquo
							<input type="checkbox" id="checkbox1" class="checkbox style-2 pull-right"/>
						</div>								
					</div>
					<div class="col-md-12" style="border: 1px solid #a1a1a1">
						<div class=" col-md-4">
							<ul class="redraw">
								<li><i class="fa fa-money fa-fw"></i> Giá: {{ $post->price}} VND</li>
								<li><i class="fa fa-square fa-fw"></i>Diện tích:  {{ $post->area}} m2</li>
							</ul>
						</div>
						<div class="col-md-5">
							<ul class="redraw">

								<li><i class="fa fa-user fa-fw"></i> Người đăng: {{$user=DB::table('users')->where('id',$post['user_id'])->pluck('username')}}</li>
								<li><i  class="fa fa-home fa-fw"></i>Địa chỉ:  {{ $post->district}} - {{ $post->city}}</li>
							</ul>
						</div>	
						<div class="col-md-3">
							<ul class="redraw">
								<li><i class="fa fa-upload fa-fw"></i>Ngày đăng: {{ date('d/m/Y', strtotime($post->created_at)) }}</li>
							</ul>
						</div>
					</div>
					<!-- <div>{{ $post->title }}</div> -->
					<!-- <a href="{{ URL::to('posts/'.$post->post_id)}}">link to post</a> -->
					<!-- 	{{HTML::linkRoute('posts.show','View details',$post->post_id,['target'=>'_blank'])}} -->
					@endforeach
				</div>			
				<div align="center"> {{ $posts->links()}}</div>
			</div>
			<!-- Khung tim kiem -->
			@include('pages.search')
			<!-- ./Khung tim kiem -->
		</div>
	</div>

</body>
@stop