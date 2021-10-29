<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }} | Login</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom_style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">

</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="d-none login-logo">
        <a href="{{ url('/home') }}"><b>Welcome Back!</b></a>
    </div>
    <!-- /.login-logo -->

    <!-- /.login-box-body -->
    <div class="card shadow-lg">
        <div class="card-body">
        
            
            <p class="login-box-msg mb-0">Welcome Back!</p>

            <form method="post" action="{{ url('/login') }}">
                @csrf
                <div class="form-group mb-3">
                <p class="mb-0 label">Email</p>
                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder=""
                           class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                <p class="mb-0 label">Password</p>
                    <input type="password"
                           name="password"
                           placeholder=""
                           class="form-control @error('password') is-invalid @enderror">
                    @error('password')
                    <span class="error invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="row mb-2">
                    <div class="col-6">
                        <div>
                            <input type="checkbox" id="remember">
                            <span class="label" for="remember">Remember me</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <a class="login-a" href="{{ route('password.request') }}">Forgot your password?</a>
                        
                    </div>

                </div>
                <p class="mb-1">
                <button type="submit" class="btn  btn-block">Sign In</button>
            </p>
            </form>

            <p class="mb-0 text-center">
                <a class="login-a" href="{{ route('register') }}" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>

</div>
<!-- /.login-box -->

<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/custom_script.js') }}" defer></script>

</body>
</html>
