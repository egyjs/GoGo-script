@extends('layouts.dash')
@section("content")
  <div class="app-title">
    <div>
      <h1><i class="fa fa-cog"></i> Settings</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="tile">
        <h3>Update Your Info</h3>
        <hr>
        <div class="tile">
          <div class="tile-body">
            @if(session("stat"))
              <h2 class="alert alert-success">{{ session("stat") }}</h2>
            @endif
            @if($errors->any())
              <div class="card mb-3 text-white bg-danger">
                <div class="card-body">
                  <blockquote class="card-blockquote">
                    <p>There Is An Error.</p>
                    <footer>
                      @foreach($errors->all() as $er)
                        {{ $er }}
                     @endforeach
                    </footer>
                  </blockquote>
                </div>
              </div>
              @endif
            <form enctype="multipart/form-data" style="font-size: 16px" class="form-horizontal" action="{{ route("dash.set.up") }}" method="post">
              @csrf
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-user"></i> Name</label>
                <div class="col-md-8">
                  <input name="name" value="{{ $info->name }}" class="form-control" type="text" placeholder="Enter full name">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-briefcase"></i> Jops</label>
                <div class="col-md-8">
                  <input name="jobs" value="{{ $info->jobs }}" class="form-control" type="text" placeholder="Enter Your Jops">
                  <p style="font-size: 12px">Please Put , after each Jop</p>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-phone"></i> Phone</label>
                <div class="col-md-8">
                  <input name="phone" value="{{ $info->phone }}" class="form-control" type="tel" placeholder="Enter Your Phone">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-envelope-o"></i> Email</label>
                <div class="col-md-8">
                  <input name="email" value="{{ $info->email }}" class="form-control col-md-8" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-facebook-official"></i> FB Page</label>
                <div class="col-md-8">
                  <input name="fb" value="{{ $info->fb }}" class="form-control col-md-8" type="text" placeholder="Your FB Page Link">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-youtube-square"></i> YT Chanel</label>
                <div class="col-md-8">
                  <input name="yt" value="{{ $info->yt }}" class="form-control col-md-8" type="text" placeholder="Your YT Chanel Link">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-twitter-square"></i> Twitter Page</label>
                <div class="col-md-8">
                  <input name="tw" value="{{ $info->tw }}" class="form-control col-md-8" type="text" placeholder="Your Twitter Page Link">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-linkedin-square"></i> linkedin</label>
                <div class="col-md-8">
                  <input name="in" value="{{ $info->in }}" class="form-control col-md-8" type="text" placeholder="Your linkedin Page Link">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-location-arrow"></i> Address</label>
                <div class="col-md-8">
                  <textarea name="locat" maxlength="150" class="form-control" rows="4" placeholder="Enter your address">
                    {{ $info->locat }}
                  </textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3"><I class="fa fa-photo"></I> Your Photo</label>
                <div class="col-md-8">
                  <input name="photo" class="form-control" type="file">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3"><I class="fa fa-photo"></I> Your Site Icon</label>
                <div class="col-md-8">
                  <input name="icon" class="form-control" type="file">
                </div>
              </div>
              <div class="form-group">
                <button class="btn btn-info" type="submit"><i class="fa fa-check"></i>Update</button>
              </div>
            </form>
          </div>
       </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="tile">
        <h5><img src="{{  asset("$info->icon") }}" style="width: 25px"> {{ $info->name  }} </h5>
        <div style="text-align: center"> <img style="border-radius: 100%;width: 40%" src="{{ asset("$info->photo") }}" /></div>
        <h4>Name: {{ $info->name }}</h4>
        <h4>Email: {{ $info->email }}</h4>
        <h4>Phone: {{ $info->phone  }}</h4>
        <h4>Address: {{ $info->locat  }}</h4>
        @push("css")
          <style>
            .links a{
              color: #fff;
              padding: 8px;
              padding-top: 2px;
              padding-bottom: 2px;
            }
            .links .fb{
              background-color: #4267b2;
            }
            .links a.yt{
              background-color: #f00 ;
            }
            .links a.ln{
              background-color: #0274b3;
            }
            .links a.tw{
              background-color: #1da1f3;
            }
          </style>
         @endpush
        <div class="links">
          <a class="fb" style="display: inline-block" href="{{ $info->fb }}"><i class="fa fa-facebook"></i></a>
          <a class="yt" style="display: inline-block" href="{{ $info->fb }}"><i class="fa fa-youtube"></i></a>
          <a class="ln" style="display: inline-block" href="{{ $info->in }}"><i class="fa fa-linkedin"></i></a>
          <a class="tw " style="display: inline-block" href="{{ $info->tw }}"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </div>

  @endsection