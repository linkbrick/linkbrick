@extends('layouts.material_login')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">

                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card card-login card-hidden">
                        <div class="card-header text-center" data-background-color="purple">
                            <h4 class="card-title">Login</h4>
                        </div>
                        <div class="card-content">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="material-icons">email</i>
                                </span>
                                <div class="form-group label-floating {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label class="control-label">Email address</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock_outline</i>
                        </span>
                                <div class="form-group label-floating {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label class="control-label">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="input-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary btn-wd btn-lg">Let's go</button>
                            <a class="btn btn-simple" href="{{ route('password.request') }}">
                                Forgot Your Password?
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
