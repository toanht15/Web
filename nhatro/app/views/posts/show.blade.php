@extends('layouts.default')
@section('content')
	<div class="container">
		<div class="col-md-9">
			<div class="panel panel-info">
				<div class="panel-heading">
					Tiêu đề:
					{{ $post->title}}
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-body">
				<div class=" col-md-4">
					<ul>
					    <li><i class="fa fa-money fa-fw"></i> Giá: {{ $post->price}} VND</li>
					    <li><i class="fa fa-square fa-fw"></i>Diện tích: {{ $post->area}} m2</li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul>
					    <li><i class="fa fa-user fa-fw"></i> Người đăng: {{$user=DB::table('users')->where('id',$post['user_id'])->pluck('username')}}</li>
					    <li><i  class="fa fa-home fa-fw"></i>Địa chỉ: {{ $post->district}} - {{$post->city}}</li>
					</ul>
				</div>
				
			 	<div class="col-md-4">
			 		<ul>
			 		    <li><i class="fa fa-upload fa-fw"></i>Ngày đăng {{date('d/m/Y', strtotime($post->created_at)) }}</li>
			 		    <li><i class="fa fa-phone fa-fw"></i>Điện thoại:</li>
			 		</ul>
			 	</div>
			 	</div>			
			</div>			
			<div class="panel panel-default">
				<div class="panel-heading">Nội dung</div>
				<div class="panel-body">
					{{ $post->content}}
				</div>
			</div>
		</div>
	</div>
@stop