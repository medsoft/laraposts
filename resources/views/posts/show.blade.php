@extends('layouts.app') ;  


@section('content')
    <h2>{{$post->title}}</h2>
    <img style="width:50%"src="/storage/cover_images/{{$post->cover_image}}" alt="" >
    <p>{{$post->body}}</p>
    <small>{{$post->created_at}}</small>
    <hr>
    <a href="/posts" class="btn btn-primary">Retour</a>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit"class="btn btn-success">Edit</a>
            {!! Form::open (['action' => ['PostsController@destroy', $post->id] , 'method' => 'post' , 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'Delete')}}
                {{Form::submit('delete', ['class'=> 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
   
    @endsection