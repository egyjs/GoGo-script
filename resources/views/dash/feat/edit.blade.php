@extends('layouts.dash')
@section("content")
  <div class="app-title">
    <div>
      <h1><i class="fa fa-info"></i> About Section</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8">
      <div class="tile">
        <h3>Edit Feature</h3>
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
            <form enctype="multipart/form-data" style="font-size: 16px" class="form-horizontal" action="{{ route("dash.feat.e",['id'=>$service->id]) }}" method="post">
              @csrf
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-align-left"></i> Name</label>
                <div class="col-md-8">
                  <input type="text" name="head" value="{{ $service->head }}" class="form-control" >
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-align-left"></i> Description</label>
                <div class="col-md-8">
                  <textarea rows="5" class="form-control" name="body">
                    {{ $service->body }}
                  </textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-photo"></i> Icon</label>
                <div class="col-md-8">
                  <input type="file" name="icon" class="form-control" >
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
        <h5><img style="width: 25px" src="<?php $ic = $info->icon; ?>{{  asset("$ic") }}"> {{ $info->name  }} </h5>
        <div style="text-align: center"> <img style="border-radius: 0%;width: 40%" src="{{ asset($service->icon) }}" /></div>
        <br>
        <h6 class="text-center">
          <p style="word-wrap: break-word">{{ $service->head }}</p>
        </h6>
        <p style="text-align: center; word-wrap: break-word">{{ $service->body }}</p>

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
          <a class="yt" style="display: inline-block" href="{{ $info->yt }}"><i class="fa fa-youtube"></i></a>
          <a class="ln" style="display: inline-block" href="{{ $info->in }}"><i class="fa fa-linkedin"></i></a>
          <a class="tw " style="display: inline-block" href="{{ $info->tw }}"><i class="fa fa-twitter"></i></a>
        </div>
      </div>
    </div>
  </div>

@endsection