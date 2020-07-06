@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Add New Session</li>
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
                        <h3>All New Session</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('session.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All Session</button></a>
                    </div>
                </div>
                <hr><hr>
                <form method="POST" action="{{ route('session.store') }}" class="new-added-form">
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
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="session_name">Session Name *</label>
                            <input id="session_name" type="text" name="session_name" class="form-control @error('session_name') is-invalid @enderror"  value="{{ old('session_name') }}"placeholder="Ex. 2019-2020"  autocomplete="session_name" >
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="session_code">Session Code *</label>
                            <input id="session_code" type="text" name="session_code" class="form-control @error('session_code') is-invalid @enderror"  value="{{ old('session_code') }}"placeholder="Ex. 2019-20"  autocomplete="session_code" >
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="session_short_code">Session Short Code *</label>
                            <input id="session_short_code" type="text" name="session_short_code" class="form-control @error('session_short_code') is-invalid @enderror"  value="{{ old('session_short_code') }}"placeholder="Ex. 19-20"  autocomplete="session_short_code" >
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="activation_status">Activation Status *</label>
                            <select name="activation_status" id="activation_status" class="select2  @error('activation_status') is-invalid @enderror">
                                <option value="">Please Select *</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
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