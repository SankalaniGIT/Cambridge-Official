@extends('layouts.app')
@section('title','Register')

@section('style',asset("css/gallery/gallery.css"))

@section('back')
    @include('back.back')
@endsection

@section('status')
    <div class="row" id="errorBlock">
        <div class="col-lg-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@stop
@section('content')
    @if($success != '')
        <div class="panel-body" style="background-color: {{ $bgColor }};width: 200px;top:65px;color: white;z-index: 100;position: absolute;float: right">
            <span class="pull-right" >{{$success}}</span>
        </div>

    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @if(\Illuminate\Support\Facades\Auth::check())
                @if(\App\User::where('email',Auth::user()->email)->first()->privilege == 'master')

                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('addUserAdmin') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="previledge-status" class="col-md-4 control-label">Privilege Status</label>

                                <div class="col-md-6">
                                    <select name="privilegeStatus" id="privilegeStatus" class="form-control">
                                        <option value="">Select Privilege Status</option>
                                        <option value="master">Master</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

               @else
                    <div>
                        <center>
                            <div class="text-danger">You're not authorized to view this</div>
                        </center>

                    </div>

               @endif
             @else
                    <div>
                        <center>
                            <div class="text-danger">You're not authorized logged into to view this</div>
                        </center>

                    </div>

              @endif
            </div>
        </div>
    </div>
@endsection
