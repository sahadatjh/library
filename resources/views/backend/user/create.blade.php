@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Add New User</li>
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
                        <h3>All Users Data</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('user.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All User</button></a>
                    </div>
                </div>
                <hr><hr>
                <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data" class="new-added-form">
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
                            <label for="name">Your Name *</label>
                            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}"placeholder="Ex. Sahadat Hossain"  autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="email">Your Email *</label>
                            <input id="email" type="email"  name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Ex. sahadat@gmail.com" autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="text" id="phone" name="phone"  placeholder="Ex. 01756603812" class="form-control  @error('phone') is-invalid @enderror">
                            
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>                               
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="nid">National ID *</label>
                            <input type="text" id="nid" name="nid"  placeholder="Ex. 6441102099" class="form-control  @error('nid') is-invalid @enderror">
                            
                            @error('nid')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="usertype">User Type *</label>
                            <select name="usertype" id="usertype" class="select2 @error('usertype') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                                <option value="3">User</option>
                            </select>
                            @error('usertype')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="gender">Gender *</label>
                            <select name="gender" id="gender" class="select2 @error('gender') is-invalid @enderror">
                                <option value="">Please Select Gender *</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="designation">Designation *</label>
                            <select name="designation" id="designation" class="select2 @error('joining_date') is-invalid @enderror">
                                <option value="">Please Select*</option>
                                <option value="1">Principal</option>
                                <option value="2">Accountant</option>
                                <option value="3">Instructor</option>
                                <option value="4">Jr. Instructor</option>
                                <option value="5">Librarian</option>
                            </select>
                            @error('designation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="religion">Religion *</label>
                            <select name="religion" id="religion" class="select2  @error('religion') is-invalid @enderror">
                                <option value="">Please Select *</option>
                                <option value="Islam">Islam</option>
                                <option value="Christian">Christian</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddhish">Buddhish</option>
                                <option value="Others">Others</option>
                            </select>
                            @error('religion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="joining_date">Joining Data *</label>
                            <input type="text" name="joining_date" id="joining_date" placeholder="dd/mm/yyyy" class="form-control air-datepicker  @error('joining_date') is-invalid @enderror "
                                data-position='bottom right'>
                            <i class="far fa-calendar-alt"></i>
                            @error('joining_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="dob">Date Of Birth *</label>
                            <input type="text" name="dob" id="dob" placeholder="dd/mm/yyyy" class="form-control air-datepicker @error('dob') is-invalid @enderror " data-position='bottom right'>
                            <i class="far fa-calendar-alt"></i>
                            @error('dob')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="activation_status">Activation Status *</label>
                            <select name="activation_status" id="activation_status" class="select2  @error('activation_status') is-invalid @enderror">
                                <option value="">Please Select *</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            @error('activation_status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="password">{{ __('Password *') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label for="password-confirm">{{ __('Confirm Password *') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                        </div>
                        <div class="col-xl-3 col-lg-6 form-group">
                            <label for="address">Adress *</label>
                            <textarea id="address" name="address" class="textarea form-control @error('address') is-invalid @enderror" cols="10" rows="4"></textarea>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-xl-3 col-lg-6 form-group mg-t-30">
                            <label class="text-dark-medium">Upload Photo(20-100KB)</label>
                            <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" id="imgInp">
                        </div>
                        <div class="col-xl-3 col-lg-6 form-group mg-t-30"> 
                            <img id="blah" src="#" alt="your image" style="height: 150px; margin: 10px;padding:3px; border: 1px solid #000" />
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