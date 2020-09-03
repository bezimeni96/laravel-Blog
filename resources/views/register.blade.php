@extends('layouts.app')

@section('title', 'Register')


@section('content')
<div class="alert alert-secondary">
    <h2>Sign up:</h2>
    <form method="POST" action="/users">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
            @if($errors->get('name'))
                <div class="alert alert-danger">
                    {{$errors->first('name')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email">
            @if($errors->get('email'))
                <div class="alert alert-danger">
                    {{$errors->first('email')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            @if($errors->get('password'))
                <div class="alert alert-danger">
                    {{$errors->first('password')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label for="confirm_password">Confirm password</label>
            <input type="password" class="form-control" id="confirm-password" name="confirm_password">
            @if($errors->get('confirm_password'))
                <div class="alert alert-danger">
                    {{$errors->first('confirm_password')}}
                </div>
            @endif
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="agreed" name="agreed" value=1>
            <label class="form-check-label" for="agreed">I agree to Terms and conditions!</label>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection