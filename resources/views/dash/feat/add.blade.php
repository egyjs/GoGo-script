@extends('layouts.dash')
@section("content")
  <div class="app-title">
    <div>
      <h1><i class="fa fa-info"></i> About Section</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
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
            <form enctype="multipart/form-data" style="font-size: 16px" class="form-horizontal" action="{{ route("dash.feat.a") }}" method="post">
              @csrf
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-align-left"></i> Name</label>
                <div class="col-md-8">
                  <input type="text" name="head" placeholder="Feature Name" class="form-control" >
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-md-3"><i class="fa fa-align-left"></i> Description</label>
                <div class="col-md-8">
                  <textarea rows="5" class="form-control" name="body">
                    Feature Description
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
  @endsection