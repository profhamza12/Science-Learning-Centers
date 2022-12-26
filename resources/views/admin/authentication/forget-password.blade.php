@extends('admin.layouts.loginlayout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mr-auto ml-auto">
            <form class="bg-light forget-pass-form" method="post" action="{{route('admin.password.email')}}" ectype="">
                @csrf
                @if(Session::has('success_msg'))
                <div class="alert alert-success">{{Session::get('success_msg')}}</div>
                @endif
                @error('err_msg')
                <div class="alert alert-success">{{$message}}</div>
                @enderror
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control email @error('email') is-invalid @enderror" name="email" placeholder="Enter email">
                    @error('email')
                    <small class="form-text text-danger email-valid d-none @error('email') d-block @enderror">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary w-100">Reset password</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection