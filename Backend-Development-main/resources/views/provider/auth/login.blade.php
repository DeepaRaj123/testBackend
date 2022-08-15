@extends('provider.layout.auth')

@section('content')
<div class="col-md-12">
    <!-- <a class="log-blk-btn" href="{{ url('/provider/register') }}">@lang('provider.signup.create_new_acc')</a> -->
    <h3>@lang('provider.signup.sign_in')</h3>
</div>

<div class="col-md-12">
    <form role="form" method="POST" action="{{ url('/provider/login') }}">
        {{ csrf_field() }}

        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="@lang('user.profile.email')" autofocus>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif

        <input id="password" type="password" class="form-control" name="password" placeholder="@lang('provider.signup.password')">

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        
            <div class="checkbox_field">
                <input type="checkbox" name="remember"><span> @lang('provider.signup.remember_me')</span>
            </div>
       
        

        <button type="submit" class="log-teal-btn">
            @lang('provider.signup.login')
        </button>

        <!-- <p class="helper"><a href="{{ url('/provider/password/reset') }}"> @lang('provider.signup.forgot_password')</a></p>    -->
    </form>
</div>
    <div class="col-md-12">
        <p class="helper pull-left"> <a href="{{ url('/provider/password/reset') }}"> @lang('provider.signup.forgot_password')</a></p>  
        <p class="helper pull-right"> <a href="{{ url('/provider/register') }}"> @lang('provider.signup.create_new_acc')</a></p>
    </div>

    @if(Setting::get('social_login', 0) == 1)
    <div class="col-md-12">
        <a href="{{ url('provider/auth/facebook') }}"><button type="submit" class="log-teal-btn fb"><i class="fa fa-facebook"></i>@lang('provider.signup.login_facebook')</button></a>
    </div>  
    <div class="col-md-12">
        <a href="{{ url('provider/auth/google') }}"><button type="submit" class="log-teal-btn gp"><i class="fa fa-google-plus"></i>@lang('provider.signup.login_google')</button></a>
    </div>
    @endif

@endsection
