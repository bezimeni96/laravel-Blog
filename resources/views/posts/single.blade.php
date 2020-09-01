@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <hr>
    <h3>Comments</h3>
    @foreach($comments as $comment)
        <div class="alert alert-primary">
            {{$comment->body}}
        </div>
    @endforeach
    <div>
        <form method="POST" action="/posts/{{$post->id}}/comments">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control @error('comment') is-invalid @enderror" name="comment" id="comment" placeholder="Comment....">
                @if($errors->get('comment'))
                    <div class="alert alert-danger">
                        {{$errors->first('comment')}}
                    </div>
                @endif
            </div>
            <button class="btn btn-primary" type="submit">Post comment</button>
        </form>
    </div>
@endsection