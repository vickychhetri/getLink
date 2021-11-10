@extends('Guest.layout')
@section('title','Officially GetLink.Page Website')
@section('metaheadercontainer')
@endsection

@section('container')
<!-- MENU -->
<x-User.Header.Menu />


<div class="container" style="margin-bottom: 9%;;">
    <div id="loginbox" style="margin-top: 50px;" class="mainbox col-lg-6 offset-md-3 col-md-8 offset-sm-2">
        <div class="card card-inverse card-info">
            <div class="card-header">
                <div class="card-title" style="font-weight: bold;">Sign In</div>
                <div style="float: right; font-size: 80%; position: relative; top: -10px;"><a href="/ForgotPassword">Forgot
                        password?</a>
                </div>
            </div>
            <div style="padding-top: 30px;" class="card-block">
                <div style="display: none;" id="login-alert" class="alert alert-danger col-md-12"></div>
                <form id="loginform" class="" role="form" action="/Login" method="post">
                    {{csrf_field()}}
                    <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i
                                class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value=""
                            placeholder="username or email" />
                    </div>
                    <div style="margin-bottom: 25px;" class="input-group"> <span class="input-group-addon"><i
                                class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password"
                            placeholder="password" />
                    </div>
                    <div class="input-group">
                        <div class="form-check">
                            <label>
                                <input id="login-remember" type="checkbox" name="remember" value="1" />Remember
                                me</label>
                        </div>
                    </div>
                    <div style="margin-top: 10px;" class="form-group">
                        <!-- Button -->
                        <div class="col-md-12 controls">
                             <button id="btn-login" href="#" class="btn btn-success">Login </button>
                            <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Gmail</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 control">
                            <div style="padding-top: 15px; font-size: 85%;">Don't have an account! <a href="/Register"
                                    onclick="$('#loginbox').hide(); $('#signupbox').show()">

                                    Sign Up Here

                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="signupbox" style="display: none; margin-top: 50px;"
        class="mainbox col-lg-6 offset-md-3 col-md-8 offset-sm-2">
        <div class="card card-inverse card-info">
            <div class="card-header">
                <div class="card-title">Sign Up</div>
                <div style="float: right; font-size: 85%; position: relative; top: -10px;"><a id="signinlink" href="#"
                        onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>
                </div>
            </div>
            <div class="card-block">
                <form id="signupform" class="" role="form">
                    <div id="signupalert" style="display: none;" class="alert alert-danger">
                        <p>Error:</p> <span></span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-lg-3 form-control-label">Email</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="email" placeholder="Email Address" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-lg-3 form-control-label">First Name</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="firstname" placeholder="First Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-lg-3 form-control-label">Last Name</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="lastname" placeholder="Last Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-lg-3 form-control-label">Password</label>
                        <div class="col-lg-9">
                            <input type="password" class="form-control" name="passwd" placeholder="Password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="icode" class="col-lg-3 form-control-label">Invitation Code</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" name="icode" placeholder="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Button -->
                        <div class="offset-md-3 col-lg-9">
                            <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i>
                                &nbsp Sign Up</button> <span style="margin-left: 8px;">or</span>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #999; padding-top: 20px;" class="form-group">
                        <div class="offset-md-3 col-lg-9">
                            <button id="btn-fbsignup" type="button" class="btn btn-primary"><i
                                    class="icon-facebook"></i>   Sign Up with Facebook</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection