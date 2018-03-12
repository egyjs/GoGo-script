@extends('layouts.app')

@section('content')

    <div id="contact" class="contact-info-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2>Password Resset.</h2>
                    </div>
                </div>
            </div> <!--/.row-->

            <div class="row">
                <div class="col-md-5 col-md-offset-3">
                    <div class="contact-form">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <i class="fa fa-envelope-o"></i>
                                            <input placeholder="Your EmAil" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-effect btn-sent" value="Send Password Reset Link">
                                    </div>
                                    <div class="col-md-12">
                                        <a href="{{ route("login") }}"> Back To Login</a>
                                    </div>

                                </div>
                            </div>
                        </form> <!-- End Contact From -->
                    </div>
                </div>
            </div> <!--/.row-->
        </div> <!--/.container-->
    </div>
@endsection
