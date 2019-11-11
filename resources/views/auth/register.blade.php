<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>Login</title>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<style>
    *, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family: 'Open Sans', Helvetica, Arial, sans-serif;
  background: #ededed;
}

input, button {
  border: none;
  outline: none;
  background: none;
  font-family: 'Open Sans', Helvetica, Arial, sans-serif;
}

.tip {
  font-size: 20px;
  margin: 40px auto 50px;
  text-align: center;
}

.cont {
  overflow: hidden;
  position: relative;
  width: 900px;
  height: 550px;
  margin: 0 auto 100px;
  background: #fff;
}

.form {
  position: relative;
  width: 640px;
  height: 100%;
  transition: -webkit-transform 1.2s ease-in-out;
  transition: transform 1.2s ease-in-out;
  transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
  padding: 50px 30px 0;
}

.sub-cont {
  overflow: hidden;
  position: absolute;
  left: 640px;
  top: 0;
  width: 900px;
  height: 100%;
  padding-left: 260px;
  background: #fff;
  transition: -webkit-transform 1.2s ease-in-out;
  transition: transform 1.2s ease-in-out;
  transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}
.cont.s--signup .sub-cont {
  -webkit-transform: translate3d(-640px, 0, 0);
          transform: translate3d(-640px, 0, 0);
}

button {
  display: block;
  margin: 0 auto;
  width: 260px;
  height: 36px;
  border-radius: 30px;
  color: #fff;
  font-size: 15px;
  cursor: pointer;
}

.img {
  overflow: hidden;
  z-index: 2;
  position: absolute;
  left: 0;
  top: 0;
  width: 260px;
  height: 100%;
  padding-top: 360px;
}
.img:before {
  content: '';
  position: absolute;
  right: 0;
  top: 0;
  width: 900px;
  height: 100%;
  background-image: url("https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940");
  background-size: cover;
  transition: -webkit-transform 1.2s ease-in-out;
  transition: transform 1.2s ease-in-out;
  transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}
.img:after {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
}
.cont.s--signup .img:before {
  -webkit-transform: translate3d(640px, 0, 0);
          transform: translate3d(640px, 0, 0);
}
.img__text {
  z-index: 2;
  position: absolute;
  left: 0;
  top: 50px;
  width: 100%;
  padding: 0 20px;
  text-align: center;
  color: #fff;
  transition: -webkit-transform 1.2s ease-in-out;
  transition: transform 1.2s ease-in-out;
  transition: transform 1.2s ease-in-out, -webkit-transform 1.2s ease-in-out;
}
.img__text h2 {
  margin-bottom: 10px;
  font-weight: normal;
}
.img__text p {
  font-size: 14px;
  line-height: 1.5;
}
.cont.s--signup .img__text.m--up {
  -webkit-transform: translateX(520px);
          transform: translateX(520px);
}
.img__text.m--in {
  -webkit-transform: translateX(-520px);
          transform: translateX(-520px);
}
.cont.s--signup .img__text.m--in {
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
.img__btn {
  overflow: hidden;
  z-index: 2;
  position: relative;
  width: 100px;
  height: 36px;
  margin: 0 auto;
  background: transparent;
  color: #fff;
  text-transform: uppercase;
  font-size: 15px;
  cursor: pointer;
}
.img__btn:after {
  content: '';
  z-index: 2;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border: 2px solid #fff;
  border-radius: 30px;
}
.img__btn span {
  position: absolute;
  left: 0;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  transition: -webkit-transform 1.2s;
  transition: transform 1.2s;
  transition: transform 1.2s, -webkit-transform 1.2s;
}
.img__btn span.m--in {
  -webkit-transform: translateY(-72px);
          transform: translateY(-72px);
}
.cont.s--signup .img__btn span.m--in {
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.cont.s--signup .img__btn span.m--up {
  -webkit-transform: translateY(72px);
          transform: translateY(72px);
}

h2 {
  width: 100%;
  font-size: 26px;
  text-align: center;
}

label {
  display: block;
  width: 260px;
  margin: 25px auto 0;
  text-align: center;
}
label span {
  font-size: 12px;
  color: #cfcfcf;
  text-transform: uppercase;
}

input {
  display: block;
  width: 100%;
  margin-top: 5px;
  padding-bottom: 5px;
  font-size: 16px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.4);
  text-align: center;
}

.forgot-pass {
  margin-top: 15px;
  text-align: center;
  font-size: 12px;
  color: #cfcfcf;
}

.submit {
  margin-top: 40px;
  margin-bottom: 20px;
  background: #FFA500;;
  text-transform: uppercase;
}

.fb-btn {
  border: 2px solid #d3dae9;
  color: #8fa1c7;
  
}
.fb-btn span {
  font-weight: bold;
  color: #455a81;
 
}

.sign-in {
  transition-timing-function: ease-out;
  
}
.cont.s--signup .sign-in {
  transition-timing-function: ease-in-out;
  transition-duration: 1.2s;
  -webkit-transform: translate3d(640px, 0, 0);
          transform: translate3d(640px, 0, 0);
          
}

.sign-up {
  -webkit-transform: translate3d(-900px, 0, 0);
          transform: translate3d(-900px, 0, 0);
}
.cont.s--signup .sign-up {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}

.icon-link {
  position: absolute;
  left: 5px;
  bottom: 5px;
  width: 32px;
}
.icon-link img {
  width: 100%;
  vertical-align: top;
}
.icon-link--twitter {
  left: auto;
  right: 5px;
}

  </style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">


<form method="POST" action="{{ route('login') }}">
@csrf
<p class="tip">.</p>
<div class="cont">
<div class="form sign-in">
<h2>Welcome back,</h2>
<label>
<span style="color:808080">{{ __('Email Address') }}</span>
<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus/>
    @if ($errors->has('email'))
        <span class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
</label>
<label>
<span style="color:808080">{{ __('Password') }}</span>
<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required/>
@if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
</label>
<p style="color:808080" class="forgot-pass">Forgot password?</p>
<button type="submit" class="submit">Sign In</button>
<button type="button" class="fb-btn">Connect with <span>mobile</span></button>
</div></form>





<form method="POST" action="{{ route('register') }}">
                        @csrf
<div class="sub-cont">
<div class="img">
<div class="img__text m--up">
<h2>New here?</h2>
<p>Sign up and discover great amount of new opportunities!</p>
</div>
<div class="img__text m--in">
<h2>One of us?</h2>
<p>If you already has an account, just sign in. We've missed you!</p>
</div>
<div class="img__btn">
<span class="m--up">Sign Up</span>
<span class="m--in">Sign In</span>
</div>
</div>
<div class="form sign-up">
<h2>Time to register for one,</h2>
<label>



<span style="color:808080">Fullname</span>
<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
@if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
</label>
<label>
<span style="color:808080">Email</span>
<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

@if ($errors->has('email'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
</label>
<label>
<span style="color:808080">Password</span>
<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

@if ($errors->has('password'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif
</label>
<label>
<span style="color:808080">Confirm Password</span>
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
</label>
<button type="submit" class="submit">Sign Up</button>
<button type="button" class="fb-btn">Join with <span>mobile</span></button>
</div>
</div>
</div></form>






<a href="https://dribbble.com/shots/3306190-Login-Registration-form" target="_blank" class="icon-link">

</a>

<script id="rendered-js">
      document.querySelector('.img__btn').addEventListener('click', function () {
  document.querySelector('.cont').classList.toggle('s--signup');
});
      //# sourceURL=pen.js
    </script>
</body>
</html>

