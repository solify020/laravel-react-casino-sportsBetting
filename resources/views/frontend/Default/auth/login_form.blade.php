@include('backend.partials.messages')

  <!-- LOGIN BEGIN -->
  <div class="login"style="background-image: url('/frontend/Default/img/_src/redirected-bg.png')">
  <span style="padding:0px;margin-top:20px;"><img src="/frontend/Default/img/_src/logo_install.png"></span>
  <br><br>
 Welcome Please Log in!
    <div class="login__block">
      <div class="login__left">
        <form class="login-form" action="<?= route('frontend.auth.login.post') ?>" id="login-form" method="POST">
          <input type="hidden" value="<?= csrf_token() ?>" name="_token">
          <div class="input__group">
            <input type="text" id="username" name="username" placeholder="@lang('app.email_or_username')" class="loginInput">
          </div>
          <div class="input__group">
            <input type="password" id="password" name="password" placeholder="@lang('app.password')" class="loginInput">
          </div>
          <button type="submit" class="login-btn btn">@lang('app.log_in')</button>
                                  
                <span style="margin-top: 5px;">Forgot password ? <a href="{{url('password/remind')}}"style="color:#999999; font-size:24px;" >Click here</a></span>
                <br><br>
                <span style="margin-top: 5px;"> Not registered yet? <a href="{{url('register')}}" style="color:#999999;font-size:24px;" >Click here</a></span>
 </form>
      </div>
        </div>
  </div>
  <!-- LOGIN END -->


@section('scripts')
  {!! JsValidator::formRequest('VanguardLTE\Http\Requests\Auth\LoginRequest', '#login-form') !!}
@stop
