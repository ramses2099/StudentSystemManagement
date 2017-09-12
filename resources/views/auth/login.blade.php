@extends('layouts.layout')
@section('content')
<body class="login-img3-body">
<div class="container">
  <form class="login-form" action="{{ route('login') }}" method="post"> 
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">       
    <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" autofocus>
        </div>
        <div class="input-group">
            <span class="input-group-addon"><i class="icon_key_alt"></i></span>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        </div>
        <label class="checkbox">
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
            <span class="pull-right"> <a href="{{ route('password.request') }}"> Forgot Password?</a></span>
        </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>        
    </div>
  </form>
</div>
</body>
@endsection
