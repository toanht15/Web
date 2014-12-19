@extends('layouts.default')
@section('content')

<table>
    <thead>
    <tr>
        <th width="300">Post Title</th>
        <th width="120">Post Edit</th>

        <th width="120">Post View</th>
    </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>
@stop