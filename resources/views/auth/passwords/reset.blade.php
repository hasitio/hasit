@extends('layouts.master')
@section('title', 'hasit | reset')

@section('content')
<div class="row">
  <div class="col-xs-12 col-sm-6 col-sm-offset-3">
    <div class="panel panel-default auth">
        <div class="panel-heading">reset</div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
              {{ csrf_field() }}

              <input type="hidden" name="token" value="{{ $token }}">

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label for="email" class="col-md-4 control-label">email</label>

                  <div class="col-md-6">
                      <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}">

                      @if ($errors->has('email'))
                          <span class="help-block">
                              <strong>{{ $errors->first('email') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="password" class="col-md-4 control-label">password</label>

                  <div class="col-md-6">
                      <input id="password" type="password" class="form-control" name="password">

                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                  <label for="password-confirm" class="col-md-4 control-label">confirm password</label>
                  <div class="col-md-6">
                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                      @if ($errors->has('password_confirmation'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password_confirmation') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                          <i class="fa fa-btn fa-refresh"></i> reset
                      </button>
                  </div>
              </div>
          </form>
        </div>
    </div>
  </div>
</row>
@endsection
