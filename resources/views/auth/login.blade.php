<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>Web Admin panel</title>
<link rel="icon" type="image/png" href="temp/images/fav.png">
<link rel="stylesheet" href="temp/css/font-awesome.min.css">
<link rel="stylesheet" href="temp/css/bootstrap.min.css">
<link rel="stylesheet" href="temp/css/animate.min.css">
<link rel="stylesheet" href="temp/css/style.css">
<link rel="stylesheet" href="temp/css/color.css">
<link rel="stylesheet" href="temp/css/responsive.css">
</head>
<body>
<!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
<div class="panel-layout">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="admin-lock vh100">
          <div class="admin-form">
              <div class="logo"><img src="temp/images/logo2.png" alt=""></div>
            <h4>Sign In Account</h4>
            <span>Please enter your user information</span>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                <label><i class="fa fa-envelope"></i></label>
              <!-- <input type="text" id="email" placeholder="Email Address"> -->
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                            

                            <div class="col-md-12">
                                <input id="email" type="email"  name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <label><i class="fa fa-unlock-alt"></i></label>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-4 control-label">Password</label> -->

                            <div class="col-md-12">
                                <input id="password" type="password" placeholder="Password" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <input type="checkbox" id="remember">
              <label for="remember">Remember Me <a href="#" title="">Forgot password?</a></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                <span>Don't have an account? <a href="#" title="">Sign up</a></span> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="temp/js/jquery.js"></script> 
<script src="temp/js/bootstrap.min.js"></script>
<script src="temp/js/custom.js"></script>
</body>
</html>
