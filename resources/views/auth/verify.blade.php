@extends('layouts.app')

@section('content')

<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">{{ __('Verify Your Email Address') }}</li>
     </ul>
   </div>
   <div class="services">
   	<div class="page_header">
    <h1>Email Verification</h1>
        @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
        @endif
   	 <h3>{{ __('Before proceeding, please check your email for a verification link.') }}</h3>
   	 <p> {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.    </div>
   
   </div>
  </div>
</div>
@endsection
