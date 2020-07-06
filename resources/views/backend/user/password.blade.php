@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Password Change</li>
    </ul>
</div>
<!-- Breadcubs Area End Here -->
<!-- Account Settings Area Start Here -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Change Your Password</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('user.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All User</button></a>
                    </div>
                </div>
                <hr><hr>
                <form method="POST" action="{{ route('user.password.update') }}" class="new-added-form">
                    @csrf
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="row">                        
                        <div class="col-lg-6 col-12 form-group">
                            <label for="password">{{ __('New Password *') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Type new Password" >
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label for="password-confirm">{{ __('Retype New Password *') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Retype New Password">
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection