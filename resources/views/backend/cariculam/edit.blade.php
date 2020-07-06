@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Edit Cariculam</li>
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
                        <h3>Edit Cariculam Information</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('cariculam.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All Cariculam</button></a>
                    </div>
                </div>
                <hr><hr>
                <form method="POST" action="{{ route('cariculam.update',$cariculam->id) }}" class="new-added-form">
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
                        <div class="col-xl-4 col-lg-4 col-12 form-group">
                            <label for="name">Cariculam Name *</label>
                            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ $cariculam->name }}">
                        </div>
                        <div class="col-xl-4  col-lg-4 col-12 form-group">
                            <label for="activation_status">Activation Status *</label>
                            <select name="activation_status" id="activation_status" class="select2  @error('activation_status') is-invalid @enderror">
                                <option value="">Please Select *</option>
                                <option value="1" {{(1==$cariculam->activation_status)?'selected':''}}>Active</option>
                                <option value="0"{{(0==$cariculam->activation_status)?'selected':''}}>Inactive</option>
                            </select>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-12 form-group">
                            <label for="coments">Coments/Designation *</label>
                            <textarea id="coments" name="coments" class="textarea form-control @error('coments') is-invalid @enderror" cols="10" rows="4">{{$cariculam->coments}}</textarea>
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