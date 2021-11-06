@extends('layouts.app') 

@section('content')
    <h1>Posts</h1>   
        @if (count($posts) > 0)
            @foreach ($posts as $post)
                <div class="well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <img style="width:50%"src="/storage/cover_images/{{$post->cover_image}}" alt="" >
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>{{$post->body}} by  <a href="">{{$post->user->name}}</a></small>
                        </div>
                    </div>
                </div>   
            @endforeach    
        @endif
@endsection