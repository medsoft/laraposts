@extends('layouts.app') 

@section('content')
    <h1>Edit Post</h1>   
       {!! Form::open (['action' => ['PostsController@update', $post->id], 'method' => 'POST'])!!}
            <div class="form-group">
                {{Form::label('title' , 'Title')}}
                {{Form::text('title', $post->title ,['class'=>'form-control', 'placeholder'=>'title'])}}
            </div>
            <div class="form-group">
                {{Form::label('Body' , 'body')}}
                {{Form::textarea('body', $post->body,['id'=> 'article-ckeditor' ,'class'=>'form-control', 'placeholder'=>'body'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            <button type="submit" class="btn btn-primary">Enregistrer</button>
       {!! Form::close() !!}
@endsection