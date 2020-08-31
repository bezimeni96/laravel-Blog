@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1>{{$title}}</h1>
    <p>{{$body}}</p>
    <hr>
    @foreach($comments as $comment)
        <div>
            {{$comment->body}}
        </div>
    @endforeach
@endsection