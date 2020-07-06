@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Add New Department</li>
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
                        <h3>All New Department</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('department.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All Department</button></a>
                    </div>
                </div>
                <hr><hr>
                <form method="POST" action="{{ route('department.store') }}" class="new-added-form">
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
                            <label for="cariculam_id">Cariculam Name *</label>
                            <select name="cariculam_id" id="cariculam_id" class="select2 @error('cariculam_id') is-invalid @enderror" autofocus>
                                <option value="">Please Select*</option>
                                @foreach ($cariculams as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label for="department_name">Department Name *</label>
                            <input id="department_name" type="text" name="department_name" class="form-control @error('department_name') is-invalid @enderror"  value="{{ old('department_name') }}"placeholder="Ex. Computer Technology"  autocomplete="department_name" >
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label for="department_code">Department Code *</label>
                            <input id="department_code" type="number" name="department_code" class="form-control @error('department_code') is-invalid @enderror"  value="{{ old('department_code') }}"placeholder="Ex. 66"  autocomplete="department_code" >
                        </div>
                        <div class=" col-lg-6 col-12 form-group">
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