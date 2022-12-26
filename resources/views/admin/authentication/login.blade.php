@extends('admin.layouts.loginlayout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mr-auto ml-auto">
            <form class="bg-light login-form" method="post" action="{{route('admin.check-login')}}" ectype="">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">{{__('admin.username')}}</label>
                    <input type="text" class="form-control username" name="username" placeholder="{{__('admin.enter_username')}}">
                    <small class="form-text text-danger user-valid d-none"></small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">{{__('admin.password')}}</label>
                    <input type="password" class="form-control password" name="password" placeholder="{{__('admin.enter_password')}}">
                    <small class="form-text text-danger pass-valid d-none"></small>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember_me">
                    <label class="form-check-label" for="exampleCheck1">{{__('admin.remember_me')}}</label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn w-100">{{__('admin.login')}}</button>
                </div>
                <div class="form-group text-center">
                    <a href="{{route('admin.forget-passowrd')}}">Forgotten password?</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection()