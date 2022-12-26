@extends('admin.layouts.loginlayout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mr-auto ml-auto">
            <form class="bg-light" method="post" action="" ectype="">
                @csrf
                <div class="form-group">
                    <button type="submit" class="btn btn-primary w-100">Reset your password</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection()