@extends('layouts.app')

@section('content')

    <div id="contact" class="contact-info-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2>Login.</h2>
                    </div>
                </div>
            </div> <!--/.row-->

            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                    <div class="contact-form">
                        <form id="contact-fo" method="post" action="{{ route('login') }}"> <!-- Start Contact From -->
                            @csrf

                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <i class="fa fa-envelope-o"></i>
                                            <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="form-group">
                                            <i class="fa fa-lock"></i>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-effect btn-sent" value="Lobin">
                                    </div>
                                    <div class="col-md-12">
                                        <a href="{{ route("password.request") }}"> Forget Your Password</a>
                                    </div>

                                </div>
                            </div>
                        </form> <!-- End Contact From -->
                    </div>
                </div>
          </div> <!--/.row-->
        </div> <!--/.container-->
    </div>
