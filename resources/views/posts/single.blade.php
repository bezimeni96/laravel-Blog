@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1>{{$title}}</h1>
    <p>{{$body}}</p>
    <hr>
    <h3>Comments</h3>
    @foreach($comments as $comment)
        <div class="alert alert-primary">
            {{$comment->body}}
        </div>
    @endforeach
@endsection