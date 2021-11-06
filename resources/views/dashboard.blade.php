@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Posts </h3>
                   @if (count ($posts) > 0 )
                   <table class="table table-striped ">
                    <tr>
                        <th>Title</th>
                        <th>Manage</th>
                    </tr>
                    @foreach ($posts as $post)
                     <tr>
                         <td>{{$post->title}}</td>
                         <td>
                             <a href="" class="btn btn-default">Edit</a>
                             <a href="" class="btn btn-danger">delete</a>   
                         </td>
                         
                     </tr>
                    @endforeach
                   

                </table>
                   @endif
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
