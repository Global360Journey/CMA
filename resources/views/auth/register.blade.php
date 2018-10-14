@extends('layouts.app')
@section('content')
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.html"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">{{ __('Fill the form below to register and start your soulmate search') }}</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form method="POST" action="{{ route('register') }}" class="form-horizontal">
           @csrf
           <input type="hidden" name="profile_code" value="{{$next_profile_id}}">
              
           <div class="form-group">
              <label for="edit-name">{{ __('Create Profile For') }} <span class="form-required" title="This field is required.">*</span></label>
              
              <select name="created_for" class="form-control{{ $errors->has('created_for') ? ' is-invalid' : '' }}">
                  <option value="">Profile For</option>
                  <option value="Self" {{ (old('created_for') == 'Self') ? 'selected' : '' }}>Self</option>
                  <option value="Son" {{ (old('created_for') == 'Son') ? 'selected' : '' }}>Son</option>
                  <option value="Daughter" {{ (old('created_for') == 'Daughter') ? 'selected' : '' }}>Daughter</option>
                  <option value="Sister" {{ (old('created_for') == 'Sister') ? 'selected' : '' }}>Sister</option>
                  <option value="Brother" {{ (old('created_for') == 'Brother') ? 'selected' : '' }}>Brother</option>
                  <option value="Relative_Friend" {{ (old('created_for') == 'Relative_Friend') ? 'selected' : '' }}>Relative/Friend</option>
                  <option value="Niece" {{ (old('created_for') == 'Niece') ? 'selected' : '' }}>Niece</option>
                  <option value="Nephew" {{ (old('created_for') == 'Nephew') ? 'selected' : '' }}>Nephew</option>
              </select>    

                @if ($errors->has('created_for'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('created_for') }}</strong>
                    </span>
                @endif   
            </div>

           <div class="form-group">
		      <label for="edit-name">{{ __('Full Name') }} <span class="form-required" title="This field is required.">*</span></label>
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}">

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif   
            </div>

            <div class="form-group">
              <label for="edit-name">{{ __('Mobile Number') }} <span class="form-required" title="This field is required.">*</span></label>
              
              <input id="mobile" type="text" class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" name="mobile_number" value="{{ old('mobile_number') }}" >

                @if ($errors->has('mobile_number'))
                   <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('mobile_number') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
              <label for="edit-name">{{ __('E-Mail Address') }} <span class="form-required" title="This field is required.">*</span></label>
              
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

             <div class="form-group">
		      <label for="edit-pass">{{ __('Password') }} <span class="form-required" title="This field is required.">*</span></label>
              <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            
            <div class="form-group">
		      <label for="edit-pass">{{ __('Confirm Password') }} <span class="form-required" title="This field is required.">*</span></label>
              <input id="paspassword-confirmsword" type="password" class="form-control" name="password_confirmation">
            </div>

            

             <div class="form-group">
                <div class="age_select">
                <label for="edit-pass">Age <span class="form-required" title="This field is required.">*</span></label>
                    <div class="age_grid">
                        <div class="col-sm-4" style="padding-left:0px;">
                            
                                <select name="day" class="form-control{{ $errors->has('day') ? ' is-invalid' : '' }}" >
                                    <option value="">Date</option>
                                    @for ($i = 1; $i < 32; $i++)
                                        <option value="{{$i}}" {{ (old('day') == $i) ? 'selected' : '' }}>
                                            {{$i}}
                                        </option>
                                    @endfor
                                </select>
                            
                            @if ($errors->has('day'))
                            <span class="invalid-feedback" role="alert">
                            <strong>Day is required!</strong>
                            </span>
                            @endif 
                        </div>

                        <div class="col-sm-4">
                            <div>
                                <select name="month" class="form-control{{ $errors->has('month') ? ' is-invalid' : '' }}">
                                    <option value="">Month</option>
                                    <option value="01" {{ (old('month') == '01') ? 'selected' : '' }}>January</option>
                                    <option value="02" {{ (old('month') == '02') ? 'selected' : '' }}>February</option>
                                    <option value="03" {{ (old('month') == '02') ? 'selected' : '' }}>March</option>
                                    <option value="04" {{ (old('month') == '04') ? 'selected' : '' }}>April</option>
                                    <option value="05" {{ (old('month') == '05') ? 'selected' : '' }}>May</option>
                                    <option value="06" {{ (old('month') == '06') ? 'selected' : '' }}>June</option>
                                    <option value="07" {{ (old('month') == '07') ? 'selected' : '' }}>July</option>
                                    <option value="08" {{ (old('month') == '08') ? 'selected' : '' }}>August</option>
                                    <option value="09" {{ (old('month') == '09') ? 'selected' : '' }}>September</option>
                                    <option value="10" {{ (old('month') == '10') ? 'selected' : '' }}>October</option>
                                    <option value="11" {{ (old('month') == '11') ? 'selected' : '' }}>November</option>
                                    <option value="12" {{ (old('month') == '12') ? 'selected' : '' }}>December</option>
                                </select>
                            </div>
                            @if ($errors->has('month'))
                            <span class="invalid-feedback" role="alert">
                            <strong>Month is required!</strong>
                            </span>
                            @endif
                        </div>

                        <div class="col-sm-4">
                        <div>
                                <select name="year" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}">
                                    <option value="">Year</option>
                                    @for ($i = 1960; $i < 2001; $i++)
                                        <option value="{{$i}}" {{ (old('year') == $i) ? 'selected' : '' }}>{{$i}}</option>
                                    @endfor
                                </select>
                        </div>
                        <!--<div class="clearfix"> </div>-->

                        @if ($errors->has('year'))
                            <span class="invalid-feedback" role="alert">
                            <strong>Year is required!</strong>
                            </span>
                        @endif 
                    
                    </div>
                </div>
                </div>  
            </div>


            <div class="form-group">
		      <label for="edit-name">{{ __('Gender') }} <span class="form-required" title="This field is required.">*</span></label>
              <div class="radios">
                <label for="radio-01" class="label_radio">
                    <input type="radio" name="gender"  value="M" {{ (old('gender') == 'M') ? 'checked' : '' }}> Male
                </label>
                <label for="radio-02" class="label_radio">
                    <input type="radio" name="gender" value="F" {{ (old('gender') == 'F') ? 'checked' : '' }}> Female
                </label>
                @if ($errors->has('gender'))
                    <br>
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                @endif  
	          </div>
             </div>

            <div class="form-group">
                <button type="submit" class="btn_1 submit">{{ __('Register') }}</button>  
            </div>
		 </form>
      </div>
      <div class="col-sm-1"></div>
	  <div class="col-sm-5">
      <div class="logout logdivrt padt10">    
      <div class="whyJoinContainer">
        <span class="imgnew">
        <img src="images/arrow.png" alt="arrow" width="34" height="73"></span>
		<span class="whyjoin">Why join</span>
		<h2>ChaurasiaMarry?</h2>
		<div class="dash-step1 padb10"></div>
		<p>The Largest &amp; Exclusive Community<br>site for chaurasia singles across the world </p>
		<p>Thousands of chaurasia profiles worldwide</p>
		<p>Trustworthy, efficient and confidential </p>
        <p>Best matching profile alerts through Email</p> <br>   
        <div class="dash-step1" style="vertical-align:bottom">
            <img src="images/hindu-matrimonial-services-250x250.png">
        </div> 
        </div>
      </div>
    </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
@endsection
