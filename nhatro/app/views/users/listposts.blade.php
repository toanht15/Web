@extends('layouts.default')
@section('title')
Danh sách tin 
@stop
@section('content')

<div class="container">

<div class="panel panel-info">
    <div class="panel-heading" style="text-align:center"><h4>Danh sách tin đăng</h4></div>
        <div class="panel-body">
            <div class="table-reponsive">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                <tr>
                    <th width="30">Post id</th>
                    <th width="200">Tiêu đề</th>
                    <th width="100">Ngày đăng</th>
                    <th width="40">Xem</th>
                    <th width="40">Xóa</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{ date('d/m/Y', strtotime($post->created_at)) }}</td>
                            <td><a href="{{ URL::to('posts/'.$post->id)}}"> Xem</a></td>
                            <td><a href=""> Xóa</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
</div>
</div>
@stop