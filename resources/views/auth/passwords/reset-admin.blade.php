@extends('layouts.admin-applogin')
@section('content')
<!-- Reset Password recovery -->
<form method="POST" action="{{ route('admin.password.update') }}">
    @csrf
  <input type="hidden" name="token" value="{{ $token }}">
  <div class="panel panel-body login-form">
    @if (session('status'))
     <div class="alert alert-success" role="alert">
        {{ session('status') }}
     </div>
    @endif
    <div class="text-center">
         <div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
         <h5 class="content-group">
         {{ __('Admin Reset Password') }}
         </h5>
      </div>
      
      <div class="form-group has-feedback has-feedback-left{{ $errors->has('email') ? ' has-error' : '' }}">
          <input type="email" class="form-control" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}">
          <div class="form-control-feedback">
            <i class="icon-mail5 text-muted"></i>
          </div>  
          @if ($errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
     </div>

     <div class="form-group has-feedback has-feedback-left{{ $errors->has('password') ? ' has-error' : '' }}">
          <input type="password" class="form-control" placeholder="{{ __('Password') }}" name="password">
          <div class="form-control-feedback">
            <i class="icon-menu text-muted"></i>
          </div>  
          @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
     </div>

     <div class="form-group has-feedback has-feedback-left{{ $errors->has('password') ? ' has-error' : '' }}">
          <input type="password" class="form-control" placeholder="{{ __('Confirm Password') }}" name="password_confirmation">
          <div class="form-control-feedback">
            <i class="icon-menu text-muted"></i>
          </div>  
     </div>
     
     <button type="submit" class="btn bg-blue btn-block">{{ __('Reset Password') }}<i class="icon-arrow-right14 position-right"></i></button>
 </div>
</form>
<!-- /password recovery -->
@endsection
