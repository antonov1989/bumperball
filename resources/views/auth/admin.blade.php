@extends('layouts.admin')

@section('title', 'Admin Login')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Admin panel</h3>
        </div>
        <div class="panel-body">
            <form method="POST" action="/auth/admin">
                {!! csrf_field() !!}

                @if (count($errors) > 0)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">{{ $error }}</div>
                        @endforeach
                @endif

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" placeholder="Email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>

                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" value="">
                        Remember Me
                    </label>
                </div>

                <div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection