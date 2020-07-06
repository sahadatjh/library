@extends('backend.master')
@section('content')
<!-- Breadcubs Area Start Here -->
<div class="breadcrumbs-area">
    {{-- <h3>Users</h3> --}}
    <ul>
        <li>
            <a href="{{route('dashboard')}}">Home</a>
        </li>
        <li>Add New Books</li>
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
                        <h3>New Books Information Add</h3>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('book.index')}}"><button class="btn-fill-lg font-normal text-light gradient-orange-peel">All Books</button></a>
                    </div>
                </div>
                <hr><hr>
                <form method="POST" action="{{ route('book.store') }}" class="new-added-form">
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
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label for="name">Book Name </label>
                            <input id="name" type="text" name="name" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}"placeholder="Ex. Programming Essentials" required="required" autocomplete="name" autofocus>
                        </div> 
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="code">Subject code </label>
                            <input type="number" id="code" name="code"  placeholder="Ex. 66631" class="form-control  @error('code') is-invalid @enderror" required="required" >
                        </div>  
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="theory">Theory </label>
                            <input type="number" id="theory" name="theory"  placeholder="Ex. 2" class="form-control  @error('theory') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="practical">Practical </label>
                            <input type="number" id="practical" name="practical"  placeholder="Ex. 3" class="form-control  @error('practical') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="credit">Credit </label>
                            <input type="number" id="credit" name="credit"  placeholder="Ex. 3" class="form-control  @error('credit') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="tc">TC </label>
                            <input type="number" id="tc" name="tc"  placeholder="Ex. 40" class="form-control  @error('tc') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="tf">TF </label>
                            <input type="number" id="tf" name="tf"  placeholder="Ex. 60" class="form-control  @error('tf') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="pc">PC </label>
                            <input type="number" id="pc" name="pc"  placeholder="Ex. 25" class="form-control  @error('pc') is-invalid @enderror">
                        </div>                               
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="total_mark">PF </label>
                            <input type="number" id="pf" name="pf" placeholder="Ex. 25" class="form-control  @error('pf') is-invalid @enderror">
                        </div>   
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="total_mark">Total Mark </label>
                            <input type="number" id="total_mark" name="total_mark"  placeholder="Ex. 150" class="form-control  @error('total_mark') is-invalid @enderror">
                        </div>   
                        <div class="col-xl-2 col-lg-6 col-12 form-group">
                            <label for="activation_status">Activation Status </label>
                            <select name="activation_status" id="activation_status" class="select2  @error('activation_status') is-invalid @enderror" required="required">
                                <option value="">Please Select </option>
                                <option value="1" selected>Active</option>
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