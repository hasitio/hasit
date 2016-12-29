@extends('layouts.master')
@section('title', 'hasit')

@section('content')
<div class="row">
  <div class="col-xs-12 col-sm-6 col-sm-offset-3">
    <div class="panel panel-default auth">
        <div class="panel-heading">my profile</div>
        <div class="panel-body">
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/updateEmail') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">email</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-sign-in"></i> update email
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</row>
@endsection
