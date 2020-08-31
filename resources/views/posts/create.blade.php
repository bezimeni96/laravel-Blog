@extends('layouts.app')

@section('title', 'Create a post')


@section('content')
    <form method="POST" action="/posts">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
            @if($errors->get('title'))
                <div class="alert alert-danger">
                    {{$errors->first('title')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" rows="5" name="body"></textarea>
            @if($errors->get('body'))
                <div class="alert alert-danger">
                    {{$errors->first('body')}}
                </div>
            @endif
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="is_published" name="is_published" value=1>
            <label class="form-check-label" for="is_published">I want to publish the post</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection