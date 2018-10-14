@extends('layouts.admin-applogin')

@section('content')
<!-- Password recovery -->
   
<form method="POST" action="{{ route('admin.password.email') }}">
    @csrf
     
  <div class="panel panel-body login-form">
    @if (session('status'))
     <div class="alert alert-success" role="alert">
        {{ session('status') }}
     </div>
    @endif
    <div class="text-center">
         <div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
         <h5 class="content-group">
         {{ __('Password recovery') }} <small class="display-block">{{ __('We\'ll send you instructions in email') }}</small>
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
     <button type="submit" class="btn bg-blue btn-block">{{ __('Send Password Reset Link') }}<i class="icon-arrow-right14 position-right"></i></button>
  </div>
</form>
<!-- /password recovery -->
@endsection
