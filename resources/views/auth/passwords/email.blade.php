@extends('layouts.signin')

<!-- Main Content -->
@section('content')

    <p class="login-box-msg">{{ trans('app.reset_password') }}</p>

    @if (session('status'))
        <div class="alert alert-success">
                {{ session('status') }}
        </div>
    @endif

    <form role="form" method="POST" action="{{ url('/password/email') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

            @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-btn fa-envelope"></i> {{ trans('app.reset_password_btn') }}
            </button>
        </div>

        <a href="{{ url('/login') }}">{{ trans('app.connect') }}</a><br>
    </form>
                                


@endsection
